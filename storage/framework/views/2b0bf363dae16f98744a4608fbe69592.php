<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:loading.class="opacity-50" wire:submit="submit" class="mt-6 mb-6 space-y-8 divide-y
    divide-y-blue-gray-200">

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.name') ? 'invalid' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.student.fields.name')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.name','name' => 'name','id' => 'name','wire:model.live' => 'student.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.name','name' => 'name','id' => 'name','wire:model.live' => 'student.name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.father_name') ? 'invalid' : ''); ?>">
                <label for="father_name"><?php echo e(trans('cruds.student.fields.father_name')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.father_name','name' => 'father_name','id' => 'father_name','wire:model' => 'student.father_name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.father_name','name' => 'father_name','id' => 'father_name','wire:model' => 'student.father_name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.gender') ? 'invalid' : ''); ?>">
                <label class="form-label"><?php echo e(trans('cruds.student.fields.gender')); ?></label>
                <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model.live' => 'student.gender']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'student.gender']); ?>
                    <option value="null" disabled><?php echo e(trans('global.pleaseSelect')); ?>...</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->listsForFields['gender']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $attributes = $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $component = $__componentOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
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
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.nationality','name' => 'nationality','id' => 'nationality','wire:model' => 'student.nationality']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.nationality','name' => 'nationality','id' => 'nationality','wire:model' => 'student.nationality']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
            </div>
            <div class="sm:col-span-3 form-group <?php echo e($errors->has('student.date_of_birth') ? 'invalid' : ''); ?>">
                <label class="form-label" for="date_of_birth"><?php echo e(trans('cruds.student.fields.date_of_birth')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.date_of_birth','type' => 'date','wire:model.live' => 'student.date_of_birth','id' => 'date_of_birth','name' => 'date_of_birth']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.date_of_birth','type' => 'date','wire:model.live' => 'student.date_of_birth','id' => 'date_of_birth','name' => 'date_of_birth']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
            </div>
            <div class="col-span-3 form-group <?php echo e($errors->has('student.cnic_passport') ? 'invalid' : ''); ?>">
                <label class="form-label" for="cnic_passport"><?php echo e(trans('cruds.student.fields.cnic_passport')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.cnic_passport','name' => 'cnic_passport','id' => 'cnic_passport','wire:model' => 'student.cnic_passport']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.cnic_passport','name' => 'cnic_passport','id' => 'cnic_passport','wire:model' => 'student.cnic_passport']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
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
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['placeholder' => '03335335792','error' => 'student.mobile','name' => 'mobile','id' => 'mobile','wire:model' => 'student.mobile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => '03335335792','error' => 'student.mobile','name' => 'mobile','id' => 'mobile','wire:model' => 'student.mobile']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
            </div>
            <div class="col-span-3 form-group <?php echo e($errors->has('student.email') ? 'invalid' : ''); ?>">
                <label class="form-label" for="email"><?php echo e(trans('cruds.student.fields.email')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'student.email','name' => 'email','id' => 'email','wire:model' => 'student.email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'student.email','name' => 'email','id' => 'email','wire:model' => 'student.email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
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
                    <?php if (isset($component)) { $__componentOriginal6f74d80eeb6701d3109b6a080545c001 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f74d80eeb6701d3109b6a080545c001 = $attributes; } ?>
<?php $component = App\View\Components\Dropzone::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropzone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dropzone::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'dp','name' => 'dp','action' => ''.e(route('admin.students.storeMedia')).'','collection-name' => 'student_dp','max-file-size' => '2','max-width' => '4096','max-height' => '4096','max-files' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f74d80eeb6701d3109b6a080545c001)): ?>
<?php $attributes = $__attributesOriginal6f74d80eeb6701d3109b6a080545c001; ?>
<?php unset($__attributesOriginal6f74d80eeb6701d3109b6a080545c001); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f74d80eeb6701d3109b6a080545c001)): ?>
<?php $component = $__componentOriginal6f74d80eeb6701d3109b6a080545c001; ?>
<?php unset($__componentOriginal6f74d80eeb6701d3109b6a080545c001); ?>
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
                <?php if (isset($component)) { $__componentOriginal6f74d80eeb6701d3109b6a080545c001 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f74d80eeb6701d3109b6a080545c001 = $attributes; } ?>
