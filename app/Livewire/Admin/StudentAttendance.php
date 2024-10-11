<?php

    namespace App\Livewire\Admin;

    use App\Models\Batch;
    use Auth;
    use Carbon\Carbon;
    use DB;
    use Livewire\Component;
    use App\Models\StudentAttendance as SAttendance;

    class StudentAttendance extends Component {

        public Batch $batch;
        public $showModal = false;
        public $showAttendanceModal = false;
        public $statuses = [];
        public $datetime;

        public $attendanceRecords;

        public $attendanceRecord;

        public function mount()
        {
            $this->datetime = now();
            $this->batch->load('activeStudents');

//            $this->attendanceRecords = SAttendance::
//            select('id', 'student_id', 'attendance_status', 'batch_id', DB::raw('DATE(datetime) as date'))->get()->groupBy('date')->toArray();

            $records                 = SAttendance::where('batch_id', $this->batch->id)
                ->with('student')
                ->get()
                ->groupBy(function ($item) {
                return Carbon::parse($item->datetime)->format('d-m-Y');
            });
            $this->attendanceRecords = collect($records);

        }

        public function showAttendance($date)
        {

//            dd(Carbon::parse($this->attendanceRecords->first()[0]['datetime'])->format('d-m-Y'));
//            dd($this->attendanceRecords->first());
            $this->attendanceRecord = $this->attendanceRecords->filter(function ($item) use ($date) {
//                return Carbon::parse($item->first()->date)->format('Y-m-d') == $date;
                return Carbon::parse($item[0]['datetime'])->format('d-m-Y') == $date;
            })->first();
            $this->showAttendanceModal = true;
        }

        public function submit()
        {
            $rows        = [];
            $employee_id = Auth::user()->employee->id;

            foreach($this->statuses as $id => $status) {
                $row    = [
                    'student_id'        => $id,
                    'batch_id'          => $this->batch->id,
                    'attendance_status' => $status,
                    'employee_id'       => $employee_id,
                    'datetime'          => $this->datetime,
                ];
                $rows[] = $row;
                SAttendance::create($row);
            }
            $this->showModal = false;
        }

        public function render()
        {
            return view('livewire.admin.student-attendance');
        }
    }
