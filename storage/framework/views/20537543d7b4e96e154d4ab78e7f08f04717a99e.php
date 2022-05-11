<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:loading.class="opacity-50" wire:submit.prevent="submit" class="mt-6 mb-6 space-y-8 divide-y
    divide-y-blue-gray-200">

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.name') ? 'invalid' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.student.fields.name')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.name','name' => 'name','id' => 'name','wire:model.defer' => 'student.name']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.name','name' => 'name','id' => 'name','wire:model.defer' => 'student.name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.father_name') ? 'invalid' : ''); ?>">
                <label for="father_name"><?php echo e(trans('cruds.student.fields.father_name')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.father_name','name' => 'father_name','id' => 'father_name','wire:model.defer' => 'student.father_name']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.father_name','name' => 'father_name','id' => 'father_name','wire:model.defer' => 'student.father_name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.gender') ? 'invalid' : ''); ?>">
                <label class="form-label"><?php echo e(trans('cruds.student.fields.gender')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-select','data' => ['wire:model' => 'student.gender']]); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'student.gender']); ?>
                    <option value="null" disabled><?php echo e(trans('global.pleaseSelect')); ?>...</option>
                    <?php $__currentLoopData = $this->listsForFields['gender']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="validation-message">
                    <?php echo e($errors->first('student.gender')); ?>

                </div>
                <div class="help-block">
                    <?php echo e(trans('cruds.student.fields.gender_helper')); ?>

                </div>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.nationality') ? 'invalid' : ''); ?>">
                <label class="form-label" for="nationality"><?php echo e(trans('cruds.student.fields.nationality')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.nationality','name' => 'nationality','id' => 'nationality','wire:model.defer' => 'student.nationality']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.nationality','name' => 'nationality','id' => 'nationality','wire:model.defer' => 'student.nationality']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.date_of_birth') ? 'invalid' : ''); ?>">
                <label class="form-label" for="date_of_birth"><?php echo e(trans('cruds.student.fields.date_of_birth')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.date_of_birth','type' => 'date','wire:model' => 'student.date_of_birth','id' => 'date_of_birth','name' => 'date_of_birth']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.date_of_birth','type' => 'date','wire:model' => 'student.date_of_birth','id' => 'date_of_birth','name' => 'date_of_birth']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="col-span-3 form-group <?php echo e($errors->has('student.cnic_passport') ? 'invalid' : ''); ?>">
                <label class="form-label" for="cnic_passport"><?php echo e(trans('cruds.student.fields.cnic_passport')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.cnic_passport','name' => 'cnic_passport','id' => 'cnic_passport','wire:model.defer' => 'student.cnic_passport']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.cnic_passport','name' => 'cnic_passport','id' => 'cnic_passport','wire:model.defer' => 'student.cnic_passport']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Contact Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>
            <div class="col-span-3 form-group <?php echo e($errors->has('student.mobile') ? 'invalid' : ''); ?>">
                <label class="form-label" for="mobile"><?php echo e(trans('cruds.student.fields.mobile')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['placeholder' => '03335335792','error' => 'student.mobile','name' => 'mobile','id' => 'mobile','wire:model.defer' => 'student.mobile']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['placeholder' => '03335335792','error' => 'student.mobile','name' => 'mobile','id' => 'mobile','wire:model.defer' => 'student.mobile']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="col-span-3 form-group <?php echo e($errors->has('student.email') ? 'invalid' : ''); ?>">
                <label class="form-label" for="email"><?php echo e(trans('cruds.student.fields.email')); ?></label>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['error' => 'student.email','name' => 'email','id' => 'email','wire:model.defer' => 'student.email']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'student.email','name' => 'email','id' => 'email','wire:model.defer' => 'student.email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">File Uploads</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Profile Pic Admission Form, Application form & Other form
                    snapshots.</p>
            </div>

            <div class="sm:col-span-3">
                <div class="form-group <?php echo e($errors->has('mediaCollections.student_dp') ? 'invalid' : ''); ?>">
                    <label class="form-label" for="dp">Student Picture</label>
                    <?php if (isset($component)) { $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropzone::class, []); ?>
<?php $component->withName('dropzone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'dp','name' => 'dp','action' => ''.e(route('admin.students.storeMedia')).'','collection-name' => 'student_dp','max-file-size' => '2','max-width' => '4096','max-height' => '4096','max-files' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c)): ?>
<?php $component = $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c; ?>
<?php unset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c); ?>
<?php endif; ?>
                    <div class="validation-message">
                        <?php echo e($errors->first('mediaCollections.student_dp')); ?>

                    </div>
                    <div class="help-block">
                        <?php echo e(trans('cruds.student.fields.dp_helper')); ?>

                    </div>
                </div>
            </div>
            <div
                class="sm:col-span-3
                form-group <?php echo e($errors->has('mediaCollections.student_documents') ? 'invalid' :''); ?>">
                <label class="form-label" for="documents">Student Form</label>
                <?php if (isset($component)) { $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropzone::class, []); ?>
<?php $component->withName('dropzone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'documents','name' => 'documents','action' => ''.e(route('admin.students.storeMedia')).'','collection-name' => 'student_documents','max-file-size' => '2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c)): ?>
<?php $component = $__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c; ?>
<?php unset($__componentOriginal8445cfed575af5f8fe9105ababf279bed224606c); ?>
<?php endif; ?>
                <div class="validation-message">
                    <?php echo e($errors->first('mediaCollections.student_documents')); ?>

                </div>
                <div class="help-block">
                    <?php echo e(trans('cruds.student.fields.documents_helper')); ?>

                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Batch Details</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Enter the Batch & Fee details for the candidate</p>
            </div>
            <div class="sm:col-span-6 bg-white rounded-lg shadow ">
                <div class="p-4 bg-gray-50 rounded-t-lg flex items-center justify-between">
                    <div class="w-3/4">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Select Batch','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Select Batch','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-select','data' => ['error' => 'selectedBatches','wire:model' => 'selectBoxBatchId']]); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => 'selectedBatches','wire:model' => 'selectBoxBatchId']); ?>
                            <option value=""> -- Select Batch --</option>
                            <?php $__empty_1 = true; $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($batch->id); ?>"><?php echo e($batch->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option value="" disabled>No Batch Found</option>
                            <?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <button class="btn btn-indigo" type="button" wire:click="addBatch()">Add Batch</button>
                </div>
                <div class="py-8 px-4">
                    <div class="divide-y ">
                        <?php $__empty_1 = true; $__currentLoopData = $selectedBatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$individualBatch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div wire:key="batch-<?php echo e($key); ?>" class="pt-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <?php echo e($loop->iteration); ?>. <?php echo e($individualBatch['batch']['title']); ?>

                                    </div>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.secondary','data' => ['wire:click' => 'removeBatch('.e($key).')']]); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'removeBatch('.e($key).')']); ?>
                                        Remove Batch
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>

                                <div class="grid grid-cols-3 gap-6 my-4">
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course Fee','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course Fee','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['wire:model' => 'selectedBatches.'.e($key).'.total_fee']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.total_fee']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course Start Date','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course Start Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['wire:model' => 'selectedBatches.'.e($key).'.sessions.session_start_date','type' => 'date','value' => ''.e(now()->format('Y-m-d')).'']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.sessions.session_start_date','type' => 'date','value' => ''.e(now()->format('Y-m-d')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course End Date','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course End Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['wire:model' => 'selectedBatches.'.e($key).'.sessions.session_end_date','value' => ''.e(now()->add($individualBatch['batch']['session_duration'])->format('Y-m-d')).'','type' => 'date']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.sessions.session_end_date','value' => ''.e(now()->add($individualBatch['batch']['session_duration'])->format('Y-m-d')).'','type' => 'date']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="relative">
                                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                        <div class="w-full border-t border-gray-300"></div>
                                    </div>
                                    <div class="relative flex justify-center">
                                        <span class="px-2 bg-white text-sm text-gray-500">
                                          Payment Information
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <?php $__empty_2 = true; $__currentLoopData = $individualBatch['installments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ikey=>$installment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <div>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <?php echo e($loop->iteration); ?>. Installment
                                                </div>
                                                <div>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.secondary','data' => ['class' => 'text-xs p-2','wire:click' => 'addInstallment('.e($key).')']]); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs p-2','wire:click' => 'addInstallment('.e($key).')']); ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.add','data' => ['class' => 'w-3 h-3 text-gray-700']]); ?>
<?php $component->withName('icons.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.secondary','data' => ['wire:click' => 'removeInstallment('.e($key).','.e($ikey).')','class' => 'text-xs p-2']]); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'removeInstallment('.e($key).','.e($ikey).')','class' => 'text-xs p-2']); ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.minus','data' => ['class' => 'w-3 h-3 text-gray-700']]); ?>
<?php $component->withName('icons.minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                        <div wire:key="batch-<?php echo e($key); ?>-installment-<?php echo e($ikey); ?>"
                                             class="grid grid-cols-6 gap-2 my-4">
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Installment Amount','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Installment Amount','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_amount']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_amount']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Due Date','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Due Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['type' => 'date','wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_due_date']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'date','wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_due_date']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Status','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Status','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-select','data' => ['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_status']]); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_status']); ?>
                                                    <option value="0">Unpaid</option>
                                                    <option value="1">Paid</option>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>

            <?php if($selectedBatches[$key]['installments'][$ikey]['installment_paid_status']): ?>

                                            <div class="col-span-2">

                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Account','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Account','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-select','data' => ['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_account_id']]); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_account_id']); ?>
                                                    <?php $__empty_3 = true; $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                                                        <option value="<?php echo e($account->id); ?>"><?php echo e($account->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                                                    <?php endif; ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>

                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Transaction/Slip #','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Transaction/Slip #','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_transaction_number']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_transaction_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                                                <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Date of Payment','for' => '']]); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Date of Payment','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['type' => 'date','wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_on']]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'date','wire:model' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_on']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                        <?php endif; ?>

                                        </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            No Batch is Selected
                        <?php endif; ?>
                    </div>

                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Send Notifications</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Notify user about all the details</p>
                <div class="divide-y divide-gray-200">
                    <div class="">
                        <ul role="list" class="mt-2 divide-y divide-gray-200">
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: <?php if ((object) ('notifications.sms') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.sms'->value()); ?>')<?php echo e('notifications.sms'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.sms'); ?>')<?php endif; ?> }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                        Send SMS
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                        Send student SMS confirmation of admission.
                                    </p>
                                </div>
                                <button type="button"
                                        class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2
                                        border-transparent rounded-full cursor-pointer transition-colors ease-in-out
                                        duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2
                                        focus:ring-sky-500 bg-cyan-500"
                                        role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-1-label"
                                        aria-describedby="privacy-option-1-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: <?php if ((object) ('notifications.email') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.email'->value()); ?>')<?php echo e('notifications.email'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.email'); ?>')<?php endif; ?> }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                        Send Email
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                        Send student Email confirmation of admission .
                                    </p>
                                </div>
                                <button type="button"
                                        class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                        role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-2-label"
                                        aria-describedby="privacy-option-2-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: <?php if ((object) ('notifications.account') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.account'->value()); ?>')<?php echo e('notifications.account'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('notifications.account'); ?>')<?php endif; ?> }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                        Create Student Login Account
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                        Send student his/her login details via Email.
                                    </p>
                                </div>
                                <button type="button"
                                        class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2
                                        border-transparent rounded-full cursor-pointer transition-colors ease-in-out
                                        duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2
                                        focus:ring-sky-500 bg-cyan-500"
                                        role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-3-label"
                                        aria-describedby="privacy-option-3-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex space-x-1">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.primary','data' => ['type' => 'submit']]); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Save <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.secondary','data' => ['href' => ''.e(route('admin.students.index')).'']]); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.students.index')).'']); ?>Cancel <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>
    </form>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.validation-alert','data' => ['errors' => $errors->all()]]); ?>
<?php $component->withName('common.validation-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->all())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/livewire/student/create.blade.php ENDPATH**/ ?>