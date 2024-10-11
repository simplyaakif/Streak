<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'options'=>[],
    'is_skip_select'=>false,
    'error'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'options'=>[],
    'is_skip_select'=>false,
    'error'=>'',
]); ?>
<?php foreach (array_filter(([
    'options'=>[],
    'is_skip_select'=>false,
    'error'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!--[if BLOCK]><![endif]--><?php if($is_skip_select): ?>
    <select class="mt-1 block w-full
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  " <?php echo e($attributes); ?> >
        <option value="">Select Option</option>
        <?php echo e($slot); ?>

    </select>
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>


<?php else: ?>
    <select class="mt-1 block w-full
 <?php echo e($errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500'); ?>

        rounded-md shadow-sm  sm:text-sm  " <?php echo e($attributes); ?> >
        <?php echo e($slot); ?>

    </select>
    <p class="mt-2 text-sm text-red-600" id="email-error"><?php echo e($errors->first($error)); ?></p>

<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/common/data-input-select.blade.php ENDPATH**/ ?>