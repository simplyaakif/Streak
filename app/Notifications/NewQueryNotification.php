<?php

    namespace App\Notifications;

    use App\Channels\SmsChannel;
    use Illuminate\Bus\Queueable;
    use Illuminate\Notifications\Notification;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class NewQueryNotification extends Notification implements ShouldQueue {

        use Queueable;

        public function __construct()
        {
            //
        }

        public function via($notifiable): array
        {
//            return ['mail'];
            return [
                SmsChannel::class,
                'mail'
            ];
        }

        public function toMail($notifiable): ?MailMessage
        {
            if($notifiable->email!==null) {
                app('log')->info(json_encode($notifiable));

                return (new MailMessage)->subject('Welcome ' . $notifiable->name . ' to Ace American Center of English')->greeting('Dear ' . $notifiable->name)->line('Thank you for visiting Ace American Center of English. Looking forward to meeting you again.');
            }
            else{
                return null;
            }
        }

        public function toLifetimesms($notifiable)
        {
            return [
                'body' => 'Dear ' . $notifiable->name . ', Thank you for visiting Ace American Center of English. Looking forward to meeting you again.'
            ];
        }

        public function toArray($notifiable): array
        {
            return [//
                    'body' => 'Dear ' . $notifiable->name . ', Thank you for visiting Ace American Center of English. Looking forward to meeting you again.'
            ];
        }
    }
