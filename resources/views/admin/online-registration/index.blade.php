@extends('layouts.admin')

@section('content')
    <x-common.page-header>
    <x-common.ph-section-header title="Online Registrations " subtitle="Form Filled by Online Registration"/>
        <div class="text-right">
            <div class="text-sm">Link to Share for Online Registrations</div>
            <div class="text-sm text-cyan-600">
                <a href="{{route('online-register')}}">
                {{route('online-register')}}
                </a>
            </div>
        </div>
    </x-common.page-header>

    <x-common.page-body>
    <livewire:admin.online-registration.index/>
    </x-common.page-body>
@endsection
