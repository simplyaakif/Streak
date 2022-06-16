<?php $attributes = $attributes->exceptProps([
    'label'=>'',
    'name'=>''
]); ?>
<?php foreach (array_filter(([
    'label'=>'',
    'name'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <label class="form-label required" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <?php echo e($slot); ?>

</div>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/shared/form/input-wrapper.blade.php ENDPATH**/ ?>