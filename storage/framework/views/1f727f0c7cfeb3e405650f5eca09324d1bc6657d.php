<?php $attributes = $attributes->exceptProps([
    'tab'=>'',
]); ?>
<?php foreach (array_filter(([
    'tab'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a :class="{ 'border-cyan-500 border-b-2 text-gray-900': tab === '<?php echo e($tab); ?>' }"
   @click.prevent="tab = '<?php echo e($tab); ?>'; window.location.hash = '<?php echo e($tab); ?>'" href="#"
   class=" text-gray-500 whitespace-nowrap py-4 px-1
                        font-medium text-sm" x-state:on="Current" x-state:off="Default" aria-current="page"
   x-state-description="Current: &quot;border-cyan-500 text-gray-900&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
    <?php echo e($slot); ?>

</a>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/components/tab.blade.php ENDPATH**/ ?>