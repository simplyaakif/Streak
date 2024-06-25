<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;

    class StudentUserDetailsMail extends Mailable implements ShouldQueue {

        use Queueable;
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
