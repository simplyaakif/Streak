<?php

    namespace App\Livewire\Admin\Filament\Lesson;

use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Tables\Enums\FiltersLayout;
use App\Models\Batch;
use App\Models\Employee;
use App\Models\Lesson;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Schemas\Concerns\InteractsWithSchemas;
    use Filament\Tables\Contracts\HasTable;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\Layout;
use Filament\Tables\Filters\MultiSelectFilter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

class Index extends Component implements HasTable, HasSchemas, HasForms, HasActions {

        use InteractsWithActions;
        use InteractsWithTable, InteractsWithForms;

        public function mount()
        {

        }
        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('title')->searchable(),
                TextColumn::make('short_description'),
                TextColumn::make('date')->date('D d-M-Y')->sortable(),
                TextColumn::make('batch.title'),
                TextColumn::make('user.name')->label('Instructor'),
            ];
        }
        protected function getTableActions(): array
        {
            return [
                Action::make('edit')
                ->label('View')
                    ->mountUsing(fn (Schema $schema, Lesson $record) => $schema->fill([
              'title' => $record->title,
              'short_description' => $record->short_description,
              'long_description' => $record->long_description,
              'date' => $record->date,
              'employee_id' => $record->user_id,
              'batch_id' => $record->batch_id,
                  ]))
                    ->action(function (Lesson $record, array $data): void {
                        $record->save();
                    })
                    ->schema([
                        Grid::make('2')
                    ->schema([

                        TextInput::make('title')->disabled(),
                        TextInput::make('short_description')->disabled(),
                        DatePicker::make('date')->disabled(),
                        Textarea::make('long_description')->disabled()->columnSpan(2),
                             ])
                           ])
                ->modalButton('Close')
            ];
        }


    protected function getTableFilters(): array
        {
            return [
                Filter::make('date')
                    ->schema([
                               DatePicker::make('created_from'),
                               DatePicker::make('created_until'),
                           ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '<=', $date),
                            );
                    }),
                MultiSelectFilter::make('batch')
                ->options(Batch::all()->pluck('title','id'))
                ->column('batch_id'),
                MultiSelectFilter::make('user')
                    ->label('Instructor')
                ->options(Employee::all()->pluck('name','user_id'))
                ->column('user_id'),
            ];
        }

        protected function getTableFiltersLayout(): ?string
        {
            return FiltersLayout::AboveContent;
        }

    protected function getDefaultTableSortColumn(): ?string
    {
        return 'date';
    }
    protected function getDefaultTableSortDirection(): ?string
    {
        return 'desc';
    }
        protected function getTableQuery(): Builder|Relation
        {
            return Lesson::query();
        }

        public function render()
        {
            return view('livewire.admin.filament.recovery.recovery-index');
        }
    }
