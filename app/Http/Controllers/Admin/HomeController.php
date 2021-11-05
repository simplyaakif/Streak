<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Expense;
    use App\Models\Query;
    use App\Models\Student;
    use LaravelDaily\LaravelCharts\Classes\LaravelChart;

    class HomeController {

        public function index()
        {
            $dQuery = Query::whereDate('created_at', now()->day)->whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()->count();
            $dStudent = Student::whereDate('created_at', now()->day)->whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)->get()
                ->count();


            $mQuery = Query::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $mStudent = Student::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->count();
            $dExpense = Expense::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)->get()
                ->sum('amount');
            $mExpense = Expense::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()
                ->sum('amount');

            $chart_options = [
                'chart_title' => 'Users by Day',
                'report_type' => 'group_by_date',
                'model' => 'App\Models\User',
                'group_by_field' => 'created_at',
                'group_by_period' => 'day',
                'chart_type' => 'bar',
                'chart_color'=>'0,200,200'
            ];
            $chart1 = new LaravelChart($chart_options);
            $chart2 = new LaravelChart($chart_options);
            $chart3 = new LaravelChart($chart_options);

            return view('admin.home', compact([
                                                  'dQuery','dStudent',
                                                  'mQuery','mStudent',
                                                  'dExpense','mExpense',
                                                  'chart1','chart2','chart3',
                                              ]));
        }

        public function wip()
        {
            return view('wip');
        }
    }
