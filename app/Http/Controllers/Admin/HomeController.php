<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Expense;
    use App\Models\Query;
    use App\Models\Recovery;
    use App\Models\Student;
    use App\Models\Task;
    use LaravelDaily\LaravelCharts\Classes\LaravelChart;
    use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Exp;

    class HomeController {

        public function index()
        {

            $dQuery = Query::whereDate('created_at',date('Y-m-d'))->get()->count();
            $dStudent = Student::whereDate('created_at', date('Y-m-d'))->get()->count();

            $dSale = Recovery::where('is_paid',1)
                ->whereDate('paid_on',now())
                ->get()->sum('amount');


            $mQuery = Query::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $mStudent = Student::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $dExpense = Expense::whereDate('created_at', date('Y-m-d'))
                ->get()
                ->sum('amount');
            $mExpense = Expense::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->sum('amount');

            $mSale = Recovery::where('is_paid',1)
                ->whereMonth('paid_on', now()->month)->whereYear('paid_on', now()->year)
                ->get()->sum('amount');

            $rQueries= Query::select()->latest()->with('courses')->take(5)->get();
            $rAdmissions = Student::select()->latest()->take(5)->get();
            $rExpenses= Expense::select()->with('vendor')->latest()->take(5)
                ->get();

            $user_tasks = Task::where('assigned_to_id',\Auth::id())
                    ->where('status_id','!=',2)
                    ->get();


            $query_chart_options = [
                'chart_title' => 'Query by Day',
                'report_type' => 'group_by_date',
                'model' => 'App\Models\Query',
                'group_by_field' => 'created_at',
                'group_by_period' => 'day',
                'chart_type' => 'bar',
                'chart_color'=>'0,200,200'
            ];

            $admission_chart_options = [
                'chart_title' => 'Student by Day',
                'report_type' => 'group_by_date',
                'model' => 'App\Models\Student',
                'group_by_field' => 'created_at',
                'group_by_period' => 'day',
                'chart_type' => 'bar',
                'chart_color'=>'0,200,0'
            ];

            $expense_chart_options = [
                'chart_title' => 'Expense by Day',
                'report_type' => 'group_by_date',
                'model' => 'App\Models\Expense',
                'group_by_field' => 'created_at',
                'group_by_period' => 'day',
                'chart_type' => 'bar',
                'chart_color'=>'200,0,0'
            ];

            $sale_chart_options = [
                'chart_title' => 'Sale by Day',
                'report_type' => 'group_by_date',
                'model' => 'App\Models\Recovery',
                'group_by_field' => 'created_at',
                'aggregate_function' => 'sum',
                'aggregate_field' => 'amount',
                'where_raw'=>'is_paid=1',
                'group_by_period' => 'day',
                'chart_type' => 'bar',
                'chart_color'=>'0,255,0'
            ];

            $chart1 = new LaravelChart($query_chart_options);
            $chart2 = new LaravelChart($admission_chart_options);
            $chart3 = new LaravelChart($expense_chart_options);
            $chart4 = new LaravelChart($sale_chart_options);
//            dd('workign');

            return view('admin.home', compact([
                                                  'dQuery','dStudent',
                                                  'mQuery','mStudent',
                                                  'dExpense','mExpense',
                                                  'dSale','mSale',
                                                  'chart1','chart2','chart3','chart4',
                                                  'rAdmissions','rQueries','rExpenses',
                                                  'user_tasks'
                                              ]));

        }

        public function wip()
        {
            return view('wip');
        }
    }
