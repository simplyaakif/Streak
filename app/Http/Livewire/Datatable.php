<?php

    namespace App\Http\Livewire;

    use App\Models\Course;
    use App\Models\Query;
    use Carbon\Carbon;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Datatable extends Component {

        use withPagination;

        public $courses = [];
        public $sortField = 'name';
        public $sortDirection = 'asc';
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


        public function showQuery(Query $query)
        {
            $this->showQueryDetails = $query;
            $this->showQuery = true;
        }
        public function mount()
        {
            $this->showQueryDetails = Query::first();
            $this->courses = Course::all('id','title');
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
            return view('livewire.datatable', [
                'queries' => Query::query()
                ->with('courses')
                ->when($this->filters['course'],function ($query,$course) {
                    $query->whereHas('courses', function ($query) use ($course) {
                        $query->where('course_id',  $course);
                    });
                })
                ->when($this->filters['date_min'],fn($query,$date)=>$query->where('created_at','>=',Carbon::parse($date)))
                ->when($this->filters['date_max'],fn($query,$date)=>$query->where('created_at','<=',Carbon::parse($date)))
                ->when($this->filters['search'], fn($query, $search) => $query->where('mobile', 'like', '%'.$search.'%'))
                ->when($this->filters['search'], fn($query, $search) => $query->where('name', 'like', '%'.$search.'%'))
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->latest()
                    ->paginate(10)
            ]);
        }

    }
