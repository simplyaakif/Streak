<?php

    namespace App\Mail;

    use Illuminate\Mail\Mailable;

    class StudentUserDetailsMail extends Mailable {

        public $details;

        public function __construct($details)
        {
            $this->details = $details;
        }

        public function build()
        {
            return $this->markdown('emails.student-user-details');
        }
    }
