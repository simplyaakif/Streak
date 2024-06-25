@component('mail::message')
# Introduction

Hello, {{$details['name']}}, <br/>
Your Student Account has been created Successfully. <br/>


## You may login using following details.

Username: <b>{{$details['email']}}</b> <br/>
Password: <b>{{$details['password']}}</b> <br/>

This is a system generated password. We recommend you to change it. <br/>

To login click here.
@component('mail::button', ['url' => route('student.dashboard')])
Login to Student Portal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
