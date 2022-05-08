@extends('layouts.admin')

@section('content')
    <x-common.page-header>
    <x-common.ph-section-header title="Sms Center" subtitle="Sms Hub"/>
        <div class="text-right">
{{--            <x-icons.money class="w-6 h-6 text-gray-400"/>--}}
            <p class="font-bold text-xl text-gray-700">{{  $credit->sms}}</p>
            <p class="text-sm"> Balance Remaining</p>
        </div>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.communication.sms.index/>
    </x-common.page-body>
@endsection
