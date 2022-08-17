<?php foreach($attributes->onlyProps([
    'first'=>'',
    'border'=>''
    ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'first'=>'',
    'border'=>''
    ]); ?>
<?php foreach (array_filter(([
    'first'=>'',
    'border'=>''
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-data="{tab: window.location.hash ? window.location.hash.substring(1) : '<?php echo e($first); ?>'}">

    <!-- Tabs -->
    <div class="mt-6 sm:mt-2 2xl:mt-5">
        <div class="<?php echo e($border); ?>">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                    <?php echo e($tabs); ?>


                </nav>
            </div>
        </div>
    </div>

    <!-- Description list -->
    <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php echo e($details); ?>

    </div>
</div>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/tabs.blade.php ENDPATH**/ ?>