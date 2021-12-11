<div>

<div class="flex justify-between items-center mb-4">
    <div>
        <div class="items-center space-x-2">
            <h2 class="inline-block font-bold text-xl text-cyan-600">{{$this->startsAt->format('F Y')}}</h2>
            @can('institute_calendar_create')
            <x-button.primary wire:click="showModal()">
                <x-icons.edit class="w-4 h-4 text-white"/>
            </x-button.primary>
            @endcan
        </div>
    </div>
    <div>
        <x-button.secondary wire:click="goToPreviousMonth()">Previous</x-button.secondary>
        <x-button.secondary wire:click="goToNextMonth()">Next</x-button.secondary>
    </div>
</div>

    <form wire:submit.prevent="submit()">
        <x-modal.dialog wire:model="showModal">
            <x-slot name="title">
                Add Event
            </x-slot>
            <x-slot name="content">
                <label for="">
                    Title
                    <x-common.data-input-text wire:model.defer="event.title"/>
                </label>
                <label for="">
                    Short Description
                    <x-common.data-input-text wire:model.defer="event.short_description"/>
                </label>

                <label for="">
                    Event Date
                    <x-common.data-input-text wire:model.defer="event.event_date" type="datetime-local"/>
                </label>

                <label for="">
                    Long Description
                    <x-common.data-textarea wire:model.defer="event.long_description" rows="10"/>
                </label>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Submit</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

</div>
