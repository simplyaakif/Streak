<div>
    <div class="mb-4">
        <x-button.primary wire:click="$set('showModal',true)">Create Employee</x-button.primary>
    </div>
    {{$this->table}}


    <div>
        <form wire:submit.prevent="submit">
            <x-modal.dialog wire:model="showModal">
                <x-slot name="title">Create Employee</x-slot>
                <x-slot name="content">
                    <div class="grid-cols-3 grid gap-2">
                        <div>
                            <label for="">Name</label>
                            <x-common.data-input-text error="employee.name" wire:model.defer="employee.name"/>
                        </div>
                        <div>
                            <label for="">Father Name</label>
                            <x-common.data-input-text error="employee.father_name" wire:model.defer="employee.father_name"/>
                        </div>

                        <div>
                            <label for="">Gender</label>
                            <x-common.data-input-select error="employee.gender" wire:model.defer="employee.gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </x-common.data-input-select>
                        </div>

                        <div>
                            <label for="">Mobile</label>
                            <x-common.data-input-text error="employee.mobile" wire:model.defer="employee.mobile"/>
                        </div>

                        <div>
                            <label for="">Email</label>
                            <x-common.data-input-text type="email"
                                                      error="employee.email" wire:model.defer="employee.email"/>
                        </div>

                        <div>
                            <label for="">Date of Birth</label>
                            <x-common.data-input-text type="date" error="employee.date_of_birth"
                                                      wire:model.defer="employee.date_of_birth"/>
                        </div>

                        <div class="col-span-3">
                            <label for="">Address</label>
                            <x-common.data-textarea error="employee.address" wire:model.defer="employee.address">
                            </x-common.data-textarea>
                        </div>
                        <div>
                            <label for="">Designation</label>
                            <x-common.data-input-select error="employee.designation"
                                                        wire:model.defer="employee.designation">
                                @foreach(App\Models\Employee::DESIGNATION as $value => $label)
                                    <option value="{{$value}}">{{$label}}</option>
                                @endforeach
                            </x-common.data-input-select>
                        </div>
                        <div>
                            <label for="">Role</label>
                            <x-common.data-input-select error="role" wire:model.defer="role">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->title}}</option>
                                @endforeach
                            </x-common.data-input-select>
                        </div>
                        <div>
                            <label for="">Base Salary</label>
                            <x-common.data-input-text type="number" error="employee.salary_amount"
                                                      wire:model.defer="employee.salary_amount"/>
                        </div>

                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                    <x-button.primary type="submit">Submit</x-button.primary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
</div>
