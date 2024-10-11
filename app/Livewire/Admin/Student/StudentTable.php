<?php

    namespace App\Livewire\Admin\Student;

    use App\Models\Batch;
    use App\Models\Student;
    use Carbon\Carbon;
    use DB;
    use Livewire\Component;
    use Livewire\WithPagination;

    class StudentTable extends Component {
        use withPagination;
        public $batches;

        public $sortField = 'created_at';
        public $sortDirection = 'desc';
        public $showFilters = true;
        public $filters
            = [
                'search'   => null,
                'batch'  => '',
                'date_min' => null,
                'date_max' => null,
            ];

        public function mount()
        {
            $this->batches = Batch::all();
        }

        public function sortBy($field)
        {
            if($this->sortField === $field) {
                $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                $this->sortDirection = 'asc';
            }
            $this->sortField = $field;
        }

        public function resetFilters()
        {
            $this->reset('filters');
        }

        public function updatedFilters()
        {
            $this->resetPage();
        }

        public function render()
        {
//            return view('livewire.admin.student.student-table', [
//                'students' => Student::query()->with('batches')->when($this->filters['batches'], function ($student,
//                                                                                                      $batch) {
//                    $student->whereHas('batches', function ($student) use ($batch) {
//                        $student->where('batch_id', $batch);
//                    });
//                })->when($this->filters['date_min'], fn($student, $date) => $student->where('created_at', '>=', Carbon::parse($date)))->when($this->filters['date_max'], fn($student, $date) => $student->where('created_at', '<=', Carbon::parse($date)))->when($this->filters['search'], fn($student, $search) => $student->where('name', 'like', '%' . $search . '%'))->orderBy($this->sortField, $this->sortDirection)->latest()->paginate(50)
//            ]);
//
            return view('livewire.admin.student.student-table', [
                'students' => DB::table('students')
                    ->join('batch_student','students.id','=','student_id')
                    ->join('batches','batch_student.batch_id','=','batches.id')
                    ->join('courses','batches.course_id','=','courses.id')
                    ->when($this->filters['search'], fn($student, $search) => $student
                        ->where('name', 'like', '%' . $search . '%')
                        ->orWhere('mobile', 'like', '%'.$search.'%'))

                    ->when($this->filters['date_min'], fn($student, $date) => $student->where('students.created_at', '>=', Carbon::parse($date)))->when($this->filters['date_max'], fn($student, $date) => $student->where('students.created_at', '<=', Carbon::parse($date)))

                    ->when($this->filters['batch'], function ($student,$batch) {
                        $student->where('batch_id', $batch);
                })
                    ->where('students.deleted_at','=',NULL)
                    ->select('students.id as student_id','batches.title as batch_title','courses.title as course_title',
                             'mobile','email','session_start_date','session_end_date','name','gender','batch_status','students.created_at')
                    ->latest('students.created_at')->paginate(50)
            ]);
        }
    }
