<?php

namespace App\Livewire\Admin\Filament\Student\Batch;

use App\Models\Batch;
use App\Models\BatchStudent;
use App\Models\Recovery;
use App\Models\Student;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Component;

class BatchIndex extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

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
                ->mountUsing(fn(ComponentContainer $form, BatchStudent $record) => $form->fill([
                    'session_start_date' => $record->session_start_date,
                    'session_end_date' => $record->session_end_date,
                    'batch_status' => $record->batch_status,
                    'batch_id' => $record->batch_id,
                    'status_comments' => $record->status_comments,
                    'is_special' => $record->is_special,
                ]))
                ->form([
                    Card::make()
                        ->schema([
                            Select::make('batch_id')
                                ->options(Batch::all()->pluck('title', 'id')),
                            DatePicker::make('session_start_date'),
                            DatePicker::make('session_end_date'),
                            Select::make('batch_status')
                                ->options(BatchStudent::STATUS),
                            Toggle::make('is_special')->label('Special Batch'),
                            Textarea::make('status_comments')
                                ->placeholder('Kindly enter status for Cancelled & Freeze.
Incase of Cancelled mention the reason of cancelling admission.
For Freezing mention the start of Freeze Date and Expected end of freeze Date.

Also mention your name & today Date so that we may know who updated the status')
                                ->columnSpan(2)
                        ])->columns(2),
                ])
                ->action(function (BatchStudent $record, $data) {
                    $record->batch_status = $data['batch_status'];
                    $record->batch_id = $data['batch_id'];
                    $record->session_start_date = $data['session_start_date'];
                    $record->session_end_date = $data['session_end_date'];
                    $record->status_comments = $data['status_comments'];
                    $record->is_special = $data['is_special'];
                    $record->save();

                    Notification::make()
                        ->title('Batch Edited Successfully')
                        ->success()
                        ->send();
                }),
            Action::make('edit_recoveries')
                ->label('Re-generate Unpaid Recoveries')
                ->mountUsing(fn(ComponentContainer $form, BatchStudent $record) => $form->fill([
                    'recoveries' => Recovery::where('batch_student_id', $record->id)
                        ->where('is_paid', '=', 0)
                        ->get()->toArray()
                ]))
                ->form([
                    Repeater::make('recoveries')->schema([
                        TextInput::make('amount')->required(),
                        DatePicker::make('due_date')->required(),
                    ])->columns(2)
                ])
                ->action(function (BatchStudent $record, $data) {
                    $data = $data['recoveries'];
                    $old_recoveries = Recovery::where('batch_student_id', $record->id)
                        ->where('is_paid', '=', 0)
                        ->get();
                    foreach ($old_recoveries as $old_recovery) {
                        $old_recovery->delete();
                    }
                    foreach ($data as $row) {
                        $recovery = [
                            'amount' => $row['amount'],
                            'due_date' => $row['due_date'],
                            'batch_student_id' => $record->id,
                            'batch_id' => $record->batch_id,
                            'student_id' => $record->student_id,
                            'is_paid' => false,
                            'course_id' => $record->batch->course_id,
                        ];
                        Recovery::create($recovery);
                    }
                    Notification::make()
                        ->title('Recoveries Added Successfully')
                        ->success()
                        ->send();
                }),


            Action::make('delete')
                ->color('danger')
                ->action(function (BatchStudent $record, $data) {
                    $recoveries = Recovery::where('batch_student_id', $record->id)
                        ->get();
                    foreach ($recoveries as $recovery) {
                        $recovery->delete();
                    }
                    $record->delete();
                    Notification::make()
                        ->title('Batch Deleted Successfully')
                        ->success()
                        ->send();
                }),
        ];
    }

    protected function getTableQuery(): Builder|Relation
    {
        return BatchStudent::query()->where('student_id', $this->student_id);
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
