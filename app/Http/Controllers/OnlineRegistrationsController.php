<?php

    namespace App\Http\Controllers;

    use App\Models\OnlineRegistration;
    use Illuminate\Http\Request;

    class OnlineRegistrationsController extends Controller {

        public function index()
        {
            return view('admin.online-registration.index');
        }

        public function create()
        {
            return view('guest.online-registration');
        }

        public function store(Request $request)
        {
            //
        }

        public function show(OnlineRegistration $onlineRegistration)
        {
            //
        }

        public function edit(OnlineRegistration $onlineRegistration)
        {
            //
        }

        public function update(Request $request, OnlineRegistration $onlineRegistration)
        {
            //
        }

        public function destroy(OnlineRegistration $onlineRegistration)
        {
            //
        }
    }
