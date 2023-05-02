<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Batch;
    use App\Models\Recovery;
    use DB;
    use Gate;
    use Illuminate\Http\Response;

    class FinanceController extends Controller {

        public function index()
        {
            abort_if(Gate::denies('finance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            $date = request()->get('date') ? request()->get('date') : null ;

            $account_status = DB::table('recoveries')
                ->when($date, function ($q) use ($date){
                return $q->whereBetween('paid_on',[carbon($date)->startOfMonth(),carbon($date)->endOfMonth()]);
                })
                ->when($date == null, function ($q){
                return $q->whereBetween('paid_on',[now()->startOfMonth(),now()->endOfMonth()]);
                })
                ->where('is_paid','1')
                ->join('accounts','recoveries.account_id','accounts.id')
                ->select('title','recoveries.amount')
                ->get();


            $account_status = collect($account_status)->groupBy('title');

            $accounts = $account_status->map(function ($account){
                return [
                    'bank'=>$account->first()->title,
                    'total'=>$account->sum('amount')
                ];
            });


            $batchFinanceStatus = Recovery::join('batches','batches.id','=','recoveries.batch_id')
            ->when($date, function ($q) use ($date){
                return $q->whereBetween('paid_on',[
                    carbon($date)->startOfMonth()->toDate(),
                    carbon($date)->endOfMonth()->toDate()
                ]);
            })
            ->when($date==null, function ($q) {
                return $q->whereBetween('paid_on',[
                    now()->startOfMonth()->toDate(),
                    now()->endOfMonth()->toDate()
                ]);
            })
            ->where('is_paid',1)
            ->select('title','amount')
            ->get();
            $batchFinanceStatus = $batchFinanceStatus->groupBy('title');
            $batchFinanceStatus = $batchFinanceStatus->map(function ($item,$key){
                $row['title'] =$key;
                $row['total'] =$item->sum('amount');
                $row['count'] =$item->count();
                return $row;
            });



            return view('admin.finance.dashboard',compact('accounts','batchFinanceStatus','date'));
        }
    }
