{{--<div class="hidden lg:flex lg:flex-shrink-0">--}}
<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div x-data="{features:false}" class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center justify-between flex-shrink-0 px-4">
                <img class="h-8 w-auto"
                     src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg"
                     alt="Easywire logo">
                <div @click="features=!features">
                    <div x-show="features">
                        <x-icons.snow class="h-6 w-6 text-cyan-200"/>
                    </div>
                    <div x-show="!features">
                        <x-icons.snow class="h-6 w-6 text-cyan-600"/>
                    </div>
                </div>
            </div>
            <x-admin.menu/>
        </div>
    </div>
</div>
