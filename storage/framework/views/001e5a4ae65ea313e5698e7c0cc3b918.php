<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'route'=>'#',
    'can'=>'',
    'label'=>''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'route'=>'#',
    'can'=>'',
    'label'=>''
]); ?>
<?php foreach (array_filter(([
    'route'=>'#',
    'can'=>'',
    'label'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($can === ''): ?>
    <?php if(Request::fullUrl()=== $route): ?>
        <a href="<?php echo e($route); ?>" class="bg-cyan-800 text-white group flex items-center px-2 py-2 text-base lg:text-sm
        leading-6 font-medium
rounded-md" x-state:on="Current" x-state:off="Default" aria-current="page"
           x-state-description="Current: &quot;bg-cyan-800 text-white&quot;, Default: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
            <?php echo e($slot); ?>

            <?php echo e($label); ?>

        </a>

    <?php else: ?>
        <a href="<?php echo e($route); ?>"
           class="text-cyan-100 hover:text-white hover:bg-cyan-600 group flex items-center px-2 py-2 text-base lg:text-sm leading-6 font-medium rounded-md"
           x-state-description="undefined: &quot;bg-cyan-800 text-white&quot;, undefined: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
            <?php echo e($slot); ?>

            <?php echo e($label); ?>

        </a>
    <?php endif; ?>
<?php else: ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($can)): ?>
        <?php if(Request::fullUrl()=== $route): ?>
            <a href="<?php echo e($route); ?>" class="bg-cyan-800 text-white group flex items-center px-2 py-2 text-base lg:text-sm leading-6 font-medium
rounded-md" x-state:on="Current" x-state:off="Default" aria-current="page"
               x-state-description="Current: &quot;bg-cyan-800 text-white&quot;, Default: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
                <?php echo e($slot); ?>

                <?php echo e($label); ?>

            </a>

        <?php else: ?>
            <a href="<?php echo e($route); ?>"
               class="text-cyan-100 hover:text-white hover:bg-cyan-600 group flex items-center px-2 py-2 text-base lg:text-sm leading-6 font-medium rounded-md"
               x-state-description="undefined: &quot;bg-cyan-800 text-white&quot;, undefined: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
                <?php echo e($slot); ?>

                <?php echo e($label); ?>

            </a>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/admin/sidebar-nv-item.blade.php ENDPATH**/ ?>