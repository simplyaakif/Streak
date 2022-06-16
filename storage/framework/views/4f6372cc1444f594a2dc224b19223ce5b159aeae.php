
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    <?php echo e(trans('cruds.taskStatus.title_singular')); ?>

                    <?php echo e(trans('global.list')); ?>

                </h6>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_status_create')): ?>
                    <a class="btn btn-indigo" href="<?php echo e(route('admin.task-statuses.create')); ?>">
                        <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.taskStatus.title_singular')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('task-status.index')->html();
} elseif ($_instance->childHasBeenRendered('XhW2Y7W')) {
    $componentId = $_instance->getRenderedChildComponentId('XhW2Y7W');
    $componentTag = $_instance->getRenderedChildComponentTagName('XhW2Y7W');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XhW2Y7W');
} else {
    $response = \Livewire\Livewire::mount('task-status.index');
    $html = $response->html();
    $_instance->logRenderedChild('XhW2Y7W', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/task-status/index.blade.php ENDPATH**/ ?>