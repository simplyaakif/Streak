<?php

    namespace App\Livewire\Admin\Certificate;

    use App\Models\Admin\Certificate;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Course;
    use App\Models\Student;
    use Carbon\Carbon;
    use Livewire\Component;

    class Create extends Component {

        public bool $showModal = false;
        public BatchStudent $batchStudent;

        public Student $student;
        public Batch $batch;
        public Course $course;

        public Certificate $certificate;

        public function mount()
        {
            $this->student = Student::findOrFail($this->batchStudent->student_id);
            $this->batch = Batch::findOrFail($this->batchStudent->batch_id);
            $this->course = Course::findOrFail($this->batch->course_id);
            $this->certificate = Certificate::make([
                'batch_student_id'=>$this->batchStudent->id,
                'student_id'=>$this->batchStudent->student_id,
                'batch_id'=>$this->batchStudent->batch_id,
                                                   ]);
        }
        public function submit()
        {
            $this->validate();
            $parta = Carbon::parse($this->batchStudent->session_start_date)->format('ymd');
            $partb = str_pad($this->batchStudent->id, 3, '0', STR_PAD_LEFT);;
            $reg = $parta . '-' . $partb;
            $this->certificate->batch_student_id = $this->batchStudent->id;
            $this->certificate->student_id = $this->student->id;
            $this->certificate->batch_id = $this->batch->id;
            $this->certificate->published_at = now()->toDateString();
            $this->certificate->registration_number = $reg;

            $this->certificate->save();
            $this->showModal = false;

        }

        public function rules()
        {
            return [
                'student.name'=>'string',
                'student.father_name'=>'string',
                'course.title'=>'string',
                'batch.title'=>'string',
                'course.duration'=>'string',
                'certificate.grade'=>'string',
            ];
        }
        public function render()
        {
            return view('livewire.admin.certificate.create');
        }
    }
