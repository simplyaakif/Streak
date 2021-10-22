<?php

    namespace App\Http\Controllers;

    use App\Models\Employee;
    use Illuminate\Http\Request;

    class EmployeesController extends Controller {

        public function index()
        {
            return view('admin.employees.index');
        }

        public function create()
        {
            return view('admin.employees.create');
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Employee $employee)
        {
            //
        }

        public function edit(Employee $employee)
        {
            //
        }

        public function update(Request $request, Employee $employee)
        {
            //
        }

        public function destroy(Employee $employee)
        {
            //
        }
    }
