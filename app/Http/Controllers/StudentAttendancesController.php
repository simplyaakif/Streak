<?php

    namespace App\Http\Controllers;

    use App\Models\StudentAttendance;
    use Illuminate\Http\Request;

    class StudentAttendancesController extends Controller {

        public function index()
        {
            return view('admin.attendance.index');
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(StudentAttendance $studentAttendance)
        {
            //
        }

        public function edit(StudentAttendance $studentAttendance)
        {
            //
        }

        public function update(Request $request, StudentAttendance $studentAttendance)
        {
            //
        }

        public function destroy(StudentAttendance $studentAttendance)
        {
            //
        }
    }
