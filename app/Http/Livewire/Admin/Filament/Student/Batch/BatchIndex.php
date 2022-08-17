<?php

    namespace App\Http\Livewire\Admin\Filament\Student\Batch;

    use App\Models\BatchStudent;
    use App\Models\Student;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\Card;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Select;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class BatchIndex extends Component implements HasTable {
        use InteractsWithTable;
        public $student_id;
        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('batch.title'),
                TextColumn::make('status'),
                TextColumn::make('session_start_date')->date('d-M-Y'),
                TextColumn::make('session_end_date')->date('d-M-Y'),
            ];
        }

        protected function getTableActions(): array
        {
            return [
                Action::make('edit')
                    ->mountUsing(fn (ComponentContainer $form, BatchStudent $record) => $form->fill([
                        'session_start_date'=>$record->session_start_date,
                        'session_end_date'=>$record->session_end_date,
                        'batch_status'=>$record->batch_status,
                    ]))
                    ->form([
                        Card::make()
                    ->schema([
                    DatePicker::make('session_start_date'),
                    DatePicker::make('session_end_date'),
                    Select::make('batch_status')
                    ->options(BatchStudent::STATUS)
                             ])->columns(2),
                           ])
                ->action(function(BatchStudent $record, $data){
                    $record->batch_status = $data['batch_status'];
                    $record->session_start_date = $data['session_start_date'];
                    $record->session_end_date = $data['session_end_date'];
                    $record->save();
                })
            ];
        }

        protected function getTableQuery(): Builder|Relation
        {
            return BatchStudent::query()->where('student_id',$this->student_id);
        }

        protected function isTablePaginationEnabled(): bool
        {
            return false;
        }

        public function render()
        {
            return view('livewire.admin.filament.student.batch.batch-index');
        }
    }
