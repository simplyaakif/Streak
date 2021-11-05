<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;
    use App\Models\Discussion;

    class StudentController extends Controller {

        public function index()
        {
            $discussions = Discussion::latest()->take(4)->get();
            return view('student.dashboard',compact('discussions'));
        }

        public function courses()
        {
            return view('student.course');
        }

        public function discussions()
        {
            return view('student.discussions');
        }
    }
