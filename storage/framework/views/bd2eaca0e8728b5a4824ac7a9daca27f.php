<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'errors'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'errors'=>'',
]); ?>
<?php foreach (array_filter(([
    'errors'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-data="{ show: <?php if ((object) ('validationAlert') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('validationAlert'->value()); ?>')<?php echo e('validationAlert'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('validationAlert'); ?>')<?php endif; ?>.live }" aria-live="assertive" class="fixed inset-0 z-10 flex items-end
px-4 py-6
pointer-events-none
 sm:p-6 sm:items-start">
    <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
        <!-- Notification panel, dynamically insert this into the live region when it needs to be displayed -->

        <div x-show="show" x-transition:enter="transform ease-out duration-300 transition"
             x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
             x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="max-w-sm w-full bg-red-50 shadow-lg rounded-lg pointer-events-auto ring-1 ring-black
             ring-opacity-5 overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    <div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/x-circle -->
                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">
                                    There were <?php echo e(count($errors)); ?> errors with your submission
                                </h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <ul role="list" class="list-disc pl-5 space-y-1">
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php echo e($error); ?>

                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false;" class="rounded-md
                        inline-flex text-red-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2
                        focus:ring-red-500">
                            <span class="sr-only">Close</span>
                            <svg class="h-5 w-5" x-description="Heroicon name: solid/x" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/common/validation-alert.blade.php ENDPATH**/ ?>