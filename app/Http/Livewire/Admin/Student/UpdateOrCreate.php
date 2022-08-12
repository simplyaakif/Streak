<?php

    namespace App\Http\Livewire\Admin\Student;

    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Student;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Repeater;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Components\Toggle;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Illuminate\Database\Eloquent\Builder;
    use Livewire\Component;

    class UpdateOrCreate extends Component implements HasForms {

        use InteractsWithForms;

        public Student $student;

        public function mount():void
        {
            $this->form->fill(
                $this->student->toArray()
            );
        }

        protected function getFormSchema(): array
        {
            return [
                Repeater::make('batches')
                    ->relationship()
                    ->schema([
                    Select::make('batch_id')
                    ->options(Batch::all()->pluck('title','id'))
                        ->label('Batch Title')
                    ->required(),
                    Select::make('batch_status')
                    ->options(
                            BatchStudent::STATUS
                              )
                        ->label('Batch Status')
                        ->required(),
                    DatePicker::make('session_start_date')->required(),
                    DatePicker::make('session_end_date')->required(),
//                        Repeater::make('recoveries')
//                            ->relationship('recoveries',fn(Builder $query)=>$query->)
//                            ->schema([
//                                        TextInput::make('amount'),
//                                        Toggle::make('is_paid'),
//                                        DatePicker::make('due_date')
//                                    ])
//                        ->columns(2)
//                        ->columnSpan(2)
                             ])
                    ->columns(2)

            ];
        }
        protected function getFormModel(): Student
        {
            return $this->student;
        }

        public function render()
        {
            return view('livewire.admin.student.update-or-create');
        }
    }
