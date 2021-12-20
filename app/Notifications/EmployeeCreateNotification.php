<?php

    namespace App\Notifications;

    use Illuminate\Notifications\Notification;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class EmployeeCreateNotification extends Notification implements ShouldQueue {

        use Queueable;
        public $details;

        public function __construct($details)
        {
            $this->details = $details;
        }

        public function via($notifiable): array
        {
            return ['mail'];
        }

        public function toMail($notifiable): MailMessage
        {
            $data = $this->details;
            return (new MailMessage)
                ->from('info@ace.org.pk')
                ->subject('Employee Account Created')
                ->markdown('emails.employee-create-notification',compact('data'));
        }

        public function toArray($notifiable): array
        {
            return [//
            ];
        }
    }
