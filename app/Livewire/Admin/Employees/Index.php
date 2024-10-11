<?php

    namespace App\Livewire\Admin\Employees;

    use App\Models\Employee;
    use App\Models\Role;
    use App\Models\User;
    use App\Notifications\EmployeeCreateNotification;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Actions\BulkAction;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Hash;
    use Illuminate\Database\Eloquent\Collection;
    use Livewire\Component;
    use Livewire\WithPagination;
    use Str;

    class Index extends Component implements HasTable {

        use InteractsWithTable;

        public Employee $employee;
        public User $user;

//        public $employees;
        public $showModal;
        public $roles;
        public $role;

        protected function getTableQuery()
        {
            return Employee::query();
        }

        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('name'),
                TextColumn::make('mobile'),
                TextColumn::make('gender')->extraAttributes(['class'=>'capitalize']),
                TextColumn::make('designation')->extraAttributes(['class'=>'capitalize']),
                TextColumn::make('date_of_birth')->date('d-M'),
                TextColumn::make('email'),
            ];
        }

        protected function getTableActions(): array
        {
            return [
                Action::make('edit')
                    ->url(fn (Employee $record): string => route('admin.employees.edit', $record))->icon('heroicon-s-pencil'),
                Action::make('delete')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->action(fn (Employee $record) => $record->delete()),
            ];
    }

        protected function getTableBulkActions(): array
        {
            return [
                BulkAction::make('delete')
                    ->action(fn (Collection $records) => $records->each->delete())->color('danger')
                    ->icon('heroicon-o-trash')
            ];
        }

        public function mount()
        {
            $this->roles    = Role::where('id', '!=', 4)->get();
            $this->employee = Employee::make(['earning_type' => 'fixed']);

        }

        public function rules()
        {
            return [
                'employee.name'          => 'required',
                'employee.father_name'   => 'required',
                'employee.mobile'        => 'required',
                'employee.email'         => 'email|required|unique:users,email',
                'employee.address'       => 'nullable',
                'employee.gender'        => 'required',
                'employee.date_of_birth' => 'date|required',
                'employee.designation'   => 'required',
                'employee.salary_amount' => 'numeric|required',
                'role'                   => 'required',
            ];
        }

        public function submit()
        {
            $this->validate();
            $randomPassword  = Str::random(8);
            $hashed_password = Hash::make($randomPassword);
            $this->user      = User::create([
                                                'name'     => $this->employee->name,
                                                'email'    => $this->employee->email,
                                                'password' => $hashed_password,
                                                'is_staff' => 1,
                                            ]);

            $this->user->roles()->attach($this->role);
            $this->employee->user_id      = $this->user->id;
            $this->employee->earning_type = 'fixed';
            $this->employee->save();

            $details = [
                'name'     => $this->user->name,
                'email'    => $this->user->email,
                'password' => $randomPassword
            ];

            $this->user->notify(new EmployeeCreateNotification($details));

            return redirect()->route('admin.employees.index');

        }

        public function render()
        {
            return view('livewire.admin.employees.index', [
                'employees' => Employee::paginate(10)
            ]);
        }
    }
