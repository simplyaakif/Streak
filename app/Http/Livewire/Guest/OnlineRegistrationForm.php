<?php

    namespace App\Http\Livewire\Guest;

    use App\Channels\SmsChannel;
    use App\Models\Campus;
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

        public $submitted = false ;
        public $name;
        public $father_name;
        public $email;
        public $pakistan_mobile;
        public $whatsapp_mobile;
        public $courses=[];
        public $country;
        public $address;
        public $pak_cnic;
        public $ace_reference;


        public $mode_of_learning;
        public $campus_id;


        function getFormSchema(): array
        {
            return [
                TextInput::make('name')
                ->required(),
                TextInput::make('father_name')->label('Father Name')->required(),
//
                MultiSelect::make('courses')
                    ->options(Course::pluck('title','id'))
                    ->helperText('Enter the course or courses you are applying for')
                    ->required(),
//
                Select::make('campus_id')
                    ->label('Campus')
                    ->options(Campus::pluck('name','id'))
                    ->helperText('Enter the campus you are applying for')
                    ->required(),

                Select::make('mode_of_learning')
                    ->options([
                        'On-Campus',
                        'Online'
                              ])
                    ->helperText('Enter the learning type you are applying for')
                    ->required(),

                Select::make('ace_reference')
                    ->options([
                        'Facebook_Advertisement'=>'Facebook Advertisement',
                        'Whatsapp'=>'Whatsapp',
                        'Phone_call' =>'Phone call',
                        'Website_chat' =>'Website chat',
                        'Google_search'=>'Google search',
                        'Physically_Campus_visit'=>'Physically Campus visit',
                        'Instagram' =>'Instagram',
                        'Friend/Relative/Reference'=>'Friend/Relative/Reference',
                    ])
                    ->helperText('Enter the reference for the Institution'),

                TextInput::make('pakistan_mobile')
                    ->label('Mobile Number (Pakistan Only)')
                    ->helperText("Fill if you have a Pakistan mobile number")
                    ->mask(fn (TextInput\Mask $mask) => $mask->pattern('0000-0000000'))
                ->minLength(11),
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
//            dd($this->form->getState());
            $registration = OnlineRegistration::create($this->form->getState());
            $registration->courses()->attach($this->form->getState()['courses']);
//            $this->form->model($registration)->saveRelationships();

            if($this->form->getState()['pakistan_mobile']){
            $sms = new SmsChannel();
            $text = "Your registration has completed successfully online. We will be in touch
            Ace American Center of English
            03335335792";
            $sms->singleSms($this->form->getState()['pakistan_mobile'],$text);
            }

            $this->submitted = true;
        }

        public function render()
        {
            return view('livewire.guest.online-registration-form');
        }
    }
