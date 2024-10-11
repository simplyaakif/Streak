<?php

    namespace App\Livewire\Admin\Filament\Finance;

    use App\Models\Batch;
    use Filament\Tables\Columns\TextColumn;
        use Filament\Tables\Concerns\InteractsWithTable;
        use Filament\Tables\Contracts\HasTable;
        use Illuminate\Database\Eloquent\Builder;
        use Illuminate\Database\Eloquent\Relations\Relation;
        use Livewire\Component;

        class BatchStatusFinance extends Component implements HasTable {

            use InteractsWithTable;

            public function mount()
            {

            }
            protected function getTableColumns(): array
            {
                return [
                    TextColumn::make('name'),
                ];
            }
            protected function getTableQuery(): Builder|Relation
            {
                return Batch::query();
            }

            public function render()
            {
                return view('livewire.admin.filament.recovery.recovery-index');
            }
        }
