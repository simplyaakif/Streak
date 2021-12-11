<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;
    use App\Models\Discussion;
    use App\Models\Student;
    use App\Models\User;
    use Auth;

    class StudentController extends Controller {

        public function index()
        {
            if(!Auth::user()->is_student) {
                return redirect()->route('admin.home');
            }

            $discussions = Discussion::latest()->take(4)->get();
            return view('student.dashboard',compact('discussions'));
        }

        public function courses()
        {

            return view('student.courses');
        }

        public function course($id)
        {
            $student = Student::where('user_id',Auth::id())->first();
            $batch = $student->batches->where('id',$id)->first();

            return view('student.course',compact('batch','student'));

        }

        public function discussions()
        {
            return view('student.discussions');
        }

        public function calendar()
        {
            return view('student.InstituteCalendar.index');
        }
    }
