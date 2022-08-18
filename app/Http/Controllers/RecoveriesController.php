<?php

    namespace App\Http\Controllers;

    use App\Models\Recovery;
    use Illuminate\Http\Request;

    class RecoveriesController extends Controller {

        public function index()
        {
            $amount_due_today = Recovery::where('due_date',now()->toDate())
                ->where('is_paid',0)
                ->sum('amount');
            $amount_due_month = Recovery::whereBetween('due_date',[
                now()->startOfMonth()->toDate(),
                now()->endOfMonth()->toDate(),
                ])
                ->where('is_paid',0)
                ->sum('amount');

            $amount_due_pending = Recovery::where('due_date','<',now()->toDate())
                ->where('is_paid',0)
                ->sum('amount');

            $amount_due_future = Recovery::where('due_date','>',now()->addMonth()->startOfMonth()->toDate())
                ->where('is_paid',0)
                ->sum('amount');


            return view('admin.recovery.index',compact('amount_due_today','amount_due_month',
            'amount_due_pending',
            'amount_due_future'
            ));
        }

        public function recovery()
        {
            return view('admin.recovery.recovery');
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Recovery $recovery)
        {
            //
        }

        public function edit(Recovery $recovery)
        {
            //
        }

        public function update(Request $request, Recovery $recovery)
        {
            //
        }

        public function destroy(Recovery $recovery)
        {
            //
        }
    }
