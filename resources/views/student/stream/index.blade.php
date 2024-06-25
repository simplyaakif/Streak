<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$launch['roomName']}}</title>
    <script src="https://download.agora.io/edu-apaas/release/edu_sdk_1.1.5.10.js"></script>
{{--    <link rel="stylesheet" href="{{asset('css/student.css')}}">--}}
</head>

<body>
<style>
    #root1 {
        width: 100%;
        height: 100%;
    }
</style>
<div id="root1"></div>

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
            pretest: true,
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
