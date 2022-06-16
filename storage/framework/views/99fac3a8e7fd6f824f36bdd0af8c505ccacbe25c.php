<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group <?php echo e($errors->has('task.name') ? 'invalid' : ''); ?>">
        <label class="form-label required" for="name"><?php echo e(trans('cruds.task.fields.name')); ?></label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="task.name">
        <div class="validation-message">
            <?php echo e($errors->first('task.name')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.name_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('task.description') ? 'invalid' : ''); ?>">
        <label class="form-label" for="description"><?php echo e(trans('cruds.task.fields.description')); ?></label>
        <textarea class="form-control" name="description" id="description" wire:model.defer="task.description" rows="4"></textarea>
        <div class="validation-message">
            <?php echo e($errors->first('task.description')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.description_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('task.status_id') ? 'invalid' : ''); ?>">
        <label class="form-label required" for="status"><?php echo e(trans('cruds.task.fields.status')); ?></label>
        <?php if (isset($component)) { $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SelectList::class, ['options' => $this->listsForFields['status']]); ?>
<?php $component->withName('select-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','required' => true,'id' => 'status','name' => 'status','wire:model' => 'task.status_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa)): ?>
<?php $component = $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa; ?>
<?php unset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa); ?>
<?php endif; ?>
        <div class="validation-message">
            <?php echo e($errors->first('task.status_id')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.status_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('tag') ? 'invalid' : ''); ?>">
        <label class="form-label" for="tag"><?php echo e(trans('cruds.task.fields.tag')); ?></label>
        <?php if (isset($component)) { $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SelectList::class, ['options' => $this->listsForFields['tag']]); ?>
<?php $component->withName('select-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','id' => 'tag','name' => 'tag','wire:model' => 'tag','multiple' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa)): ?>
<?php $component = $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa; ?>
<?php unset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa); ?>
<?php endif; ?>
        <div class="validation-message">
            <?php echo e($errors->first('tag')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.tag_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('mediaCollections.task_attachment') ? 'invalid' : ''); ?>">
        <label class="form-label" for="attachment"><?php echo e(trans('cruds.task.fields.attachment')); ?></label>
        <?php if (isset($component)) { $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropzone::class, []); ?>
<?php $component->withName('dropzone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'attachment','name' => 'attachment','action' => ''.e(route('admin.tasks.storeMedia')).'','collection-name' => 'task_attachment','max-file-size' => '2','max-files' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c)): ?>
<?php $component = $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c; ?>
<?php unset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c); ?>
<?php endif; ?>
        <div class="validation-message">
            <?php echo e($errors->first('mediaCollections.task_attachment')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.attachment_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('task.due_date') ? 'invalid' : ''); ?>">
        <label class="form-label" for="due_date"><?php echo e(trans('cruds.task.fields.due_date')); ?></label>
        <?php if (isset($component)) { $__componentOriginalc283341bd5f6813b75d3c491ef36f7ead65b42a8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DatePicker::class, []); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','wire:model' => 'task.due_date','id' => 'due_date','name' => 'due_date','picker' => 'date']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc283341bd5f6813b75d3c491ef36f7ead65b42a8)): ?>
<?php $component = $__componentOriginalc283341bd5f6813b75d3c491ef36f7ead65b42a8; ?>
<?php unset($__componentOriginalc283341bd5f6813b75d3c491ef36f7ead65b42a8); ?>
<?php endif; ?>
        <div class="validation-message">
            <?php echo e($errors->first('task.due_date')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.due_date_helper')); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('task.assigned_to_id') ? 'invalid' : ''); ?>">
        <label class="form-label" for="assigned_to"><?php echo e(trans('cruds.task.fields.assigned_to')); ?></label>
        <?php if (isset($component)) { $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SelectList::class, ['options' => $this->listsForFields['assigned_to']]); ?>
<?php $component->withName('select-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','id' => 'assigned_to','name' => 'assigned_to','wire:model' => 'task.assigned_to_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa)): ?>
<?php $component = $__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa; ?>
<?php unset($__componentOriginal27a1460291975da05a1f6dc019a28acd246e95fa); ?>
<?php endif; ?>
        <div class="validation-message">
            <?php echo e($errors->first('task.assigned_to_id')); ?>

        </div>
        <div class="help-block">
            <?php echo e(trans('cruds.task.fields.assigned_to_helper')); ?>

        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            <?php echo e(trans('global.save')); ?>

        </button>
        <a href="<?php echo e(route('admin.tasks.index')); ?>" class="btn btn-secondary">
            <?php echo e(trans('global.cancel')); ?>

        </a>
    </div>
</form><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/task/create.blade.php ENDPATH**/ ?>