<?php

    namespace App\Livewire\Admin;

    use Livewire\Component;
    use Livewire\WithPagination;

    class GlobalTable extends Component {

        use withPagination;

        public $model;
        public $searchColumn;
        public $columns = [];
        public $table = [];
        public $actions = null;

        public $filters
            = [
                'search' => null,
                'course' => '',
                'date_min' => null,
                'date_max' => null,
            ];

        public function mount()
        {
            $this->model = 'App\Models\\' . ucfirst($this->model);
        }

        public function resetFilters()
        {
            $this->reset('filters');
        }

        public function updatedFilters()
        {
            $this->resetPage();
        }

        public function modelDelete($id)
        {
            $model = $this->model::findOrFail($id);
            $model->delete();
        }

        public function render()
        {
            return view('livewire.admin.global-table', [
                'models' => $this->model::query()
                    ->when($this->filters['search'], fn($query, $search) => $query->where($this->searchColumn, 'like', '%'
                                                                                                     .$search.'%'))
                    ->paginate(10)
            ]);
        }
    }
