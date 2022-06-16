<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                <?php $__currentLoopData = $paginationOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" <?php echo e($this->selectedCount ? '' : 'disabled'); ?>>
                    <?php echo e(__('Delete Selected')); ?>

                </button>
            <?php endif; ?>

            <?php if(file_exists(app_path('Http/Livewire/ExcelExport.php'))): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'csv'])->html();
} elseif ($_instance->childHasBeenRendered('l1163978629-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1163978629-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1163978629-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1163978629-0');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'csv']);
    $html = $response->html();
    $_instance->logRenderedChild('l1163978629-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'xlsx'])->html();
} elseif ($_instance->childHasBeenRendered('l1163978629-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1163978629-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1163978629-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1163978629-1');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'xlsx']);
    $html = $response->html();
    $_instance->logRenderedChild('l1163978629-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'pdf'])->html();
} elseif ($_instance->childHasBeenRendered('l1163978629-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1163978629-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1163978629-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1163978629-2');
} else {
    $response = \Livewire\Livewire::mount('excel-export', ['model' => 'Task','format' => 'pdf']);
    $html = $response->html();
    $_instance->logRenderedChild('l1163978629-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                            <?php echo e(trans('cruds.task.fields.id')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.name')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.description')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.status')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'status.name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.tag')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.attachment')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.due_date')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'due_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                            <?php echo e(trans('cruds.task.fields.assigned_to')); ?>

                            <?php echo $__env->make('components.table.sort', ['field' => 'assigned_to.name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <input type="checkbox" value="<?php echo e($task->id); ?>" wire:model="selected">
                            </td>
                            <td>
                                <?php echo e($task->id); ?>

                            </td>
                            <td>
                                <?php echo e($task->name); ?>

                            </td>
                            <td>
                                <?php echo e($task->description); ?>

                            </td>
                            <td>
                                <?php if($task->status): ?>
                                    <span class="badge badge-relationship"><?php echo e($task->status->name ?? ''); ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php $__currentLoopData = $task->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-relationship"><?php echo e($entry->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php $__currentLoopData = $task->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="link-light-blue" href="<?php echo e($entry['url']); ?>">
                                        <i class="far fa-file">
                                        </i>
                                        <?php echo e($entry['file_name']); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php echo e($task->due_date); ?>

                            </td>
                            <td>
                                <?php if($task->assignedTo): ?>
                                    <span class="badge badge-relationship"><?php echo e($task->assignedTo->name ?? ''); ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_show')): ?>
                                        <a class="btn btn-sm btn-info mr-2" href="<?php echo e(route('admin.tasks.show', $task)); ?>">
                                            <?php echo e(trans('global.view')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                        <a class="btn btn-sm btn-success mr-2" href="<?php echo e(route('admin.tasks.edit', $task)); ?>">
                                            <?php echo e(trans('global.edit')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', <?php echo e($task->id); ?>)" wire:loading.attr="disabled">
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
            <?php echo e($tasks->links()); ?>

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
<?php $__env->stopPush(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/task/index.blade.php ENDPATH**/ ?>