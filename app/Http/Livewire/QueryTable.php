<?php

    namespace App\Http\Livewire;

    use App\Models\Course;
    use App\Models\Income;
    use App\Models\Query;
    use App\Models\Timeline;
    use Auth;
    use Carbon\Carbon;
    use Livewire\Component;
    use Livewire\WithPagination;

    class QueryTable extends Component {

        use withPagination;

        public $showEditModal = false;
        public $showDeleteModal = false;

        public $delete_id;
        public $is_editing = false;

        public Query $editing;
        public $addTimelineData=[
            'timeline_id'=>1,
            'fw_date_time'=>null,
            'remarks'=>null,
            'user_id'=>null,
        ];

        public $timelines;

        public $courses = [];
        public $sortField = 'created_at';
        public $sortDirection = 'desc';
        public $showFilters = true;
        public $showQuery= false;
        public Query $showQueryDetails ;
        public $filters
            = [
                'search' => null,
                'course' => '',
                'date_min' => null,
                'date_max' => null,
            ];

        protected $queryString
            = [
                'sortField',
                'sortDirection'
            ];

        public function rules()
        {
            return [
                'editing.name'=>'required|string',
                'editing.mobile'=>'required|string',
                'editing.email'=>'string',

            ];
        }

        public function deleteQuery($query)
        {
            $model = Query::findOrFail($query);
            $model->delete();
        }
        public function showQuery(Query $query)
        {
            $this->showQueryDetails = $query;
            $this->showQuery = true;
        }

        public function addTimeline()
        {
            $this->validate([
                                'addTimelineData.timeline_id'=>'required',
                                'addTimelineData.fw_date_time'=>'date',
                                'addTimelineData.remarks'=>'string'
                            ]);
            $query = $this->showQueryDetails;
            $this->addTimelineData['user_id']= Auth::id();
            $query->timelines()->attach($this->addTimelineData['timeline_id'],$this->addTimelineData);
            $this->redirectRoute('admin.queries.index');
        }
        public function mount()
        {
            $this->timelines = Timeline::orderBy('title')->get();
            $this->editing = Query::first();
            $this->showQueryDetails = Query::make(['created_at' => now()]);
            $this->courses = Course::all('id','title');
        }

        public function edit(Query $query)
        {
            $this->is_editing = true;
            $this->showEditModal = true;
            $this->editing = $query;
        }

        public function sortBy($field)
        {
            if($this->sortField === $field) {
                $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                $this->sortDirection = 'asc';
            }
            $this->sortField = $field;
        }

        public function resetFilters()
        {
            $this->reset('filters');
        }

        public function updatedFilters(){
            $this->resetPage();
        }

        public function render()
        {
            return view('livewire.query-table', [
                'queries' => Query::query()
                ->with('courses')
                ->when($this->filters['course'],function ($query,$course) {
                    $query->whereHas('courses', function ($query) use ($course) {
                        $query->where('course_id',  $course);
                    });
                })
                ->when($this->filters['date_min'],fn($query,$date)=>$query->where('created_at','>=',Carbon::parse($date)))
                ->when($this->filters['date_max'],fn($query,$date)=>$query->where('created_at','<=',Carbon::parse($date)))
                ->when($this->filters['search'], fn($query, $search) => $query->where('name', 'like', '%'.$search.'%'))
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->latest()
                    ->paginate(50)
            ]);
        }

    }
