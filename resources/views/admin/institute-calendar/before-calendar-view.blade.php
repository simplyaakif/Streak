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

    <div>
        <x-modal.dialog wire:model="viewModal">
            <x-slot name="title">Event Details</x-slot>
            <x-slot name="content">
                <table>
                    <tbody>
                    <tr>
                        <td class="px-2">Title</td>
                        <td class="px-2">{{$event['title']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2">Short Description</td>
                        <td class="px-2">{{$event['short_description']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2">Date & Time</td>
                        <td class="px-2">{{Carbon\Carbon::parse($event['event_date'])->format('h:i a l d-F-Y')}}</td>
                    </tr>
                    <tr>
                        <td class="px-2">Details</td>
                        <td class="px-2">{{$event['long_description']}}</td>
                    </tr>
                    </tbody>
                </table>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('viewModal',false)">Cancel</x-button.secondary>
            </x-slot>
        </x-modal.dialog>
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
