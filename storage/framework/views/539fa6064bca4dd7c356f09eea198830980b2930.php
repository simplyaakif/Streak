<?php $attributes = $attributes->exceptProps([
    'label'=>'',
]); ?>
<?php foreach (array_filter(([
    'label'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label <?php echo e($attributes); ?>><?php echo e($label); ?></label>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/common/data-label.blade.php ENDPATH**/ ?>