<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title'=>'',
    'subtitle'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title'=>'',
    'subtitle'=>'',
]); ?>
<?php foreach (array_filter(([
    'title'=>'',
    'subtitle'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>

<h1 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
    <?php echo e($title); ?>

</h1>
<p class="text-sm text-gray-500"><?php echo e($subtitle); ?></p>
</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/common/ph-section-header.blade.php ENDPATH**/ ?>