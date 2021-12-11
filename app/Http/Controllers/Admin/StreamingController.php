<?php

    namespace App\Http\Controllers\Admin;

    use App\Classes\AgoraDynamicKey\RtcTokenBuilder;
    use App\Events\MyEvent;
    use App\Events\OnlineClassStartNotificationEvent;
    use App\Http\Controllers\Controller;
    use App\Models\Batch;
    use Auth;
    use App\Classes\AgoraDynamicKey\RtmTokenBuilder;

    class StreamingController extends Controller {

        public function index(Batch $batch)
        {

            $launch = [
                'rtmToken' => $this->rtm_token(),
                'userUuid' => Auth::id(),
                'userName' => Auth::user()->name,
                'roomUuid' => $batch->id,
                'roomName' => $batch->title,
                'roleType' => 1,
                'roomType' => 4,
                'duration' => 90,
            ];

            $classOptions=[
                'classCode'=>$launch['roomUuid'],
                'instructor'=>Auth::user()->name,
            ];
            OnlineClassStartNotificationEvent::dispatch($batch,$classOptions);

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
        public function startOnlineClass(Batch $batch){
            $classOptions=[
                'classCode'=>'',
                'instructor'=>Auth::user()->name,
            ];
//            event(new MyEvent('hello'));
            OnlineClassStartNotificationEvent::dispatch($batch,$classOptions);
//            event(new OnlineClassStartNotificationEvent('1','123'));
            echo 'Done';
        }
    }
