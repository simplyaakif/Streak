
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    <?php echo e(trans('global.create')); ?>

                    <?php echo e(trans('cruds.task.title_singular')); ?>

                </h6>
            </div>
        </div>

        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('task.create')->html();
} elseif ($_instance->childHasBeenRendered('lok0WFR')) {
    $componentId = $_instance->getRenderedChildComponentId('lok0WFR');
    $componentTag = $_instance->getRenderedChildComponentTagName('lok0WFR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lok0WFR');
} else {
    $response = \Livewire\Livewire::mount('task.create');
    $html = $response->html();
    $_instance->logRenderedChild('lok0WFR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/task/create.blade.php ENDPATH**/ ?>