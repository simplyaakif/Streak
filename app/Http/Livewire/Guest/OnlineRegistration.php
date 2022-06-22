<?php

    namespace App\Http\Livewire\Guest;

    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Livewire\Component;

    class OnlineRegistration extends Component implements HasForms {

        use InteractsWithForms;


        function getFormSchema(): array
        {
            return [
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),

            ];
        }

        public function render()
        {
            return view('livewire.guest.online-registration');
        }
    }
