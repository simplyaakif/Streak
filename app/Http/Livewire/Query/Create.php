<?php

    namespace App\Http\Livewire\Query;

    use App\Models\Course;
    use App\Models\Query;
    use App\Models\Timeline;
    use App\Models\User;
    use Auth;
    use Carbon\Carbon;
    use Livewire\Component;
    use phpDocumentor\Reflection\Types\Collection;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Create extends Component {

        public Query $query;
        public $validationAlert = false;
        public $timelines;
        public $qCourses
            = [
                'course_id'     => '',
                'learning_type' => '',
                'remarks'       => '',
            ];
        public $timeline
            = [
                'timeline_id'  => 1,
                'remarks'      => '',
                'fw_date_time' => null,
            ];
        public $courses;
        public $users;

        public array $mediaToRemove = [];

        public array $mediaCollections = [];


        public function mount(Query $query)
        {
            $this->query     = $query;
            if(!Auth::user()->is_admin){
                $this->query->staff_user_id = Auth::id();
            }

            $this->courses   = Course::all();
            $this->users     = User::where('is_staff',1)->get();
            $this->timelines = Timeline::all();
        }

        public function render()
        {
            $errors                = $this->getErrorBag();
            if(count($errors) > 0) {
                $this->validationAlert = true;
            }else{

                $this->validationAlert = false;
            }
            return view('livewire.query.create');
        }


        public function submit()
        {

//            dd($this->timeline);
            $this->validate();


            $this->query->save();
            $this->qCourses['created_at'] = now();
            $this->query->courses()->attach($this->qCourses['course_id'], $this->qCourses);

            $this->timeline['created_at'] = now();

            if($this->timeline['fw_date_time']) {
                $this->timeline['fw_date_time'] = Carbon::parse($this->timeline['fw_date_time']);
            }
//            dd($this->timeline);


            $this->query->timelines()->attach($this->timeline['timeline_id'], $this->timeline);

            $this->syncMedia();

            return redirect()->route('admin.queries.index');
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
                'mediaCollections.query_dp'      => [
                    'array',
                    'nullable',
                ],
                'mediaCollections.query_dp.*.id' => [
                    'integer',
                    'exists:media,id',
                ],
                'query.name'                     => [
                    'string',
                    'required',
                    'min:3',
                ],
                'query.mobile'                   => [
                    'string',
                    'required',
                ],
                'query.email'                    => [
                    'email:rfc',
                    'nullable',
                ],
                'query.address'                  => [
                    'string',
                    'nullable',
                ],
                'query.p_timings'                => [
                    'string',
                    'nullable',
                ],
                'query.remarks'                  => [
                    'string',
                    'nullable',
                ],
                'query.telephone'                => [
                    'string',
                    'nullable',
                ],
                'query.reference'                => [
                    'string',
                    'nullable',
                ],
                'query.staff_user_id'            => [
                    'numeric',
                    'required',
                ],
                'qCourses.course_id'             => [
                    'numeric',
                    'required'
                ],
                'qCourses.learning_type'         => [
                    'required'
                ],
                'qCourses.remarks'               => [
                    'nullable',
                    'string'
                ],

            ];
        }

        protected function syncMedia(): void
        {
            collect($this->mediaCollections)->flatten(1)->each(fn($item) => Media::where('uuid', $item['uuid'])->update(['model_id' => $this->query->id]));

            Media::whereIn('uuid', $this->mediaToRemove)->delete();
        }
    }
