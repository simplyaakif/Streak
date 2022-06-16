<?php $attributes = $attributes->exceptProps([
    'label'=>''
]); ?>
<?php foreach (array_filter(([
    'label'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="rounded-lg  shadow">
    <div class="bg-cyan-50 rounded-t-lg flex p-2 justify-center">
        <h4 class="text-cyan-900 text-sm font-medium text-center "><?php echo e($label); ?></h4>
    </div>
    <div class="p-2 bg-white rounded-b-lg ">

        <?php echo e($slot); ?>


    </div>
</div>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/common/filter-select.blade.php ENDPATH**/ ?>