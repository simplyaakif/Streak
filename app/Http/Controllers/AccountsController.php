<?php

    namespace App\Http\Controllers;

    use App\Models\Account;
    use Illuminate\Http\Request;

    class AccountsController extends Controller {

        public function index()
        {
            $accounts = Account::all(['title','amount','account_number','type']);
            return view('admin.account.index',compact(['accounts']));
        }

        public function create()
        {
            return view('admin.account.create');
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Account $account)
        {
            //
        }

        public function edit(Account $account)
        {
            //
        }

        public function update(Request $request, Account $account)
        {
            //
        }

        public function destroy(Account $account)
        {
            //
        }
    }
