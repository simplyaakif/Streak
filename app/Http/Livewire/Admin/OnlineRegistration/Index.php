<?php

    namespace App\Http\Livewire\Admin\OnlineRegistration;

    use App\Http\Controllers\OnlineRegistrationsController;
    use App\Models\OnlineRegistration;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;
    use Filament\Tables\Actions\BulkAction;
    use Illuminate\Database\Eloquent\Collection;

    class Index extends Component implements HasTable {
        use InteractsWithTable;


        protected function applySearchToTableQuery(Builder $query): Builder
        {
            if (filled($searchQuery = $this->getTableSearchQuery())) {
                $query->search('name', $searchQuery)->get();
            }

            return $query;
        }

        protected function getTableQuery(): Builder|Relation
        {
            return OnlineRegistration::query()->with('courses')->latest();
        }
        public function isTableSearchable(): bool
        {
            return true;
        }
        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('name'),
//                TextColumn::make('father_name'),
                TextColumn::make('pakistan_mobile')->label('Mobile Number'),
                TextColumn::make('whatsapp_mobile')->label('Whatsapp Number'),
                TextColumn::make('courses')->view('admin.filament.tables.columns.courses'),
                TextColumn::make('campus.name')->label('Campus'),
                TextColumn::make('mode_of_learning')->label('Learning Type'),
                TextColumn::make('created_at')->since(),
            ];
        }

        protected function getTableFilters(): array
        {
            return [ ];
    }

        protected function getTableActions(): array
        {
            return [ ];
    }

        protected function getTableBulkActions(): array
        {
            return [ ];
    }

        public function render()
        {
            return view('livewire.admin.online-registration.index');
        }
    }
