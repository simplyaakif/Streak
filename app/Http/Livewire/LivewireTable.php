<?php

    namespace App\Http\Livewire;

    use Illuminate\Database\Eloquent\Builder;
    use Rappasoft\LaravelLivewireTables\DataTableComponent;
    use Rappasoft\LaravelLivewireTables\Views\Column;
    use App\Models\Expense;
    use Rappasoft\LaravelLivewireTables\Views\Filter;

    class LivewireTable extends DataTableComponent {

    public bool $showSearch=false;
    public bool $showFilters=false;
    public bool $showFilterDropdown=false;
    public bool $showPerPage=false;

        public function columns(): array
        {
            return [
                Column::make('Expense Type', 'type')->sortable()->searchable(),
                Column::make('Amount', 'amount')->sortable(),
                Column::make('Paid To', 'paid_to')->sortable(),
                Column::make('Created At', 'created_at')->sortable(),
                Column::make('Actions'),
            ];
        }

        public function types()
        {
            foreach(Expense::types as $val => $label) {

            }

        }

        public function filters(): array
        {
            return [
                'type'     => Filter::make('Expense Type')->select(Expense::types),
                'min_date' => Filter::make('Min Date')->date(),
                'max_date' => Filter::make('Max Date')->date(),
            ];
        }

        public function query(): Builder
        {
            return Expense::query();
//                ->when($this->getfilter('min_date'), fn($query, $date) => $query->where('created_at', '>/', $date))
//                ->when($this->getfilter('max_date'), fn($query, $date) => $query->where('created_at', '</', $date));
        }

        public function rowView(): string
        {
            return 'livewire-tables.rows.livewire_table';
        }
    }
