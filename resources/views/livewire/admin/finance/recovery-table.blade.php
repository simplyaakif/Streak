<div wire:loading.class="opacity-50">

    <x-common.table>
        <x-slot name="head">
            <x-common.table.heading>#</x-common.table.heading>
            <x-common.table.heading>DP</x-common.table.heading>
            <x-common.table.heading>Name</x-common.table.heading>
            <x-common.table.heading>Course</x-common.table.heading>
            <x-common.table.heading>Batch</x-common.table.heading>
            <x-common.table.heading>Due Date</x-common.table.heading>
            <x-common.table.heading>Status</x-common.table.heading>
            <x-common.table.heading>Amount</x-common.table.heading>
            <x-common.table.heading>Actions</x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($recoveries as $recovery)
                <x-common.table.row>
                    <x-common.table.cell>
                        {{$recoveries->firstItem() + $loop->iteration -1}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="w-12">
                            @forelse($recovery->student->dp as $key => $entry)
                                <a class="link-photo" href="{{ $entry['url'] }}">
                                    <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}"
                                         title="{{ $entry['name'] }}">
                                </a>
                            @empty
                                <img class="h-10 w-10 rounded-full" src="{{$recovery->student->avatarUrl()}}" alt="">
                            @endforelse
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell>
                        {{$recovery->student->name}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        {{$recovery->course->title}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        {{$recovery->batch->title}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        {{carbon($recovery->due_date)->format('d-M-Y')}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="rounded-lg px-2 py-1 flex text-xs items-center justify-center text-center
                            {{$recovery->status() ? 'bg-cyan-100 text-cyan-600':'bg-red-100 text-red-600'}} ">
                         {{$recovery->status() ? 'Upcoming':'Over Due'}}
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell class="text-right">
                        {{$recovery->amount}} PKR
                    </x-common.table.cell>


                    <x-common.table.cell>
                        <a href="{{route('admin.students.show',$recovery->student_id)}}">
                            <x-icons.eye class="w-6 h-6 text-gray-400"/>
                        </a>
                    </x-common.table.cell>

                </x-common.table.row>
            @empty
                <x-common.table.row>
                    <x-common.table.cell colspan="9">
                        No data found
                    </x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>

    <div class="mt-4">
        {{$recoveries->links()}}
    </div>
</div>
