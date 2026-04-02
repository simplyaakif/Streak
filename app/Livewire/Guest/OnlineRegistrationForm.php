<?php

    namespace App\Livewire\Guest;

    use Exception;
    use Filament\Actions\Contracts\HasActions;
    use Filament\Actions\Concerns\InteractsWithActions;
    use App\Channels\SmsChannel;
    use App\Models\Campus;
    use App\Models\Course;
    use App\Models\OnlineRegistration;
    use App\Models\WhatsappResponse;
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
            $courses = (array) $this->form->getState()['courses'];
            $onlineRegistration = $this->form->getState();
            unset($onlineRegistration['courses']);
            $registration = OnlineRegistration::create($onlineRegistration);
            $registration->courses()->attach($courses);

            if($this->form->getState()['pakistan_mobile']){
            $sms = new SmsChannel();
            $text = "Your registration has completed successfully online. Our staff will contact you in next 24 working hours.
            Ace American Center of English
            03335335792";
            $sms->singleSms($this->form->getState()['pakistan_mobile'],$text);
            }

            if ($this->form->getState()['whatsapp_mobile']) {
                $number = $this->remove_leading_plus($this->form->getState()['whatsapp_mobile']);
                $courseSpecificMessageSent = false;

                try {
                    foreach ($courses as $courseId) {
                        $whatsappResponse = WhatsappResponse::whereHas(
                            'courses', fn ($q) => $q->where('courses.id', $courseId)
                        )->first();

                        if (!$whatsappResponse) {
                            continue;
                        }

                        $courseSpecificMessageSent = true;

                        foreach ($whatsappResponse->content as $block) {
                            sleep(1);
                            $delay = !empty($block['data']['delay']) ? (int) $block['data']['delay'] : 1000;

                            if ($block['type'] === 'text') {
                                $this->sendWhatsappText($number, $block['data']['message'], $delay);
                            } elseif ($block['type'] === 'media') {
                                $media = $whatsappResponse->getFirstMedia('whatsapp_response_media');
                                if ($media) {
                                    $this->sendWhatsappMedia($number, $media->getUrl(), $media->mime_type, $media->file_name, $block['data']['caption'] ?? '', $delay);
                                }
                            }
                        }
                    }

                    if (!$courseSpecificMessageSent) {
                        sleep(1);
                        $this->sendWhatsappText($number, $this->hardcodedRegistrationMessage(), 3000);
                    }
                } catch (Exception $e) {
                    Log::error('WhatsApp send failed on registration', [
                        'number' => $number,
                        'error'  => $e->getMessage(),
                        'trace'  => $e->getTraceAsString(),
                    ]);
                }
            }

            $this->submitted = true;





        }



        private function sendWhatsappText(string $number, string $text, int $delayMs = 1000): void
        {
            Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'apikey'       => config('services.evo.api_key'),
                ])
                ->post(config('services.evo.base_url') . '/message/sendText/' . config('services.evo.instance_name'), [
                    'number' => $number,
                    'text'   => $text,
                    'delay'  => $delayMs,
                ]);
        }

        private function sendWhatsappMedia(string $number, string $mediaUrl, string $mimeType, string $fileName, string $caption = '', int $delayMs = 1000): void
        {
            $mediatype = match (true) {
                str_starts_with($mimeType, 'image/') => 'image',
                str_starts_with($mimeType, 'video/') => 'video',
                default                              => 'document',
            };

            Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'apikey'       => config('services.evo.api_key'),
                ])
                ->post(config('services.evo.base_url') . '/message/sendMedia/' . config('services.evo.instance_name'), [
                    'number'    => $number,
                    'mediatype' => $mediatype,
                    'mimetype'  => $mimeType,
                    'media'     => $mediaUrl,
//                    'fileName'  => $fileName,
                    'fileName'  => $caption,
                    'caption'   => $caption,
                    'delay'     => $delayMs,
                ]);
        }

        private function hardcodedRegistrationMessage(): string
        {
            return "Hi! 👋

Thank you for submitting your registration form. We have successfully received your details. You are currently in the queue, and our Front Desk Manager will contact you within the next 24 hours.

Important Note:
An Assessment Test is compulsory before admission for the following courses:


Our most Popular Courses ⭐

Spoken English
(https://ace.org.pk/courses/spoken-english/)

IELTS
(https://ace.org.pk/courses/ielts/)

Digital Marketing
(https://ace.org.pk/courses/digital-marketing-islamabad-rawalpindi/)

Web Design & Development
(https://ace.org.pk/courses/wordpress-web-development-course/)

Graphic Design
(https://ace.org.pk/courses/graphics-designing-course/)

Assessment Test Link:
(https://assessment.ace.org.pk/)

Please follow these steps to attempt the test:

Click on Login
Sign in with Google
Enter your details (Name, WhatsApp Number, etc.)
Select your course
Start your assessment test

Tip:
Please do not take help from anywhere while attempting the test. This will help us place you in the most suitable class according to your level.

For any assistance, feel free to contact us:
📞 0333-5335792
📞 0333-5335892

Thank you! 😊";
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
