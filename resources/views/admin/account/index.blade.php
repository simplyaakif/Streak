@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <div class="">

            <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                Accounts
            </h1>
            <p class="text-sm text-gray-500">Finance accounts including cash and bank accounts</p>
        </div>
        <div>
            <x-common.ph-button-primary label="Add Account" route="{{route('admin.accounts.create')}}"/>
        </div>
    </x-common.page-header>

    <x-common.page-body>
        <div class="divide-y">
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    @foreach($accounts as $account)
                        <x-common.stat-card label="{{$account->title}}" stat="{{$account->amount}} Rs"
                                            sublabel="{{$account->account_number}}">
                            <x-slot name="icon">
                                @if($account->type==='cash')
                                    <x-icons.cash class="w-10 h-10 text-gray-400"/>
                                @elseif ($account->type==='bank')
                                    <x-icons.bank class="w-10 h-10 text-gray-400"/>
                                @elseif ($account->type==='wallet')
                                    <x-icons.wallet class="w-10 h-10 text-gray-400"/>
                                @endif
                            </x-slot>
                        </x-common.stat-card>
                    @endforeach
                </div>
            </div>
        </div>
    </x-common.page-body>

@endsection
