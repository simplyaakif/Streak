<div>
    <div class="mb-4">
        <x-button.primary wire:click="$set('showModal',true)">Add Home Work</x-button.primary>
    </div>
    <div>
        <form wire:submit.prevent="submit">
            <x-modal.dialog wire:model="showModal" max-width="3xl">
                <x-slot name="title">Add Home Task</x-slot>
                <x-slot name="content" >
                    <div>
                    {{ $this->form }}
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                    <x-button.primary type="submit">Submit</x-button.primary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
    <div>
        {{$this->table}}
    </div>
</div>
