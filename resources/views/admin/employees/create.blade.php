@extends('layouts.admin')
@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Create Employee"/>
    </x-common.page-header>
    <x-common.page-body>
        <div class="max-w-3xl mx-auto">
            <div class="grid-cols-2 grid gap-2">
                <div>
                    <label for="">Name</label>
                    <x-common.data-input-text/>
                </div>
                <div>
                    <label for="">Father Name</label>
                    <x-common.data-input-text/>
                </div>

                <div>
                    <label for="">Gender</label>
                    <x-common.data-input-select>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-common.data-input-select>
                </div>

                <div>
                    <label for="">Mobile</label>
                    <x-common.data-input-text/>
                </div>

                <div>
                    <label for="">Telephone</label>
                    <x-common.data-input-text/>
                </div>
                <div>
                    <label for="">Address</label>
                    <x-common.data-input-text/>
                </div>

                <div>
                    <label for="">Designation</label>
                    <x-common.data-input-select>
                        @foreach(App\Models\Employee::DESIGNATION as $value => $label)
                            <option value="{{$value}}">{{$label}}</option>
                        @endforeach
                    </x-common.data-input-select>
                </div>
            </div>
        </div>
    </x-common.page-body>
@endsection
