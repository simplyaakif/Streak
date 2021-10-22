<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Query;
    use App\Models\Student;

    class HomeController {

        public function index()
        {
            $dQuery = Query::whereDate('created_at', now()->day)->whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()->count();
            $dStudent = Student::whereDate('created_at', now()->day)->whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)->get()
                ->count();


            $mQuery = Query::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $mStudent = Student::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();

            return view('admin.home', compact([
                                                  'dQuery','dStudent',
                                                  'mQuery','mStudent'
                                              ]));
        }

        public function wip()
        {
            return view('wip');
        }
    }
