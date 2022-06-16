
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    <?php echo e(trans('global.create')); ?>

                    <?php echo e(trans('cruds.taskTag.title_singular')); ?>

                </h6>
            </div>
        </div>

        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('task-tag.create')->html();
} elseif ($_instance->childHasBeenRendered('tbfuLSD')) {
    $componentId = $_instance->getRenderedChildComponentId('tbfuLSD');
    $componentTag = $_instance->getRenderedChildComponentTagName('tbfuLSD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tbfuLSD');
} else {
    $response = \Livewire\Livewire::mount('task-tag.create');
    $html = $response->html();
    $_instance->logRenderedChild('tbfuLSD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/task-tag/create.blade.php ENDPATH**/ ?>