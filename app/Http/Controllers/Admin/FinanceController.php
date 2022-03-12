<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Recovery;
    use DB;
    use Gate;
    use Illuminate\Http\Response;

    class FinanceController extends Controller {

        public function index()
        {
            abort_if(Gate::denies('finance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            $account_status = DB::table('recoveries')
                ->where('is_paid','1')
                ->whereBetween('paid_on',[now()->startOfMonth(),now()->endOfMonth()])
                ->join('accounts','recoveries.account_id','accounts.id')
                ->select('title','recoveries.amount')
                ->get();


            $account_status = collect($account_status)->groupBy('title');

            $account_status->map(function ($account){
                return [
                    'bank'=>$account->first()->title,
                    'total'=>$account->sum('amount')
                ];
            });


            return view('admin.finance.dashboard',compact('account_status'));
        }
    }
