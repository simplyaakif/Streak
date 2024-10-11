<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:submit="submit" class="mt-6 mb-6 space-y-8 divide-y divide-y-blue-gray-200">

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Account Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Finance account information</p>
            </div>
            <div class=" sm:col-span-3  {{ $errors->has('account.title') ? 'text-red-500' : '' }}">
                <label class="form-label required" for="mobile">Title</label>
                <x-common.data-input-text error="account.title" label="title" name="title" wire:model.live="account.title" />
                <div class="validation-message">
                    {{ $errors->first('account.title') }}
                </div>

            </div>
            <div class=" sm:col-span-3  {{ $errors->has('account.account_number') ? 'text-red-500' : '' }}">
                <label class="form-label required" for="account_number">Account Number</label>
                <x-common.data-input-text error="account.account_number" label="account_number" name="account_number"
                                          wire:model.live="account.account_number"/>
                <div class="validation-message">
                    {{ $errors->first('account.account_number') }}
                </div>

            </div>

            <div class=" sm:col-span-3  {{ $errors->has('account.oversee_by_id') ? 'text-red-500' : '' }}">
                <label class="form-label required" for="oversee_by_id">Account Operator</label>
                <x-common.data-input-select name="oversee_by_id" id="oversee_by_id" wire:model.live="account.oversee_by_id">
                    <option value="abdullah">Sir Abdullah</option>
                    <option value="aakif">Sir Aakif</option>
                    <option value="ayesha">Mam Ayesha</option>
                </x-common.data-input-select>
                <div class="validation-message">
                    {{ $errors->first('account.oversee_by_id') }}
                </div>

            </div>

            <div class=" sm:col-span-3  {{ $errors->has('account.type') ? 'text-red-500' : '' }}">
                <label class="form-label required" for="type">Account Type</label>
                <x-common.data-input-select name="type" wire:model.live="account.type">
                    <option value="cash">Cash</option>
                    <option value="bank">Bank Account</option>
                    <option value="wallet">Wallet Account</option>
                </x-common.data-input-select>
                <div class="validation-message">
                    {{ $errors->first('account.type') }}
                </div>

            </div>

            <div class=" sm:col-span-3  {{ $errors->has('account.amount') ? 'text-red-500' : '' }}">
                <label class="form-label required" for="amount">Initial Amount</label>
                <x-common.data-input-text error="account.amount" title="amount" name="amount" wire:model.live="account.amount"/>
                <div class="validation-message">
                    {{ $errors->first('account.amount') }}
                </div>

            </div>
        </div>

        <div class=" pt-8">
            <button class="btn-indigo" >
                Save
            </button>
            <a type="button" href="{{route('admin.accounts.index')}}" class="btn-secondary" >
            Cancel
            </a>
        </div>
    </form>
</div>
