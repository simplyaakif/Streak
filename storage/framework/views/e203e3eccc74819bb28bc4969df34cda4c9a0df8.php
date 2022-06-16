<div>
    <?php if(isset($jsPath)): ?>
        <script><?php echo file_get_contents($jsPath); ?></script>
    <?php endif; ?>
    <?php if(isset($cssPath)): ?>
        <style><?php echo file_get_contents($cssPath); ?></style>
    <?php endif; ?>

    <div x-data="LivewireUISpotlight({ componentId: '<?php echo e($this->id); ?>', placeholder: '<?php echo e(trans('livewire-ui-spotlight::spotlight.placeholder')); ?>', commands: <?php echo e($commands); ?> })"
         x-init="init()"
         x-show="isOpen"
         x-cloak
         <?php $__currentLoopData = config('livewire-ui-spotlight.shortcuts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            @keydown.window.prevent.cmd.<?php echo e($key); ?>="toggleOpen()"
            @keydown.window.prevent.ctrl.<?php echo e($key); ?>="toggleOpen()"
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         @keydown.window.escape="isOpen = false"
         @toggle-spotlight.window="toggleOpen()"
         class="fixed z-50 px-4 pt-16 flex items-start justify-center inset-0 sm:pt-24">
        <div x-show="isOpen" @click="isOpen = false" x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-150"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
        </div>

        <div x-show="isOpen" x-transition:enter="ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative bg-gray-900 rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
            <div class="relative">
                <div class="absolute h-full right-5 flex items-center">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" wire:loading.delay>
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                <input @keydown.tab.prevent="" @keydown.prevent.stop.enter="go()" @keydown.prevent.arrow-up="selectUp()"
                       @keydown.prevent.arrow-down="selectDown()" x-ref="input" x-model="input"
                       type="text"
                       style="caret-color: #6b7280; border: 0 !important;"
                       class="appearance-none w-full bg-transparent px-6 py-4 text-gray-300 text-lg placeholder-gray-500 focus:border-0 focus:border-transparent focus:shadow-none outline-none focus:outline-none"
                       x-bind:placeholder="inputPlaceholder">
            </div>
            <div class="border-t border-gray-800" x-show="filteredItems().length > 0" style="display: none;">
                <ul x-ref="results" style="max-height: 265px;" class="overflow-y-auto">
                    <template x-for="(item, i) in filteredItems()" :key>
                        <li>
                            <button @click="go(item[0].item.id)" class="block w-full px-6 py-3 text-left"
                                    :class="{ 'bg-gray-700': selected === i, 'hover:bg-gray-800': selected !== i }">
                                <span x-text="item[0].item.name"
                                      :class="{'text-gray-300': selected !== i, 'text-white': selected === i }"></span>
                                <span x-text="item[0].item.description" class="ml-1"
                                      :class="{'text-gray-500': selected !== i, 'text-gray-400': selected === i }"></span>
                            </button>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/vendor/livewire-ui-spotlight/spotlight.blade.php ENDPATH**/ ?>