<?php $component = App\View\Components\Dropzone::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropzone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dropzone::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'documents','name' => 'documents','action' => ''.e(route('admin.students.storeMedia')).'','collection-name' => 'student_documents','max-file-size' => '2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f74d80eeb6701d3109b6a080545c001)): ?>
<?php $attributes = $__attributesOriginal6f74d80eeb6701d3109b6a080545c001; ?>
<?php unset($__attributesOriginal6f74d80eeb6701d3109b6a080545c001); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f74d80eeb6701d3109b6a080545c001)): ?>
<?php $component = $__componentOriginal6f74d80eeb6701d3109b6a080545c001; ?>
<?php unset($__componentOriginal6f74d80eeb6701d3109b6a080545c001); ?>
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
                        <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Select Batch','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Select Batch','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['error' => 'selectedBatches','wire:model.live' => 'selectBoxBatchId']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'selectedBatches','wire:model.live' => 'selectBoxBatchId']); ?>
                            <option value=""> -- Select Batch --</option>
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($batch->id); ?>"><?php echo e($batch->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option value="" disabled>No Batch Found</option>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $attributes = $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $component = $__componentOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
                    </div>
                    <button class="btn btn-indigo" type="button" wire:click="addBatch()">Add Batch</button>
                </div>
                <div class="py-8 px-4">
                    <div class="divide-y ">
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $selectedBatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$individualBatch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div wire:key="batch-<?php echo e($key); ?>" class="pt-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <?php echo e($loop->iteration); ?>. <?php echo e($individualBatch['batch']['title']); ?>

                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['wire:click' => 'removeBatch('.e($key).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'removeBatch('.e($key).')']); ?>
                                        Remove Batch
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                                </div>

                                <div class="grid grid-cols-3 gap-6 my-4">
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course Fee','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course Fee','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.total_fee']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.total_fee']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course Start Date','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course Start Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.sessions.session_start_date','type' => 'date','value' => ''.e(now()->format('Y-m-d')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.sessions.session_start_date','type' => 'date','value' => ''.e(now()->format('Y-m-d')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Course End Date','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Course End Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.sessions.session_end_date','value' => ''.e(now()->add($individualBatch['batch']['session_duration'])->format('Y-m-d')).'','type' => 'date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.sessions.session_end_date','value' => ''.e(now()->add($individualBatch['batch']['session_duration'])->format('Y-m-d')).'','type' => 'date']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
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
                                    <!--[if BLOCK]><![endif]--><?php $__empty_2 = true; $__currentLoopData = $individualBatch['installments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ikey=>$installment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <div>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <?php echo e($loop->iteration); ?>. Installment
                                                </div>
                                                <div>
                                                <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['class' => 'text-xs p-2','wire:click' => 'addInstallment('.e($key).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs p-2','wire:click' => 'addInstallment('.e($key).')']); ?>
                                                    <?php if (isset($component)) { $__componentOriginal167d49e5be30319451e9d24e17d8a630 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal167d49e5be30319451e9d24e17d8a630 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.add','data' => ['class' => 'w-3 h-3 text-gray-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal167d49e5be30319451e9d24e17d8a630)): ?>
<?php $attributes = $__attributesOriginal167d49e5be30319451e9d24e17d8a630; ?>
<?php unset($__attributesOriginal167d49e5be30319451e9d24e17d8a630); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal167d49e5be30319451e9d24e17d8a630)): ?>
<?php $component = $__componentOriginal167d49e5be30319451e9d24e17d8a630; ?>
<?php unset($__componentOriginal167d49e5be30319451e9d24e17d8a630); ?>
<?php endif; ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['wire:click' => 'removeInstallment('.e($key).','.e($ikey).')','class' => 'text-xs p-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'removeInstallment('.e($key).','.e($ikey).')','class' => 'text-xs p-2']); ?>
                                                    <?php if (isset($component)) { $__componentOriginal366cc9aca1adebfaa2d1eeeb0565a599 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal366cc9aca1adebfaa2d1eeeb0565a599 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.minus','data' => ['class' => 'w-3 h-3 text-gray-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal366cc9aca1adebfaa2d1eeeb0565a599)): ?>
