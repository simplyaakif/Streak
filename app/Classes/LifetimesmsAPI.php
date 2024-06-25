<?php


    namespace App\Classes;


    class LifetimesmsAPI {

        protected $url;
        protected $parameters;


        public function __construct()
        {
            $this->url = "https://lifetimesms.com/balance-inquiry";
            $this->parameters = [
                "api_token"  => config('lifetimesms.LIFETIMESMS_API_TOKEN'),
                "api_secret" => config('lifetimesms.LIFETIMESMS_API_SECRET'),
            ];
        }

        public function balanceInquiry()
        {

            $ch      = curl_init();
            $timeout = 30;
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->parameters);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        }
    }
