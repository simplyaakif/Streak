
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    <?php echo e(trans('cruds.taskTag.title_singular')); ?>

                    <?php echo e(trans('global.list')); ?>

                </h6>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_create')): ?>
                    <a class="btn btn-indigo" href="<?php echo e(route('admin.task-tags.create')); ?>">
                        <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.taskTag.title_singular')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('task-tag.index')->html();
} elseif ($_instance->childHasBeenRendered('hZ98QuX')) {
    $componentId = $_instance->getRenderedChildComponentId('hZ98QuX');
    $componentTag = $_instance->getRenderedChildComponentTagName('hZ98QuX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hZ98QuX');
} else {
    $response = \Livewire\Livewire::mount('task-tag.index');
    $html = $response->html();
    $_instance->logRenderedChild('hZ98QuX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/task-tag/index.blade.php ENDPATH**/ ?>