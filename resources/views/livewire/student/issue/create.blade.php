<div>
    <x-button.primary wire:click="$toggle('showCreateModal')">Request Support</x-button.primary>
    <form wire:submit.prevent="submit">
        <x-modal.dialog wire:model="showCreateModal">
            <x-slot name="title">
                Request Support by Filling the form below
            </x-slot>
            <x-slot name="content">
                <label for="">Issue Subject</label>
                <x-common.data-input-text
                    error="issue.title"
                    wire:model="issue.title"/>
                <label for="">Issue Type</label>
                <x-common.data-input-select
                    error="issue.type"
                    wire:model.defer="issue.type">
                    <option value="">-- Select Option --</option>
                    @forelse(App\Models\Issue::TYPES as $key => $type)
                        <option value="{{$key}}">{{$type}}</option>
                    @empty
                    @endforelse
                </x-common.data-input-select>

                <label for="" class="mt-4 block">Message</label>
                <x-common.data-textarea
                    cols="30" rows="10"
                    error="reply.message"
                    wire:model.defer="reply.message"
                    placeholder="Kindly describe your Issue, Complaint, Request"
                ></x-common.data-textarea>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary type="button" wire:click="$set('showCreateModal',false)">Cancel</x-button.secondary>
                <x-button.primary type="submit">Submit</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

    <div>

    </div>
</div>
