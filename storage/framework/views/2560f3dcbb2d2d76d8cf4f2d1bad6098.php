<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label'=>'',
    'name'=>'',
    'error'=>'',
    'type'=>null,
    'is_disabled'=>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label'=>'',
    'name'=>'',
    'error'=>'',
    'type'=>null,
    'is_disabled'=>false,
]); ?>
<?php foreach (array_filter(([
    'label'=>'',
    'name'=>'',
    'error'=>'',
    'type'=>null,
    'is_disabled'=>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php if($is_disabled): ?>
    <input <?php echo e($attributes); ?> type="<?php echo e($type? $type:'text'); ?>" name="<?php echo e($name); ?>" id="<?php echo e($label); ?>"
           autocomplete="<?php echo e($label); ?>" class="mt-1 block w-full
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  ">
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>
<?php else: ?>
    <input <?php echo e($attributes); ?> type="<?php echo e($type? $type:'text'); ?>" name="<?php echo e($name); ?>" id="<?php echo e($label); ?>"
           autocomplete="<?php echo e($label); ?>" class="mt-1 block w-full disabled:cursor-not-allowed disabled:bg-gray-200
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50  text-red-900 placeholder-red-300 focus:border-red-500
 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  ">
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->

<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/common/data-input-text.blade.php ENDPATH**/ ?>