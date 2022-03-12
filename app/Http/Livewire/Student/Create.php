<?php

    namespace App\Http\Livewire\Student;

    use App\Mail\StudentUserDetailsMail;
    use App\Models\Account;
    use App\Models\Batch;
    use App\Models\Recovery;
    use App\Models\Student;
    use App\Models\User;
    use App\Notifications\StudentAdmissionNotification;
    use DB;
    use Hash;
    use Livewire\Component;
    use Mail;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Str;

    class Create extends Component {

        public Student $student;
        public $batches;
        public $accounts;
        public $validationAlert = false;

        public $selectBoxBatchId;

        public array $notifications
            = [
                'sms'     => true,
                'email'   => true,
                'account' => true,
            ];


        public array $mediaToRemove = [];

        public array $listsForFields = [];

        public array $mediaCollections = [];

        public array $selectedBatches = [];

        public function addBatch()
        {

            $batch                   = Batch::find($this->selectBoxBatchId)->toArray();
            $course                  = Batch::find($this->selectBoxBatchId)->course;
            $this->selectedBatches[] = [
                'batch'        => $batch,
                'total_fee'    => $course->price,
                'sessions'     => [
                    'session_start_date' => now()->format('Y-m-d'),
                    'session_end_date'   => now()->add($course['duration'])->format('Y-m-d'),
                    'batch_status'       => 1,
                ],
                'installments' => [
                    [
                        'installment_amount'             => $course->price,
                        'installment_due_date'           => now()->addDay()->format('Y-m-d'),
                        'installment_paid_status'        => 0,
                        'installment_account_id'         => 1,
                        'installment_transaction_number' => '',
                        'installment_paid_on'            => now()->format('Y-m-d')

                    ]
                ],
            ];
//        dd($this->selectedBatches[0]['installments'][0]['installment_amount']);
        }

        public function removeBatch($key)
        {
            unset($this->selectedBatches[$key]);
            $this->selectedBatches = array_values($this->selectedBatches);
        }

        public function addInstallment($activeBatch_id)
        {
            $installmentNumber                                        = count($this->selectedBatches[$activeBatch_id]['installments']);
            $this->selectedBatches[$activeBatch_id]['installments'][] = [
                'installment_amount'             => 0,
                'installment_due_date'           => now()->addMonths($installmentNumber)->addDay()->format('Y-m-d'),
                'installment_paid_status'        => 0,
                'installment_account_id'         => 2,
                'installment_transaction_number' => '',
                'installment_paid_on'            => now()->format('Y-m-d')
            ];
        }

        public function removeInstallment($activeBatch_id, $installment_id)
        {
            unset($this->selectedBatches[$activeBatch_id]['installments'][$installment_id]);
            $this->selectedBatches[$activeBatch_id]['installments']
                = array_values($this->selectedBatches[$activeBatch_id]['installments']);
        }

        public function mount(Student $student)
        {
            $this->batches  = Batch::with('course')->get();
            $this->accounts = Account::all();
            $this->student  = $student;
            $this->initListsForFields();
        }

        public function render()
        {
            $errors = $this->getErrorBag();
            if(count($errors) > 0) {
                $this->validationAlert = true;
            } else {

                $this->validationAlert = false;
            }

            return view('livewire.student.create');
        }

        public function submit()
        {
//            Check if the batches are there
            $this->validate();

//        Create User with Student Role if Email Address Exists
            $randomPassword = Str::random(8);
            $student        = $this->student;

            if($this->student->email) {

                if($this->notifications['account']) {

                    $hashed_password = Hash::make($randomPassword);
                    $user            = User::create([
                                                        'name'     => $this->student->name,
                                                        'email'    => $this->student->email,
                                                        'password' => $hashed_password
                                                    ]);

                    $student->user_id = $user->id;
                    $details          = [
                        'name'     => $this->student->name,
                        'email'    => $this->student->email,
                        'password' => $randomPassword,
                    ];

                    $user->roles()->attach(4);
                    Mail::to($this->student->email)->send(new StudentUserDetailsMail($details));

                    $user->notify(new StudentAdmissionNotification());
                }

            }

            $student = $this->student;
            $student->save();
            $this->syncMedia();


//        Create Student Batches & Recoveries
            foreach($this->selectedBatches as $admit) {
                $student->batches()->attach($admit['batch']['id'], $admit['sessions']);
                $result
                    = DB::table('batch_student')->where('student_id', '=', $student->id)->where('batch_id', '=', $admit['batch']['id'])->latest()->first();
                foreach($admit['installments'] as $installment) {
                    if($installment['installment_paid_status']) {
                        Recovery::create([
                                             'paid_on'          => $installment['installment_paid_on'],
                                             'batch_student_id' => $result->id,
                                             'batch_id'         => $admit['batch']['id'],
                                             'course_id'        => $admit['batch']['course_id'],
                                             'student_id'       => $student->id,
                                             'amount'           => $installment['installment_amount'],
                                             'due_date'         => $installment['installment_due_date'],
                                             'is_paid'          => $installment['installment_paid_status'],
                                             'account_id'       => $installment['installment_account_id'],
                                             'slip_number'      => $installment['installment_transaction_number'],
                                         ]);
                    } else {
                        Recovery::create([
                                             'batch_student_id' => $result->id,
                                             'batch_id'         => $admit['batch']['id'],
                                             'course_id'        => $admit['batch']['course_id'],
                                             'student_id'       => $student->id,
                                             'amount'           => $installment['installment_amount'],
                                             'due_date'         => $installment['installment_due_date'],
                                             'is_paid'          => $installment['installment_paid_status'],
                                             'account_id'       => $installment['installment_account_id'],
                                             'slip_number'      => $installment['installment_transaction_number'],
                                         ]);
                    }

                }

            }

//        Send Email to the Candidate


            return redirect()->route('admin.students.index');
        }

        public function addMedia($media): void
        {
            $this->mediaCollections[$media['collection_name']][] = $media;
        }

        public function removeMedia($media): void
        {
            $collection = collect($this->mediaCollections[$media['collection_name']]);

            $this->mediaCollections[$media['collection_name']]
                = $collection->reject(fn($item) => $item['uuid'] === $media['uuid'])->toArray();

            $this->mediaToRemove[] = $media['uuid'];
        }

        protected function rules(): array
        {
            return [
                'mediaCollections.student_dp'             => [
                    'array',
                    'nullable',
                ],
                'mediaCollections.student_dp.*.id'        => [
                    'integer',
                    'exists:media,id',
                ],
                'selectedBatches'                         => [
                    'required',
                    'array',
                    'min:1'
                ],
                'student.name'                            => [
                    'string',
                    'required',
                ],
                'student.user_id'                         => [
                    'integer',
                    'nullable',
                ],
                'student.father_name'                     => [
                    'string',
                    'nullable',
                ],
                'student.gender'                          => [
                    'nullable',
                    'in:' . implode(',', array_keys($this->listsForFields['gender'])),
                ],
                'student.nationality'                     => [
                    'string',
                    'nullable',
                ],
                'student.date_of_birth'                   => [
                    'nullable',
                    //                    'date_format:' . config('project.date_format'),
                ],
                'student.cnic_passport'                   => [
                    'string',
                    'nullable',
                ],
                'student.mobile'                          => [
                    'string',
                    'required',
                ],
                'student.email'                           => [
                    'email:rfc',
                    'required',
                    'unique:App\Models\User,email',
                ],
                'mediaCollections.student_documents'      => [
                    'array',
                    'nullable',
                ],
                'mediaCollections.student_documents.*.id' => [
                    'integer',
                    'exists:media,id',
                ],
            ];
        }

        protected function initListsForFields(): void
        {
            $this->listsForFields['user']   = User::pluck('name', 'id')->toArray();
            $this->listsForFields['gender'] = $this->student::GENDER_SELECT;
        }

        protected function syncMedia(): void
        {
            collect($this->mediaCollections)->flatten(1)->each(fn($item) => Media::where('uuid', $item['uuid'])->update(['model_id' => $this->student->id]));

            Media::whereIn('uuid', $this->mediaToRemove)->delete();
        }
    }
