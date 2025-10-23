<?php

    namespace App\Livewire\Admin\Filament\Student;

    use Filament\Actions\Contracts\HasActions;
    use Filament\Actions\Concerns\InteractsWithActions;
    use Filament\Actions\Action;
    use Filament\Schemas\Schema;
    use Filament\Schemas\Components\Section;
    use Filament\Schemas\Components\Grid;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Recovery;
    use App\Models\Student;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Repeater;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Notifications\Notification;
    use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class StudentEdit extends Component implements HasForms, HasTable, HasActions {
        use InteractsWithActions;
        use InteractsWithForms,InteractsWithTable;

        public $student_id;

        protected function getTableColumns(): array
        {
            return[
                SpatieMediaLibraryImageColumn::make('dp.url')
                    ->collection('student_dp')
                ->rounded(),
                TextColumn::make('name'),
                TextColumn::make('mobile'),
                TextColumn::make('father_name'),
                TextColumn::make('date_of_birth')->date('d-M-Y'),
                TextColumn::make('gender')->extraAttributes(['class'=>'capitalize']),
                TextColumn::make('nationality'),
                TextColumn::make('cnic_passport'),

            ];
        }

        protected function getTableQuery(): Builder|Relation
        {
            return Student::query()->where('id',$this->student_id);
        }

        protected function getTableActions(): array
        {
            return [
                Action::make('edit')
                    ->mountUsing(fn (Schema $schema, Student $record) => $schema->fill([
                              'name' => $record->name,
                              'father_name' => $record->father_name,
                              'mobile' => $record->mobile,
                              'date_of_birth' => $record->date_of_birth,
                              'gender' => $record->gender,
                              'nationality' => $record->nationality,
                              'cnic_passport' => $record->cnic_passport,
                    ]))
                    ->schema([
                        Section::make()
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('dp')
                            ->collection('student_dp')
                            ->image()
                            ->maxSize(500),
                        TextInput::make('name'),
                        TextInput::make('father_name'),
                        TextInput::make('mobile'),
                        DatePicker::make('date_of_birth'),
                        Select::make('gender')
                        ->options([
                            'male'=>'Male',
                            'female'=>'Female',
                                  ]),
                        Select::make('nationality')
                        ->options([
                            'Pakistani'=>'Pakistani',
                            'Foreign'=>'Foreign',
                                  ]),
                        TextInput::make('cnic_passport'),

                             ])->columns(2)
                           ])
                ->action(function(Student $record, $data){
                    $record->name = $data['name'];
                    $record->father_name = $data['father_name'];
                    $record->mobile = $data['mobile'];
                    $record->date_of_birth = $data['date_of_birth'];
                    $record->gender = $data['gender'];
                    $record->nationality = $data['nationality'];
                    $record->cnic_passport = $data['cnic_passport'];
                    $record->save();
                    Notification::make()
                        ->title('Student Edited Successfully')
                        ->success()
                        ->send();
                }),
                Action::make('add_batch')->label('Add Batch')
                ->schema([
                    Grid::make()
                    ->schema([
                        Select::make('batch_id')
                            ->label('Batch')
                        ->options(Batch::all()->pluck('title','id'))
                        ->required()
                        ->columnSpan(2),
                    DatePicker::make('session_start_date')
                    ->required(),
                    DatePicker::make('session_end_date')
                    ->required(),
                        Repeater::make('recoveries')
                            ->label('Installments/Recoveries')
                        ->schema([
                                     TextInput::make('amount')->required(),
                                     DatePicker::make('due_date')->required(),
                                 ])
                            ->columnSpan(2)
                            ->columns(2)
                            ->minItems(1),
                             ]),

                ])
                ->action(function (Student $record, $data){
                    $batch_student = BatchStudent::create([
                        'student_id' => $record->id,
                        'batch_id' => $data['batch_id'],
                        'session_start_date' => $data['session_start_date'],
                        'session_end_date' => $data['session_end_date'],
                        'batch_status' => 1,
                                                          ]);
                    $recoveries = $data['recoveries'];
                    foreach($recoveries as $recovery) {
                        Recovery::create([
                            'batch_student_id' => $batch_student->id,
                            'batch_id' => $data['batch_id'],
                            'student_id' => $record->id,
                            'amount' => $recovery['amount'],
                            'due_date' => $recovery['due_date'],
                            'is_paid' => 0,
                            'course_id' => $batch_student->batch->course_id,
                                         ]);
                    }
                    Notification::make()
                        ->title('Batch Added Successfully')
                        ->success()
                        ->send();
                })
            ];
        }

        protected function isTablePaginationEnabled(): bool
        {
            return false;
        }

        public function render()
        {
            return view('livewire.admin.filament.student.student-edit');
        }
    }
