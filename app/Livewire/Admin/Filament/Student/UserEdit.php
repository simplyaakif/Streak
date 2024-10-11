<?php

    namespace App\Livewire\Admin\Filament\Student;

    use App\Models\Student;
    use App\Models\User;
    use Filament\Forms\Components\Card;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class UserEdit extends Component implements HasForms {

        use InteractsWithForms;

        public $student_id;
        public $user_id;
        public User $user;

        public $email;
        public $password;

        public function mount()
        {

            $user = User::find($this->user_id);
            if($user) {
                $this->form->fill(['email' => $user->email],);
            }
        }

        protected function getFormSchema(): array
        {
            return [
                Card::make()
                ->schema([
                TextInput::make('email')->email(),
                TextInput::make('password')->minLength(8),
                         ])->columns(2),
            ];
        }

        public function submit()
        {
            $updatedUser=$this->form->getState();
            if($updatedUser['password'] ===null or $updatedUser['password'] ==='' ){
                unset($updatedUser['password']);
            }

//            dd($updatedUser,$this->form->getState());
            $user = User::find($this->user_id);
            $user->email= $updatedUser['email'];
            if(array_key_exists('password',$updatedUser)){
                $user->password = bcrypt($updatedUser['password']);
            }
            $user->save();

            $student = Student::find($this->student_id);
            $student->email = $user->email;
            $student->save();

            $this->redirectRoute('admin.students.show',$this->student_id);
        }

        public function render()
        {
            return view('livewire.admin.filament.student.user-edit');
        }
    }
