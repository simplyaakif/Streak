<?php

    namespace App\Livewire\Guest;

    use Exception;
    use Filament\Actions\Contracts\HasActions;
    use Filament\Actions\Concerns\InteractsWithActions;
    use App\Channels\SmsChannel;
    use App\Models\Campus;
    use App\Models\Course;
    use App\Models\OnlineRegistration;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Log;
    use Livewire\Component;

    class OnlineRegistrationForm extends Component implements HasForms, HasActions {

        use InteractsWithActions;
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
                Select::make('courses')
                    ->options(Course::orderBy('title','ASC')->pluck('title','id'))
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
                                  'On-Campus'=> 'On-Campus',
                                  'Online'=>'Online'
                              ])
                    ->helperText('Enter the learning type you are applying for')
                    ->required(),

                Select::make('ace_reference')
                    ->options([
                        'Facebook Advertisement'=>'Facebook Advertisement',
                        'Whatsapp'=>'Whatsapp',
                        'Phone Call' =>'Phone call',
                        'Website Chat' =>'Website chat',
                        'Google Search'=>'Google search',
                        'Physically Campus_visit'=>'Physically Campus visit',
                        'Instagram' =>'Instagram',
                        'Friend/Relative/Reference'=>'Friend/Relative/Reference',
                    ])
                    ->helperText('Enter the reference for the Institution'),

                TextInput::make('pakistan_mobile')
                    ->label('Mobile Number (Pakistan Only)')
                    ->helperText("Fill if you have a Pakistan mobile number")
//                    ->mask('0000-0000000')
                ->minLength(11),

                TextInput::make('whatsapp_mobile')
                    ->label('Whatsapp Mobile Number')
                    ->required()
                    ->helperText("Fill if you have Whatsapp number"),
                TextInput::make('email')->email()->required(),
                Textarea::make('address')->label('Current Address'),
                TextInput::make('pak_cnic')->label('CNIC #')
                ->helperText('If from Pakistan Kindly Enter')
                    ->mask('00000-0000000-0')

            ];
        }

        protected function getFormModel(): string
        {
            return OnlineRegistration::class;
        }

        public function register():void
        {
            $courses = $this->form->getState()['courses'];
            $onlineRegistration = $this->form->getState();
            unset($onlineRegistration['courses']);
            $registration = OnlineRegistration::create($onlineRegistration);
            $registration->courses()->attach($courses);

            if($this->form->getState()['pakistan_mobile']){
            $sms = new SmsChannel();
            $text = "Your registration has completed successfully online. We will be in touch
            Ace American Center of English
            03335335792";
            $sms->singleSms($this->form->getState()['pakistan_mobile'],$text);
            }

            if($this->form->getState()['whatsapp_mobile']){
                $text = "Your registration has completed successfully online. We will be in touch
            Ace American Center of English
            03335335792";
//                $sms->singleSms($this->form->getState()['pakistan_mobile'],$text);

                // Get configuration
                $apiKey = config('services.evo.api_key');
                $instanceName = config('services.evo.instance_name');
                $baseUrl = config('services.evo.base_url');

                $number = $this->remove_leading_plus($this->form->getState()['whatsapp_mobile']);

                try {
                    // Send the notification via HTTP request
                    sleep(3);
                    $response = Http::timeout(30)
                        ->withHeaders([
                            'Content-Type' => 'application/json',
                            'apikey' => $apiKey,
                        ])
                        ->post("{$baseUrl}/message/sendText/{$instanceName}", [
                            'number' => $number,
                            'text' => $text,
                            'delay' => 3000,
                        ]);

                } catch (Exception $e) {
                    Log::error('EvoChannel: Exception while sending notification', [
                        'notifiable_id' => $notifiable->id ?? null,
                        'number' => $number,
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString(),
                    ]);
                }


            }

            $this->submitted = true;





        }



        function remove_leading_plus(string $value): string
        {
            $value = str_replace('+', '', $value);
            //        if variable starts with 03 then replace with 923
            if (substr($value, 0, 2) == '03') {
                $value = '923'.substr($value, 2);
            }

            return $value;
        }

        public function render()
        {
            return view('livewire.guest.online-registration-form');
        }
    }
