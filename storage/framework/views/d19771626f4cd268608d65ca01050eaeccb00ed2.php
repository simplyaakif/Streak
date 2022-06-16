<?php $attributes = $attributes->exceptProps([
    'title'=>'',
    'subtitle'=>null
]); ?>
<?php foreach (array_filter(([
    'title'=>'',
    'subtitle'=>null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <h2 class="text-xl font-medium text-blue-gray-900"><?php echo e($title); ?></h2>
    <?php if($subtitle): ?>
        <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
            what you share.</p>
    <?php endif; ?>
</div>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/common/form-header.blade.php ENDPATH**/ ?>