@extends('layouts.admin')
@section('content')
<x-common.page-header>
    <div>
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">Create a new Account</h2>
        <p class="text-sm text-gray-500 ">Create a new account for the system</p>
    </div>
</x-common.page-header>
<x-common.page-body>
    <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">
        <livewire:admin.account.create/>
    </div>
</x-common.page-body>
@endsection
