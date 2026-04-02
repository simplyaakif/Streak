<div class="min-h-screen flex">
    @if(!$submitted)
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-[600px]">
                <div>
                    <x-logo-ace class="w-24 h-24"/>
                    <h2 class=" text-3xl font-extrabold text-cyan-600">Register Online</h2>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form wire:submit="register">
                            {{ $this->form }}

                            <button type="submit" class="bg-cyan-600 text-white rounded px-4 py-2 mt-4 flex items-center gap-2 disabled:opacity-60" wire:loading.attr="disabled">
                                <svg wire:loading wire:target="register" class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                                <span wire:loading wire:target="register">Submitting...</span>
                                <span wire:loading.remove wire:target="register">Submit</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div style="background: url('https://picsum.photos/1920/1080');background-size: cover"
             class="w-full min-h-screen">
            <div class="min-h-screen w-full relative flex justify-center items-center bg-transparent">
                <div class="bg-white min-w-4xl mx-auto opacity-75 rounded-lg">
                    <div class="py-20 px-20 text-center">
                        <h4 class="text-indigo-600 text-2xl font-bold">
                            Submitted Successfully
                        </h4>
                        Your registration has completed successfully online. Our staff will contact you in next 24 working hours.
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="hidden lg:block relative w-0 flex-1 h-fixed">
{{--        <img class="absolute inset-0 h-full w-full object-cover" src="https://picsum.photos/1080/1080" alt="">--}}
                <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('images/02.jpg')}}" alt="">
    </div>
</div>


