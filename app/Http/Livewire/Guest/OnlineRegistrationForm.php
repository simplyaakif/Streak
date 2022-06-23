<?php

    namespace App\Http\Livewire\Guest;

    use App\Models\Course;
    use App\Models\OnlineRegistration;
    use Filament\Forms\Components\FileUpload;
    use Filament\Forms\Components\MultiSelect;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Livewire\Component;

    class OnlineRegistrationForm extends Component implements HasForms {

        use InteractsWithForms;

        public $name;
        public $father_name;
        public $email;
        public $pakistan_mobile;
        public $whatsapp_mobile;
        public $courses;
        public $country;
        public $address;
        public $pak_cnic;



        function getFormSchema(): array
        {
            return [
                TextInput::make('name'),
                TextInput::make('father_name')->label('Father Name')->required(),
                MultiSelect::make('courses')
                    ->options(Course::pluck('title','id'))
                    ->helperText('Enter the course or courses you are applying for'),
                Select::make('country')
                    ->options([
                    'Pakistan',
                    'Other Than Pakistan',
                          ]),
                TextInput::make('pakistan_mobile')
                    ->label('Mobile Number (Pakistan Only)')
                    ->helperText("Fill if you have a Pakistan mobile number")
                    ->mask(fn (TextInput\Mask $mask) => $mask->pattern('0000-0000000')),
                TextInput::make('whatsapp_mobile')
                    ->label('Whatsapp Mobile Number')
                    ->helperText("Fill if you have Whatsapp number"),
                TextInput::make('email')->email()->required(),
                Textarea::make('address')->label('Current Address'),
                TextInput::make('pak_cnic')->label('CNIC #')
                ->helperText('If from Pakistan Kindly Enter')
                    ->mask(fn (TextInput\Mask $mask) => $mask->pattern('00000-0000000-0'))

            ];
        }

        protected function getFormModel(): string
        {
            return OnlineRegistration::class;
        }

        public function register():void
        {
            $registration = OnlineRegistration::create($this->form->getState());
//            dd($registration);
            $registration->courses()->attach($this->form->getState()['courses']);
//            $this->form->model($registration)->saveRelationships();
        }

        public function render()
        {
            return view('livewire.guest.online-registration-form');
        }
    }
