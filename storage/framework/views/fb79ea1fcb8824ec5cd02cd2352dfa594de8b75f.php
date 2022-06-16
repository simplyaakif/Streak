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

<?php if($is_disabled): ?>
    <textarea <?php echo e($attributes); ?>  name="<?php echo e($name); ?>" id="$label"
            class="mt-1 block w-full
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  "><?php echo e($slot); ?></textarea>
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>
<?php else: ?>
    <textarea <?php echo e($attributes); ?>  name="<?php echo e($name); ?>" id="$label"
            class="mt-1 block w-full disabled:cursor-not-allowed disabled:bg-gray-200
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50  text-red-900 placeholder-red-300 focus:border-red-500
 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  "><?php echo e($slot); ?></textarea>
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>
<?php endif; ?>

<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/components/common/data-textarea.blade.php ENDPATH**/ ?>