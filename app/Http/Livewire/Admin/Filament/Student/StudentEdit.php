<?php

    namespace App\Http\Livewire\Admin\Filament\Student;

    use App\Models\Student;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\Card;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\FileUpload;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
    use Filament\Forms\Components\TextInput;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\ImageColumn;
    use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class StudentEdit extends Component implements HasTable {
        use InteractsWithTable;

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
                    ->mountUsing(fn (ComponentContainer $form, Student $record) => $form->fill([
                              'name' => $record->name,
                              'father_name' => $record->father_name,
                              'mobile' => $record->mobile,
                              'date_of_birth' => $record->date_of_birth,
                              'gender' => $record->gender,
                              'nationality' => $record->nationality,
                              'cnic_passport' => $record->cnic_passport,
                    ]))
                    ->form([
                        Card::make()
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
                }),
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
