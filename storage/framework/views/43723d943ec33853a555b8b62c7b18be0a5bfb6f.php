
<?php $__env->startSection('content'); ?>
<div class="row">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.page-body','data' => []]); ?>
<?php $component->withName('common.page-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('query-table', [])->html();
} elseif ($_instance->childHasBeenRendered('LUdGkBp')) {
    $componentId = $_instance->getRenderedChildComponentId('LUdGkBp');
    $componentTag = $_instance->getRenderedChildComponentTagName('LUdGkBp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LUdGkBp');
} else {
    $response = \Livewire\Livewire::mount('query-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('LUdGkBp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/query/index.blade.php ENDPATH**/ ?>