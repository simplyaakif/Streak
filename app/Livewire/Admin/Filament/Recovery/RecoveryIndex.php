<?php

namespace App\Livewire\Admin\Filament\Recovery;

use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use App\Models\Account;
use App\Models\Batch;
use App\Models\BatchStudent;
use App\Models\Recovery;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class RecoveryIndex extends Component implements HasForms, HasTable, HasActions
{

    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithForms;

    public function mount()
    {

    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Recovery::query()->withoutGlobalScopes()
                ->join('batch_student', 'recoveries.batch_student_id', '=', 'batch_student.id')
                ->select('recoveries.*', 'batch_student.batch_status','batch_student.is_special')
            )
            ->columns([
                SpatieMediaLibraryImageColumn::make('student.dp')
                    ->collection('student_dp')
                    ->label('DP')->toggleable()->circular(),
                TextColumn::make('student.name')->searchable()->sortable(),
                TextColumn::make('student.mobile')->label('Contact')->toggleable(),
                TextColumn::make('student.father_name')->label('Father Name')->toggleable(),
                TextColumn::make('batch.title')->label('Batch'),
                TextColumn::make('batch_student.status')->label('Status'),
                TextColumn::make('due_date')->date('d-M-Y')->sortable(),
                TextColumn::make('amount')
                    ->sortable()
                    ->suffix(' Rs')
                    ->summarize(
                        Sum::make()
                            ->label('Total')
                            ->money('PKR')
                    ),
                BooleanColumn::make('is_paid'),
                TextColumn::make('paid_on')->date('d-M-Y')->sortable(),
                TextColumn::make('account.title')->sortable(),
                TextColumn::make('slip_number')->toggleable(),
                TextColumn::make('created_at')->toggledHiddenByDefault()
                    ->date('d-M-Y')
                    ->toggleable(),

            ])->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('due_date')
                    ->schema([
                        DatePicker::make('due_from'),
                        DatePicker::make('due_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['due_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('due_date', '>=', $date),
                            )
                            ->when(
                                $data['due_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('due_date', '<=', $date),
                            );
                    }),
                Filter::make('paid_on')
                    ->schema([
                        DatePicker::make('paid_from'),
                        DatePicker::make('paid_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['paid_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('paid_on', '>=', $date),
                            )
                            ->when(
                                $data['paid_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('paid_on', '<=', $date),
                            );
                    }),
                TernaryFilter::make('is_paid')->label('Is Paid ?')->default(0),


                TernaryFilter::make('is_special')->label('Is Special ?')->default(0),

//                TernaryFilter::make('special_students')
//                    ->label('Special Students')
//                    ->trueLabel('Include Special')
//                    ->falseLabel('Without Special')
//                    ->default(0)
//                    ->query(function (Builder $query, $state) {
//                        if ($state) {
//                            // Remove the scope and directly handle the relationship query
//                            return $query->where('is_special', 1);
//                        }
//                        return $query;
//                    }),


//
//                TernaryFilter::make('Show All')
//                    ->trueLabel('Include Special')
//                    ->falseLabel('Without Special')
//                    ->query(function (Builder $query, $state) {
//                        if ($state) {
//                            return $query;
//                        }
//                        return $query->where('batch_student.is_special','=',0); // uses global scope
//                    }),


                SelectFilter::make('account_id')
                    ->multiple()
                    ->label('Account')
                    ->options(Account::all()->pluck('title', 'id')),
                SelectFilter::make('batch_id')
                    ->multiple()
                    ->label('Batch')
                    ->options(Batch::all()->pluck('title', 'id')),

                Filter::make('Status')
                    ->default(1)
                    ->schema([
                        Select::make('status')
                            ->options(BatchStudent::STATUS)
                            ->default(1),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
//                                ->join('batch_student','recovery.batch_student_id','=','batch_student.id')
                            ->when($data['status'], function ($q, $status) {
                                $q
//                                            ->join('batch_student','recoveries.batch_student_id','=','batch_student.id')
//                                            ->select('batch_student.batch_status', 'recovery.*')
                                    ->where('batch_student.batch_status', $status);
//                                        dd ($q);
                            });
//                                    ->where('id','=',$data['status']);
                    })
            ], FiltersLayout::AboveContent)
            ->recordActions([
                Action::make('Student')
                    ->url(fn(Recovery $record): string => route('admin.students.show', $record->student_id))
                    ->openUrlInNewTab(),
                Action::make('Pay')
                    ->mountUsing(fn(Schema $schema, Recovery $record) => $schema->fill([
                        'amount' => $record->amount,
                        'name' => $record->student->name,
                        'batch' => $record->batch->title,
                    ]))
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('name')
                                    ->disabled(),
                                TextInput::make('batch')
                                    ->disabled(),
                                TextInput::make('amount')
                                    ->disabled(),
                                Select::make('account_id')
                                    ->options(Account::all()->pluck('title', 'id')),
                                TextInput::make('slip_number')
                                    ->label('Transaction ID/Slip #'),
                                DatePicker::make('paid_on')
                                    ->label('Date of Payment')
                            ])
                    ])
                    ->action(function (Recovery $record, array $data) {
                        if ($record->is_paid) {
                            abort(403);
                        }
                        $record->is_paid = 1;
                        $record->account_id = $data['account_id'];
                        $record->slip_number = $data['slip_number'];
                        $record->paid_on = $data['paid_on'];
                        $record->save();
                    })
                    ->visible(fn(Recovery $record): bool => !$record->is_paid),
            ]);
    }

//                    ->join('batch_student','batch_student.id','=','recoveries.batch_student_id');


    protected function getDefaultTableSortColumn(): ?string
    {
        return 'due_date';
    }

    protected function getDefaultTableSortDirection(): ?string
    {
        return 'asc';
    }

    public function render()
    {
        return view('livewire.admin.filament.recovery.recovery-index');
    }
}
