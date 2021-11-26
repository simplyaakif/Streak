<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgoraFlexibleClassroomDemo</title>
    {{--    <link rel="stylesheet" href="{{asset('css/student.css')}}">--}}
</head>

<body>
<style>
    #root1 {
        width: 100%;
        height: 100%;
    }
</style>
{{--<div class="relative w-full">--}}
{{--    <div class="absolute right-0 top-0">--}}
{{--        <a--}}
{{--            href="https://api.agora.io/edu/apps/a289059beda142a6a59c891332b515a0/v2/rooms/smallclass-4/states/1"--}}
{{--            class="block mt-1 bg-cyan-700 text-white px-2 py-2 rounded-lg text-xs">End--}}
{{--            Class--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
<div id="root1"></div>

{{--<script src="https://solutions-apaas.agora.io/apaas/app/1.1.5-rc.15/static/js/2.c06c99b1.chunk.js"></script>--}}
{{--<script src="https://solutions-apaas.agora.io/apaas/app/1.1.5-rc.15/static/js/main.e5a766f0.chunk.js"></script>--}}
<script src="https://download.agora.io/edu-apaas/release/edu_sdk_1.1.5.10.js"></script>
{{--<script src="https://sdk.netless.link/white-web-sdk/2.12.20.js"></script>--}}
<script type="text/javascript">
    AgoraEduSDK.config({
        // Here pass in the Agora App ID you have got
        appId: "a289059beda142a6a59c891332b515a0",
        region: "AP"
    })
    AgoraEduSDK.launch(
        document.querySelector("#root1"), {
            // Here pass in the RTM token you have generated
            rtmToken: "{{$launch['rtmToken']}}",
            // The user ID must be the same as the one you used for generating the RTM token
            userUuid: "{{$launch['userUuid']}}",
            userName: "{{$launch['userName']}}",
            roomUuid: "{{$launch['roomUuid']}}",
            roomName: "{{$launch['roomName']}}",
            roleType: {{$launch['roleType']}},
            roomType: {{$launch['roomType']}},
            recordUrl: "{{Request::url()}}",
            // roomType: 0,
            pretest: false,
            language: "en",
            startTime: new Date().getTime(),
            duration: 60 * {{$launch['duration']}},
            courseWareList: [],
            listener: (evt) => {
                console.log("evt", evt)
            }
        }
    )
</script>
</body>

</html>
