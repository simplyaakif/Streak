<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group <?php echo e($errors->has('taskTag.name') ? 'invalid' : ''); ?>">
        <label class="form-label required" for="name"><?php echo e(trans('cruds.taskTag.fields.name')); ?></label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="taskTag.name">
        <div class="validation-message">
            <?php echo e($errors->first('taskTag.name')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.taskTag.fields.name_helper')); ?>

        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            <?php echo e(trans('global.save')); ?>

        </button>
        <a href="<?php echo e(route('admin.task-tags.index')); ?>" class="btn btn-secondary">
            <?php echo e(trans('global.cancel')); ?>

        </a>
    </div>
</form><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/task-tag/create.blade.php ENDPATH**/ ?>