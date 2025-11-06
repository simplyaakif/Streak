<?php

namespace App\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EvoChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        // Get the notification data
        $message = $notification->toEvo($notifiable);

        // Get the phone number from the notifiable
        $number = $notifiable->whatsapp_number($notification);

        ray($number);
        //        dd($number);

        if (! $number) {
            Log::warning('EvoChannel: No phone number configured for notifiable', [
                'notifiable_id' => $notifiable->id ?? null,
                'notification' => get_class($notification),
            ]);

            return;
        }

        // Get configuration
        $apiKey = config('services.evo.api_key');
        $instanceName = config('services.evo.instance_name');
        $baseUrl = config('services.evo.base_url');

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
                    'text' => $message['text'] ?? $message,
                    'delay' => 3000,
                ]);

            if ($response->successful()) {
                create_wapp_message($number, $message['text'] ?? $message, $message['user_id']);
                Log::info('EvoChannel: Notification sent successfully', [
                    'notifiable_id' => $notifiable->id ?? null,
                    'notification' => get_class($notification),
                    'number' => $number,
                    'response_status' => $response->status(),
                    'response_body' => $response->json(),
                ]);
            } else {
                Log::error('EvoChannel: Failed to send notification', [
                    'notifiable_id' => $notifiable->id ?? null,
                    'notification' => get_class($notification),
                    'number' => $number,
                    'response_status' => $response->status(),
                    'response_body' => $response->body(),
                ]);
            }
        } catch (Exception $e) {
            Log::error('EvoChannel: Exception while sending notification', [
                'notifiable_id' => $notifiable->id ?? null,
                'notification' => get_class($notification),
                'number' => $number,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
