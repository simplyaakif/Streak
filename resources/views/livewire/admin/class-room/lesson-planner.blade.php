<div>
    <div>
        <x-button.primary wire:click="$set('showModal',true)">Add Lesson Planner</x-button.primary>
    </div>
    <div>
        <form wire:submit.prevent="submit">
            <x-modal.dialog wire:model="showModal">
                <x-slot name="title">Add Lesson Plan</x-slot>
                <x-slot name="content">
                    <label for="">
                        Title
                        <x-common.data-input-text error="lesson.title" wire:model.defer="lesson.title"/>
                    </label>
                    <label for="">
                        Topics
                        <x-common.data-input-text error="lesson.short_description"
                                                  wire:model.defer="lesson.short_description"/>
                    </label>
                    <label for="">
                        Date
                        <x-common.data-input-text error="lesson.date"  type="date" wire:model="lesson.date"/>
                    </label>
                    <label for="">
                        Description
                        <x-common.data-textarea error="lesson.long_description"
                                                rows="10"
                                                wire:model.defer="lesson.long_description"></x-common.data-textarea>
                    </label>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                    <x-button.primary type="submit">Submit</x-button.primary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
    <div class="mt-4">
        <x-common.table>
            <x-slot name="head">
                <x-common.table.heading>Sr #</x-common.table.heading>
                <x-common.table.heading>Title</x-common.table.heading>
                <x-common.table.heading>Topics</x-common.table.heading>
                <x-common.table.heading>Added By</x-common.table.heading>
                <x-common.table.heading>Date</x-common.table.heading>
                <x-common.table.heading>Actions</x-common.table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($lessons as $lesson)
                    <x-common.table.row>
                        <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                        <x-common.table.cell>{{$lesson->title}}</x-common.table.cell>
                        <x-common.table.cell>{{$lesson->short_description}}</x-common.table.cell>
                        <x-common.table.cell>{{$lesson->user->name}}</x-common.table.cell>
                        <x-common.table.cell>{{$lesson->date}}</x-common.table.cell>
                        <x-common.table.cell>
                            <div class="flex space-x-2">
                                @can('lesson.show')
                                    <x-icons.eye class="w-4 h-4 text-gray-400"/>
                                @endcan
                                @can('lesson.edit')
                                    <x-icons.edit class="w-4 h-4 text-gray-400"/>
                                @endcan
                                @can('lesson.delete')
                                    <x-icons.trash class="w-4 h-4 text-gray-400"/>
                                @endcan
                            </div>
                        </x-common.table.cell>
                    </x-common.table.row>
                @empty
                    <x-common.table.row>
                        <x-common.table.cell colspan="6" class="text-center text-gray-400"> No data found
                        </x-common.table.cell>
                    </x-common.table.row>
                @endforelse
            </x-slot>
        </x-common.table>
    </div>
</div>
