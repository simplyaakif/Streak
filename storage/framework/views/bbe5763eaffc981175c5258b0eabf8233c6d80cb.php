<?php $attributes = $attributes->exceptProps([
    'label'=>'',
    'stat'=>'',
    'icon'=>'',
    'route'=>'',
    'sublabel'=>'',
    'route_label'=>'View All',
    'can'=>''

]); ?>
<?php foreach (array_filter(([
    'label'=>'',
    'stat'=>'',
    'icon'=>'',
    'route'=>'',
    'sublabel'=>'',
    'route_label'=>'View All',
    'can'=>''

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($can)): ?>
<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
             <?php echo e($icon); ?>

            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-600 truncate">
                        <?php echo e($label); ?>

                    </dt>
                    <dt class="text-xs font-medium text-gray-500 truncate">
                        <?php echo e($sublabel); ?>

                    </dt>
                    <dd>
                        <div class="text-lg font-medium text-gray-900">
                            <?php echo e($stat); ?>

                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-5 py-3">
        <div class="text-sm">
            <a href="<?php echo e($route); ?>" class="font-medium text-cyan-700 hover:text-cyan-900">
                <?php echo e($route_label); ?>

            </a>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/common/stat-card.blade.php ENDPATH**/ ?>