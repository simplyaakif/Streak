<?php $attributes = $attributes->exceptProps([
    'route'=>'',
    'label'=>'',
]); ?>
<?php foreach (array_filter(([
    'route'=>'',
    'label'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a href="<?php echo e($route); ?>" type="button" <?php echo e($attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border
                        border-transparent
                        shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500'])); ?> >
    <?php echo e($label); ?>

</a>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/common/ph-button-primary.blade.php ENDPATH**/ ?>