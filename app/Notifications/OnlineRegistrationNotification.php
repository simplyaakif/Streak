<?php

namespace App\Notifications;

use App\Channels\EvoChannel;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OnlineRegistrationNotification extends Notification
{
    public function __construct()
    {
    }

    public function via($notifiable): array
    {
        return ['mail', EvoChannel::class];
    }

    public function toEvo()
    {

    }
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('');
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