<?php $attributes = $__attributesOriginal366cc9aca1adebfaa2d1eeeb0565a599; ?>
<?php unset($__attributesOriginal366cc9aca1adebfaa2d1eeeb0565a599); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal366cc9aca1adebfaa2d1eeeb0565a599)): ?>
<?php $component = $__componentOriginal366cc9aca1adebfaa2d1eeeb0565a599; ?>
<?php unset($__componentOriginal366cc9aca1adebfaa2d1eeeb0565a599); ?>
<?php endif; ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                        <div wire:key="batch-<?php echo e($key); ?>-installment-<?php echo e($ikey); ?>"
                                             class="grid grid-cols-6 gap-2 my-4">
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Installment Amount','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Installment Amount','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_amount']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_amount']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                            </div>
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Due Date','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Due Date','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['type' => 'date','wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_due_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_due_date']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                            </div>
                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Status','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Status','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_status']); ?>
                                                    <option value="0">Unpaid</option>
                                                    <option value="1">Paid</option>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $attributes = $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $component = $__componentOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
                                            </div>

            <!--[if BLOCK]><![endif]--><?php if($selectedBatches[$key]['installments'][$ikey]['installment_paid_status']): ?>

                                            <div class="col-span-2">

                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Account','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Account','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_account_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_account_id']); ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_3 = true; $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                                                        <option value="<?php echo e($account->id); ?>"><?php echo e($account->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $attributes = $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__attributesOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d)): ?>
<?php $component = $__componentOriginal26612d3f1018e0d4691b34c23fc8850d; ?>
<?php unset($__componentOriginal26612d3f1018e0d4691b34c23fc8850d); ?>
<?php endif; ?>
                                            </div>

                                            <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Transaction/Slip #','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Transaction/Slip #','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_transaction_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_transaction_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                            </div>
                                                <div class="col-span-2">
                                                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'text-xs','label' => 'Date of Payment','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','label' => 'Date of Payment','for' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $attributes = $__attributesOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__attributesOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal478e2baf9d376141d61299de7fedd983)): ?>
<?php $component = $__componentOriginal478e2baf9d376141d61299de7fedd983; ?>
<?php unset($__componentOriginal478e2baf9d376141d61299de7fedd983); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['type' => 'date','wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_on']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','wire:model.live' => 'selectedBatches.'.e($key).'.installments.'.e($ikey).'.installment_paid_on']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $attributes = $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3)): ?>
<?php $component = $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3; ?>
<?php unset($__componentOriginal034b47a4c344adc563f07c06a7f4c7f3); ?>
<?php endif; ?>
                                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                        </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            No Batch is Selected
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
                                x-data="{ on: <?php if ((object) ('notifications.sms') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.sms'->value()); ?>')<?php echo e('notifications.sms'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.sms'); ?>')<?php endif; ?>.live }">
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
                                x-data="{ on: <?php if ((object) ('notifications.email') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.email'->value()); ?>')<?php echo e('notifications.email'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.email'); ?>')<?php endif; ?>.live }">
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
                                x-data="{ on: <?php if ((object) ('notifications.account') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.account'->value()); ?>')<?php echo e('notifications.account'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.account'); ?>')<?php endif; ?>.live }">
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
                <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Save <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['href' => ''.e(route('admin.students.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.students.index')).'']); ?>Cancel <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
            </div>
        </div>
    </form>

    <?php if (isset($component)) { $__componentOriginal2ea78c27aaeb4fb8e636e11d88f44193 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ea78c27aaeb4fb8e636e11d88f44193 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.validation-alert','data' => ['errors' => $errors->all()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.validation-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->all())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ea78c27aaeb4fb8e636e11d88f44193)): ?>
<?php $attributes = $__attributesOriginal2ea78c27aaeb4fb8e636e11d88f44193; ?>
<?php unset($__attributesOriginal2ea78c27aaeb4fb8e636e11d88f44193); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ea78c27aaeb4fb8e636e11d88f44193)): ?>
<?php $component = $__componentOriginal2ea78c27aaeb4fb8e636e11d88f44193; ?>
<?php unset($__componentOriginal2ea78c27aaeb4fb8e636e11d88f44193); ?>
<?php endif; ?>
</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/livewire/student/create.blade.php ENDPATH**/ ?>