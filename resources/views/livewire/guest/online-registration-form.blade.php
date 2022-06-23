<div class="min-h-screen flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <x-logo-ace class="w-24 h-24"/>
                <h2 class=" text-3xl font-extrabold text-indigo-600">Register Online</h2>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <form wire:submit.prevent="register">
                        {{ $this->form }}

                        <button type="submit" class="bg-indigo-600 text-white rounded px-4 py-2 mt-4">
                            Submit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1 h-fixed">
        <img class="absolute inset-0 h-full w-full object-cover" src="https://picsum.photos/1080/1080" alt="">
{{--        <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('images/937-1080x1080.jpg')}}" alt="">--}}
    </div>
</div>


