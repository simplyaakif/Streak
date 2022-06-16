<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group <?php echo e($errors->has('taskStatus.name') ? 'invalid' : ''); ?>">
        <label class="form-label required" for="name"><?php echo e(trans('cruds.taskStatus.fields.name')); ?></label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="taskStatus.name">
        <div class="validation-message">
            <?php echo e($errors->first('taskStatus.name')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.taskStatus.fields.name_helper')); ?>

        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            <?php echo e(trans('global.save')); ?>

        </button>
        <a href="<?php echo e(route('admin.task-statuses.index')); ?>" class="btn btn-secondary">
            <?php echo e(trans('global.cancel')); ?>

        </a>
    </div>
</form><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/task-status/create.blade.php ENDPATH**/ ?>