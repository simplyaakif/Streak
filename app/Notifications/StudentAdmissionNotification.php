<?php

    namespace App\Notifications;

    use Illuminate\Notifications\Notification;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class StudentAdmissionNotification extends Notification implements ShouldQueue {

        use Queueable;

        public function __construct()
        {
            //
        }

        public function via($notifiable): array
        {
            return ['mail'];
        }

        public function toMail($notifiable): MailMessage
        {
            return (new MailMessage)
                ->line('Congratulations. You have been successfully admitted to Ace American Center of English')
//                ->action('Notification Action', url('/'))
                ->line('Welcome to the ACE American Institute community.');
        }

        public function toArray($notifiable): array
        {
            return [//
            ];
        }
    }
