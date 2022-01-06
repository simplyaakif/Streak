<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Expense;
    use App\Models\Query;
    use App\Models\Recovery;
    use App\Models\Student;
    use LaravelDaily\LaravelCharts\Classes\LaravelChart;

    class HomeController {

        public function index()
        {

            $dQuery = Query::whereDate('created_at',date('Y-m-d'))->get()->count();
            $dStudent = Student::whereDate('created_at', date('Y-m-d'))->get()->count();

            $dSale = Recovery::where('is_paid',1)->whereDate('paid_on',now()->day)
                ->whereMonth('paid_on', now()->month)->whereYear('paid_on', now()->year)
                ->get()->sum('amount');


            $mQuery = Query::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $mStudent = Student::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $dExpense = Expense::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)->get()
                ->sum('amount');
            $mExpense = Expense::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->sum('amount');

            $mSale = Recovery::where('is_paid',1)
                ->whereMonth('paid_on', now()->month)->whereYear('paid_on', now()->year)
                ->get()->sum('amount');


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

            $chart1 = new LaravelChart($query_chart_options);
            $chart2 = new LaravelChart($admission_chart_options);
            $chart3 = new LaravelChart($expense_chart_options);
//            dd('workign');

            return view('admin.home', compact([
                                                  'dQuery','dStudent',
                                                  'mQuery','mStudent',
                                                  'dExpense','mExpense',
                                                  'dSale','mSale',
                                                  'chart1','chart2','chart3',
                                              ]));

        }

        public function wip()
        {
            return view('wip');
        }
    }
