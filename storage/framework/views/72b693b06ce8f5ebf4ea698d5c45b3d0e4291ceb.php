<?php $attributes = $attributes->exceptProps([
    'tab'=>''
]); ?>
<?php foreach (array_filter(([
    'tab'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-show="tab === '<?php echo e($tab); ?>'">
    <?php echo e($slot); ?>

</div>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/components/tab-details.blade.php ENDPATH**/ ?>