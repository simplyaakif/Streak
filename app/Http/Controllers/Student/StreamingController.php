<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\Admin\StreamingController as SC;
    use Auth;

    class StreamingController extends Controller {

        public function index()
        {
            $launch = [
                'rtmToken' => SC::rtm_token(),
                'userUuid' => Auth::id(),
                //                'userUuid' => 'stream',
                'userName' => Auth::user()->name,
                //Batch Id
                'roomUuid' => 12,
                //Batch Name
                'roomName' => 'Spoken English',
                // Teacher
                'roleType' => 2,
                // Mini Class Room
                'roomType' => 4,
                // In minutes
                'duration' => 60,
            ];


            return view('student.stream.index', compact('launch'));
        }
    }
