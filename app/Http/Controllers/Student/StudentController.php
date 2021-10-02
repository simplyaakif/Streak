<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;

    class StudentController extends Controller {

        public function index()
        {
            return view('student.dashboard');
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
