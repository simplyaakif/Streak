<div class="block">
    <x-button.primary wire:click="$set('showModal',true)">Take Attendance</x-button.primary>
    <div class="mt-4">
        <x-common.table class="w-full">
            <x-slot name="head">
                <x-common.table.heading>Sr #</x-common.table.heading>
                <x-common.table.heading>Date</x-common.table.heading>
                <x-common.table.heading>Actions</x-common.table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($attendanceRecords as $date =>$record)
                    <x-common.table.row>
                        <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                        <x-common.table.cell>{{$date}}</x-common.table.cell>
                        <x-common.table.cell>
                            <div class="flex space-x-2">
                                <x-icons.eye class="w-5 h-5 text-gray-500" wire:click="showAttendance('{{$date}}')"/>
                                <x-icons.edit class="w-5 h-5 text-blue-500" wire:click=""/>
                            </div>
                        </x-common.table.cell>
                    </x-common.table.row>
                @empty
                    <x-common.table.row>
                        <x-common.table.cell colspan="3">No Records Found</x-common.table.cell>
                    </x-common.table.row>
                @endforelse
            </x-slot>
        </x-common.table>
    </div>

    <div>

        @if($showAttendanceModal)
            <x-modal.dialog maxWidth="3xl" wire:model="showAttendanceModal">
                <x-slot name="title">
                    {{Carbon\Carbon::parse($attendanceRecord[0]["datetime"])->format('D d F Y') }}
                </x-slot>
                <x-slot name="content">
                    <x-common.table>
                        <x-slot name="head">
                            <x-common.table.heading>Sr #</x-common.table.heading>
                            <x-common.table.heading>Student Name</x-common.table.heading>
                            <x-common.table.heading>Status</x-common.table.heading>
                        </x-slot>
                        <x-slot name="body">
                            @forelse($attendanceRecord as $record)
                                <x-common.table.row>
                                    <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                                    <x-common.table.cell>{{$record["student"]["name"]}}</x-common.table.cell>
                                    <x-common.table.cell>{{$record['attendance_status']}}</x-common.table.cell>
                                </x-common.table.row>
                            @empty
                                <x-common.table.row>
                                    <x-common.table.cell colspan=""> No data found</x-common.table.cell>
                                </x-common.table.row>
                            @endforelse
                        </x-slot>
                    </x-common.table>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showAttendanceModal',false)">Cancel</x-button.secondary>
                </x-slot>
            </x-modal.dialog>
        @endif
    </div>

    <form wire:submit.prevent="submit">
        <x-modal.dialog maxWidth="3xl" wire:model="showModal">
            <x-slot name="title">
                <span class="text-cyan-700 font-medium">{{$batch->title}}</span>
                <span class="text-base text-gray-400">Student Attendance</span>
            </x-slot>
            <x-slot name="content">
                <x-common.table>
                    <x-slot name="head">
                        <x-common.table.heading>Sr #</x-common.table.heading>
                        <x-common.table.heading>Name</x-common.table.heading>
                        <x-common.table.heading>Status</x-common.table.heading>
                        <x-common.table.heading>Date</x-common.table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @foreach($batch->students as $student)
                            <x-common.table.row>
                                <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                                <x-common.table.cell>{{$student->name}}</x-common.table.cell>
                                <x-common.table.cell>
                                    <div class="text-xs space-x-2">
                                        @foreach(App\Models\StudentAttendance::STATUS as $status)
                                            <label for="status_{{$student->id}}_{{$status}}">
                                                <input type="radio" id="status_{{$student->id}}_{{$status}}"
                                                       name="status_{{$student->id}}"
                                                       wire:model.defer="statuses.{{$student->id}}"
                                                       value="{{$status}}"/>
                                                {{$status}}
                                            </label>
                                        @endforeach
                                    </div>
                                </x-common.table.cell>
                                <x-common.table.cell>{{now()->format('d-m-Y')}}</x-common.table.cell>
                            </x-common.table.row>
                        @endforeach
                    </x-slot>
                </x-common.table>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Submit Attendance</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

</div>
