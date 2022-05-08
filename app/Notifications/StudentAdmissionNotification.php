<?php

    namespace App\Notifications;

    use App\Channels\SmsChannel;
    use Illuminate\Bus\Queueable;
    use Illuminate\Notifications\Notification;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class StudentAdmissionNotification extends Notification implements ShouldQueue {

        use Queueable;

        public function __construct()
        {
            //
        }

        public function via($notifiable): array
        {
            return [ SmsChannel::class,'mail'];
        }

        public function toMail($notifiable): MailMessage
        {
            return (new MailMessage)
                ->greeting('Dear '.$notifiable->name)
                ->line('Congratulations. You have been successfully admitted to Ace American Center of English')
//                ->action('Notification Action', url('/'))
                ->line('Welcome to the ACE American Institute community.');
        }

        public function toLifetimesms($notifiable)
        {
            return [
                'body' => 'Dear ' . $notifiable->name . ', You have successfully registered at Ace American Center of English.'
            ];
        }

        public function toArray($notifiable): array
        {
            return [//
                    'body' => 'Dear ' . $notifiable->name . ', You have successfully registered at Ace American Center of English.'
            ];
        }
    }
