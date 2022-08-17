<?php foreach($attributes->onlyProps([
    'label'=>'',
    'route'=>'',
    'can'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label'=>'',
    'route'=>'',
    'can'=>'',
]); ?>
<?php foreach (array_filter(([
    'label'=>'',
    'route'=>'',
    'can'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($can===''): ?>
    <?php if(Request::fullUrl()=== $route): ?>
        <a href="<?php echo e($route); ?>"
           class="group w-full  text-cyan-200 flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
            <?php echo e($label); ?>

        </a>
    <?php else: ?>
        <a href="<?php echo e($route); ?>"
           class="group w-full text-white flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
            <?php echo e($label); ?>

        </a>

    <?php endif; ?>
<?php else: ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($can)): ?>
        <?php if(Request::fullUrl()=== $route): ?>
            <a href="<?php echo e($route); ?>"
               class="group w-full  text-cyan-200 flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
                <?php echo e($label); ?>

            </a>
        <?php else: ?>
            <a href="<?php echo e($route); ?>"
               class="group w-full text-white flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
                <?php echo e($label); ?>

            </a>

        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<?php /**PATH F:\Aakif Work\Systems Developments\streakz\resources\views/components/admin/sidebar-dd-nav-subitem.blade.php ENDPATH**/ ?>