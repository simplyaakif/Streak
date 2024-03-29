<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Query;
    use Carbon\Carbon;
    use Gate;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    class QueryController extends Controller {

        public function index()
        {
            abort_if(Gate::denies('query_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            return view('admin.query.index');
        }

        public function dashboard()
        {
            abort_if(Gate::denies('query_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
            $dQuery = Query::whereDate('created_at', now()->toDate())->get()->count();
            $wQuery = Query::whereBetween('created_at', [
                now()->startOfWeek(),
                now()->endOfWeek()
            ])->get()->count();
            $mQuery
                    = Query::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->get()->count();
            $pMquery
                    = Query::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->get()->count();

            $queries = Query::latest()->take(10)->get();

            return view('admin.query.dashboard', compact([
                                                             'dQuery',
                                                             'mQuery',
                                                             'wQuery',
                                                             'pMquery',
                                                             'queries'
                                                         ]));
        }

        public function follow()
        {
            $queries   = Query::with('latestTimeline')->whereBetween('created_at', [
                    now()->subMonths(3),
                    now()
                ])->latest()->get();
            $followUps = $queries->map(function ($query) {
                if($query->timelines->reverse()->first()->id == 5 || $query->timelines->reverse()->first()->id == 6) {
                    return null;
                }

                return [
                    'query' => $query,
                    'date'  => $query->timelines->reverse()->first()->pivot->fw_date_time
                ];
            })->sortBy('date')->filter(function ($follow) {
                return $follow !== null;
            });

            $todays = $followUps->filter(function ($follow) {
                $date = Carbon::parse($follow["date"]);
                return $date->isToday();
            })->count();

            $tomorrows = $followUps->filter(function ($follow) {
                $date = Carbon::parse($follow["date"]);
                return $date->isTomorrow();
            })->count();

            $previous = $followUps->filter(function ($follow) {
                $date = Carbon::parse($follow["date"]);
                return $date->lt(now()->format('Y-m-d'));
            })->count();

            $future = $followUps->filter(function ($follow) {
                $date = Carbon::parse($follow["date"]);
                return $date->gt(now()->addDays(2));
            })->count();

            return view('admin.query.follow', compact('followUps', 'todays', 'tomorrows','previous','future'));
        }

        public function create()
        {
            abort_if(Gate::denies('query_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            return view('admin.query.create');
        }

        public function edit(Query $query)
        {
            abort_if(Gate::denies('query_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            return view('admin.query.edit', compact('query'));
        }

        public function show(Query $query)
        {
            abort_if(Gate::denies('query_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            return view('admin.query.show', compact('query'));
        }

        public function storeMedia(Request $request)
        {
            abort_if(Gate::none([
                                    'query_create',
                                    'query_edit'
                                ]), Response::HTTP_FORBIDDEN, '403 Forbidden');

            if($request->has('size')) {
                $this->validate($request, [
                    'file' => 'max:' . $request->input('size') * 1024,
                ]);
            }
            if(request()->has('max_width') || request()->has('max_height')) {
                $this->validate(request(), [
                    'file' => sprintf('image|dimensions:max_width=%s,max_height=%s', request()->input('max_width', 100000), request()->input('max_height', 100000)),
                ]);
            }

            $model                     = new Query();
            $model->id                 = $request->input('model_id', 0);
            $model->exists             = true;
            $media
                                       = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
            $media->wasRecentlyCreated = true;

            return response()->json(compact('media'), Response::HTTP_CREATED);
        }
    }
