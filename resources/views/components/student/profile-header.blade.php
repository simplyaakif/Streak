<!-- This example requires Tailwind CSS v2.0+ -->
<div class="md:flex md:items-center md:justify-between md:space-x-5">
    <div class="flex items-start space-x-5">
        <div class="flex-shrink-0">
            <div class="relative">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
            </div>
        </div>
        <!--
          Use vertical padding to simulate center alignment when both lines of text are one line,
          but preserve the same layout if the text wraps without making the image jump around.
        -->
        <div class="pt-1.5">
            <h1 class="text-2xl font-bold text-gray-900">{{Auth::user()->name}}</h1>
            <p class="text-sm font-medium text-gray-500">Admitted on <time>{{Auth::user()
            ->created_at->format('d F Y')}}</time></p>
        </div>
    </div>
    <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
            Profile
        </button>
        <x-button.primary>
            Register Course
        </x-button.primary>
    </div>
</div>
