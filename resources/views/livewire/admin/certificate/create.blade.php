<div>
    <div>
        <x-button.primary wire:click="$set('showModal',true)">Generate Certificate</x-button.primary>
    </div>
    <div>
        <form wire:submit.prevent="submit()">
            <x-modal.dialog wire:model="showModal">
                <x-slot name="title">Generate Certificate</x-slot>
                <x-slot name="content">
                    <label for="">
                        Name
                        <x-common.data-input-text disabled wire:model="student.name"/>
                    </label>
                    <label for="">
                        Father Name
                        <x-common.data-input-text disabled wire:model="student.father_name"/>
                    </label>
                    <label for="">
                        Course
                        <x-common.data-input-text disabled wire:model="course.title"/>
                    </label>
                    <label for="">
                        Course Duration
                        <x-common.data-input-text disabled wire:model="course.duration"/>
                    </label>
                    <label for="">
                        Grade
                        <x-common.data-input-select wire:model="certificate.grade">
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="C-">C-</option>
                            <option value=" ">Empty</option>
                        </x-common.data-input-select>
                    </label>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                    <x-button.primary type="submit">Submit</x-button.primary>
                </x-slot>
            </x-modal.dialog>
        </form>

    </div>
</div>
