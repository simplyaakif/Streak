<?php

    namespace App\Http\Controllers\Admin;

    use App\Classes\AgoraDynamicKey\RtcTokenBuilder;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Classes\AgoraDynamicKey\RtmTokenBuilder;

    class StreamingController extends Controller {

        public function index()
        {
            $launch = [
//                'rtmToken' => '006a289059beda142a6a59c891332b515a0IABbQmhn7Ed0WO2D3/KK/5bC9RpEC1vYVTUveIFw5jbrxhy+6fAAAAAAEAAGMGkoF7ygYQEAAQAXvKBh',
                'rtmToken' => $this->rtm_token(),
                'userUuid' => Auth::id(),
//                'userUuid' => 'stream',
                'userName' => Auth::user()->name,
                //Batch Id
                'roomUuid' => 11,
                //Batch Name
                'roomName' => 'Spoken English11',
                // Teacher
                'roleType' => 1,
                // Mini Class Room 0 1to1 , 2 Large Hall, 4 Small class
                'roomType' => 4,
                // In minutes
                'duration' => 30,
            ];

            return view('admin.stream.index', compact('launch'));
        }

        public static function rtm_token()
        {
            $appID          = 'a289059beda142a6a59c891332b515a0';
            $appCertificate = '9dc9f2a48d3a47598cd09fc9bbe79a32';
//            $channelName = $request->channelName;
//            $channelName         = ''.Auth::id().'';
            $user                = ''.Auth::id().'';
//            $user                = 'stream';
            $role = RtmTokenBuilder::RoleRtmUser;
            $expireTimeInSeconds = 3600;
            $currentTimestamp    = now()->getTimestamp();
            $privilegeExpiredTs  = $currentTimestamp + $expireTimeInSeconds;

            return  RtmTokenBuilder::buildToken($appID, $appCertificate, $user, $role, $privilegeExpiredTs);
        }
    }
