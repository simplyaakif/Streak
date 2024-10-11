<?php

    namespace App\Livewire\Admin\Filament\Employee;

    use App\Models\Employee;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Section;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Livewire\Component;
    use Filament\Notifications\Notification;

    class CreateOrUpdate extends Component implements HasForms {

        use InteractsWithForms;

        public Employee $employee;

        public $employee_id;

        public function mount(): void
        {
            if($this->employee == null) {
                dd($this->employee);
                $this->form->fill($this->employee->toArray());
            } else {
                $this->form->fill($this->employee->toArray()+['employee_id'=>$this->employee->id]);
//                $this->form->fill(['employee_id'=>$this->employee->id]);
            }
        }

        protected function getFormSchema(): array
        {
            return [
                Section::make('Employee Details')->schema([
                                         TextInput::make('employee_id'),
                                         TextInput::make('user_id'),
                                         TextInput::make('name')->required(),
                                         TextInput::make('mobile')->required(),
                                         TextInput::make('email')->required(),
                                         DatePicker::make('date_of_birth'),
                                         Select::make('gender')
                                         ->options(
                                             ['male'=>'Male','female'=>'Female']
                                         ),
                                         TextInput::make('address')->columnSpan(2),

                                     ])->columns(2),
            ];
        }

        protected function getFormModel():Employee
        {
            return $this->employee;
        }

        public function submit(): void
        {
//            $employee = $this->form->getState();
//            unset($employee['employee_id']);
//            $employee = Employee::updateOrCreate([
//                'id'=>$this->form->getState()['employee_id']
//                                                 ],$employee);
            Notification::make()
                ->title('Saved successfully')
                ->success()
                ->send();

        }

        public function render()
        {
            return view('livewire.admin.filament.employee.create-or-update');
        }
    }
