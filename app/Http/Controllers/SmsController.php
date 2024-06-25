<?php

    namespace App\Http\Controllers;

    use App\Classes\LifetimesmsAPI;
    use App\Models\Sms;
    use Illuminate\Http\Request;

    class SmsController extends Controller {

        public function index()
        {
            $credit      = new LifetimesmsAPI();
            $credit      = json_decode($credit->balanceInquiry());
            $fake_string = '{"sms":"!!!"}';
            if($credit == null)
                $credit = json_decode($fake_string);

            return view("admin.sms.index", compact('credit'));
        }


        public function store(Request $request)
        {
            //
        }

        public function show(Sms $sms)
        {
            //
        }

        public function edit(Sms $sms)
        {
            //
        }

        public function update(Request $request, Sms $sms)
        {
            //
        }

        public function destroy(Sms $sms)
        {
            //
        }
    }
