<?php

    namespace App\Http\Controllers;

    use App\Models\Expense;
    use Illuminate\Http\Request;

    class ExpensesController extends Controller {

        public function index()
        {
            return view('admin.finance.expenses.index');
            //
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Expense $expense)
        {
            //
        }

        public function edit(Expense $expense)
        {
            //
        }

        public function update(Request $request, Expense $expense)
        {
            //
        }

        public function destroy(Expense $expense)
        {
            //
        }
    }
