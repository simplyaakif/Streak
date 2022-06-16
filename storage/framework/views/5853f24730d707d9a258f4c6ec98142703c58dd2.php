<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                <?php $__currentLoopData = $paginationOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_delete')): ?>
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" <?php echo e($this->selectedCount ? '' : 'disabled'); ?>>
                    <?php echo e(__('Delete Selected')); ?>

                </button>
            <?php endif; ?>

            <?php if(file_exists(app_path('Http/Livewire/ExcelExport.php'))): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'csv'])->html();
} elseif ($_instance->childHasBeenRendered('l2154435410-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2154435410-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2154435410-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2154435410-0');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'csv']);
    $html = $response->html();
    $_instance->logRenderedChild('l2154435410-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'xlsx'])->html();
} elseif ($_instance->childHasBeenRendered('l2154435410-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2154435410-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2154435410-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2154435410-1');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'xlsx']);
    $html = $response->html();
    $_instance->logRenderedChild('l2154435410-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'pdf'])->html();
} elseif ($_instance->childHasBeenRendered('l2154435410-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2154435410-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2154435410-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2154435410-2');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'TaskTag','format' => 'pdf']);
    $html = $response->html();
    $_instance->logRenderedChild('l2154435410-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            <?php echo e(trans('cruds.taskTag.fields.id')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.taskTag.fields.name')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $taskTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taskTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <input type="checkbox" value="<?php echo e($taskTag->id); ?>" wire:model="selected">
                            </td>
                            <td>
                                <?php echo e($taskTag->id); ?>

                            </td>
                            <td>
                                <?php echo e($taskTag->name); ?>

                            </td>
                            <td>
                                <div class="flex justify-end">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_show')): ?>
                                        <a class="btn btn-sm btn-info mr-2" href="<?php echo e(route('admin.task-tags.show', $taskTag)); ?>">
                                            <?php echo e(trans('global.view')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_edit')): ?>
                                        <a class="btn btn-sm btn-success mr-2" href="<?php echo e(route('admin.task-tags.edit', $taskTag)); ?>">
                                            <?php echo e(trans('global.edit')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_delete')): ?>
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', <?php echo e($taskTag->id); ?>)" wire:loading.attr="disabled">
                                            <?php echo e(trans('global.delete')); ?>

                                        </button>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <?php if($this->selectedCount): ?>
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        <?php echo e($this->selectedCount); ?>

                    </span>
                    <?php echo e(__('Entries selected')); ?>

                </p>
            <?php endif; ?>
            <?php echo e($taskTags->links()); ?>

        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("<?php echo e(trans('global.areYouSure')); ?>")) {
        return
    }
window.livewire.find('<?php echo e($_instance->id); ?>')[e.callback](...e.argv)
})
    </script>
<?php $__env->stopPush(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/task-tag/index.blade.php ENDPATH**/ ?>