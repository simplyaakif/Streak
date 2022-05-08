<?php

    namespace App\Channels;


    use Illuminate\Notifications\Notification;

    class SmsChannel {

        public function send($notifiable, Notification $notification)
        {
//            Given we have Mobile Number
            if(method_exists($notifiable, 'routeNotificationForSms')) {
                $mobile = $notifiable->routeNotificationForSms($notifiable);
                app('log')->info('Reached mobile setup');
            } else {
                app('log')->info(json_encode($notifiable));
                $mobile = null;
            }


            $data
                = method_exists($notification, 'toLifetimesms') ? $notification->toLifetimesms($notifiable) : $notification->toArray($notifiable);
            //            Send a Sms

            if($mobile === null || empty($data)) {
                return "Nothing";
            }

            app('log')->info(json_encode([
                                             'mobile' => $mobile,
                                             'data'   => $data,
                                         ]));
            $this->singleSms($mobile,$data['body']);

            return true;

        }

        public function singleSms($mobile, $body)
        {
            $url = "https://lifetimesms.com/plain";
            $mobile = trim($mobile);

            $parameters = array("api_token" => config('lifetimesms.LIFETIMESMS_API_TOKEN'),
                                "api_secret" => config('lifetimesms.LIFETIMESMS_API_SECRET'),
                                "to" => $mobile,
                                "from" => config('lifetimesms.LIFETIMESMS_SENDER'),
                                "message" => $body
            );

            $ch = curl_init();
            $timeout  =  30;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            $response = curl_exec($ch);
            curl_close($ch);

            echo $response ;
            app('log')->info(json_encode($response));
        }
    }
