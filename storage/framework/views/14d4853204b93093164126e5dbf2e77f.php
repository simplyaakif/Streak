<?php $__env->startSection('content'); ?>
<div class="row">

    <?php if (isset($component)) { $__componentOriginal0f9af6d1889a85773e85c08cf893c74e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f9af6d1889a85773e85c08cf893c74e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.page-body','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.page-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('query-table', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1957304139-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f9af6d1889a85773e85c08cf893c74e)): ?>
<?php $attributes = $__attributesOriginal0f9af6d1889a85773e85c08cf893c74e; ?>
<?php unset($__attributesOriginal0f9af6d1889a85773e85c08cf893c74e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f9af6d1889a85773e85c08cf893c74e)): ?>
<?php $component = $__componentOriginal0f9af6d1889a85773e85c08cf893c74e; ?>
<?php unset($__componentOriginal0f9af6d1889a85773e85c08cf893c74e); ?>
<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/query/index.blade.php ENDPATH**/ ?>