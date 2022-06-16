
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    <?php echo e(trans('global.create')); ?>

                    <?php echo e(trans('cruds.taskStatus.title_singular')); ?>

                </h6>
            </div>
        </div>

        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('task-status.create')->html();
} elseif ($_instance->childHasBeenRendered('SSJqIfX')) {
    $componentId = $_instance->getRenderedChildComponentId('SSJqIfX');
    $componentTag = $_instance->getRenderedChildComponentTagName('SSJqIfX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SSJqIfX');
} else {
    $response = \Livewire\Livewire::mount('task-status.create');
    $html = $response->html();
    $_instance->logRenderedChild('SSJqIfX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/task-status/create.blade.php ENDPATH**/ ?>