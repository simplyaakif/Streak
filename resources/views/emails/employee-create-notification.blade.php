@component('mail::message')
# Welcome

Hello, {{$data['name']}}, <br/>
Your Employee Account has been created Successfully. <br/>


## You may login using following details.

Username: <b>{{$data['email']}}</b> <br/>
Password: <b>{{$data['password']}}</b> <br/>

This is a system generated password. We recommend you to change it. <br/>

To login click here.
@component('mail::button', ['url' => route('admin.home')])
Login to Employee Portal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
