<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\Admin\StreamingController as SC;
    use App\Models\Batch;
    use Auth;

    class StreamingController extends Controller {

        public function index(Batch $batch)
        {
            $launch = [
                'rtmToken' => SC::rtm_token(),
                'userUuid' => Auth::id(),
                //                'userUuid' => 'stream',
                'userName' => Auth::user()->name,
                //Batch Id
                'roomUuid' => $batch->id,
                //Batch Name
                'roomName' => $batch->title,
                // Teacher
                'roleType' => 2,
                // Mini Class Room
                'roomType' => 4,
                // In minutes
                'duration' => 90,
            ];


            return view('student.stream.index', compact('launch'));
        }
    }
