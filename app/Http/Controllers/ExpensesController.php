<?php

    namespace App\Http\Controllers;

    use App\Models\Expense;
    use Gate;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    class ExpensesController extends Controller {

        public function index()
        {
            abort_if(Gate::denies('expense_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
