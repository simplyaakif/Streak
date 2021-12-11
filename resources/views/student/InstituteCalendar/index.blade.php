@extends('layouts.student')
@section('main')
    <div class="bg-gray-50">
        <div class="max-w-6xl mx-auto  py-4">
            <livewire:admin.institute-calendar.index
                week-starts-at="1"
                before-calendar-view="admin/institute-calendar/before-calendar-view"
            />
        </div>
    </div>
@endsection
