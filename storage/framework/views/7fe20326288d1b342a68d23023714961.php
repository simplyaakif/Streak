<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:submit="submit" class="mt-6 mb-6 space-y-8 divide-y divide-y-blue-gray-200">
        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class=" sm:col-span-3  <?php echo e($errors->has('query.name') ? 'invalid' : ''); ?>">
                <label class="form-label required" for="name"><?php echo e(trans('cruds.query.fields.name')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'query.name','placeholder' => 'Query Full Name','label' => 'name','name' => 'name','wire:model' => 'query.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.name','placeholder' => 'Query Full Name','label' => 'name','name' => 'name','wire:model' => 'query.name']); ?>
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
            <div class=" sm:col-span-3  <?php echo e($errors->has('query.mobile') ? 'invalid' : ''); ?>">
                <label class="form-label required" for="mobile"><?php echo e(trans('cruds.query.fields.mobile')); ?></label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'query.mobile','placeholder' => 'Query mobile number. +923335335792','label' => 'mobile','name' => 'mobile','wire:model' => 'query.mobile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.mobile','placeholder' => 'Query mobile number. +923335335792','label' => 'mobile','name' => 'mobile','wire:model' => 'query.mobile']); ?>
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
            <div class="sm:col-span-3  <?php echo e($errors->has('query.email') ? 'invalid' : ''); ?>">
                <label class="form-label" for="email"><?php echo e(trans('cruds.query.fields.email')); ?></label>

                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'query.email','placeholder' => 'Query valid email address','type' => 'email','name' => 'email','label' => 'email','wire:model' => 'query.email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.email','placeholder' => 'Query valid email address','type' => 'email','name' => 'email','label' => 'email','wire:model' => 'query.email']); ?>
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
            <div class="sm:col-span-3  <?php echo e($errors->has('query.telephone') ? 'invalid' : ''); ?>">
                <label class="form-label" for="telephone">Telephone</label>
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['error' => 'query.telephone','placeholder' => 'Query telephone or secondary number','name' => 'telephone','label' => 'telephone','wire:model' => 'query.telephone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.telephone','placeholder' => 'Query telephone or secondary number','name' => 'telephone','label' => 'telephone','wire:model' => 'query.telephone']); ?>
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
            <div class="sm:col-span-6  <?php echo e($errors->has('query.address') ? 'invalid' : ''); ?>">
                <label class="form-label" for="address"><?php echo e(trans('cruds.query.fields.address')); ?></label>
                <textarea
                    placeholder="Current address"
                    class="form-control" name="address" id="address" wire:model="query.address"
                          rows="4"></textarea>

            </div>

        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Course Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">The information relating to the course of query</p>
            </div>
            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Course','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Course','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['name' => '','error' => 'qCourses.course_id','wire:model' => 'qCourses.course_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => '','error' => 'qCourses.course_id','wire:model' => 'qCourses.course_id']); ?>
                    <option value="">Select Course</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($course->id); ?>"><?php echo e($course->title); ?></option>
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
            </div>
            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Session Learning Type','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Session Learning Type','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['error' => 'qCourses.learning_type','name' => '','wire:model' => 'qCourses.learning_type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'qCourses.learning_type','name' => '','wire:model' => 'qCourses.learning_type']); ?>
                    <option value="">Select Mode</option>

                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = App\Models\Query::learning_mode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($label); ?></option>
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
            </div>

            <div class="sm:col-span-6">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Remarks','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Remarks','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['name' => '','wire:model' => 'qCourses.remarks','placeholder' => 'Any special request from the query regarding course']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => '','wire:model' => 'qCourses.remarks','placeholder' => 'Any special request from the query regarding course']); ?>
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

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <?php if (isset($component)) { $__componentOriginala4a708163bd82911e5507c41a3578837 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4a708163bd82911e5507c41a3578837 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.form-header','data' => ['title' => 'Additional Information','subtitle' => 'The information relating to query.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.form-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Additional Information','subtitle' => 'The information relating to query.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4a708163bd82911e5507c41a3578837)): ?>
<?php $attributes = $__attributesOriginala4a708163bd82911e5507c41a3578837; ?>
<?php unset($__attributesOriginala4a708163bd82911e5507c41a3578837); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4a708163bd82911e5507c41a3578837)): ?>
<?php $component = $__componentOriginala4a708163bd82911e5507c41a3578837; ?>
<?php unset($__componentOriginala4a708163bd82911e5507c41a3578837); ?>
<?php endif; ?>
            </div>

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Dealt By','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Dealt By','for' => '']); ?>
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

                <!--[if BLOCK]><![endif]--><?php if(auth()->user()->is_admin): ?>
                    <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['error' => 'query.staff_user_id','wire:model' => 'query.staff_user_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.staff_user_id','wire:model' => 'query.staff_user_id']); ?>
                        <option value="">-- Select Option --</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
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
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['error' => 'query.staff_user_id','isSkipSelect' => true,'disabled' => true,'wire:model' => 'query.staff_user_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.staff_user_id','is_skip_select' => true,'disabled' => true,'wire:model' => 'query.staff_user_id']); ?>
                            <option value="<?php echo e(Auth::user()->id); ?>"><?php echo e(Auth::user()->name); ?></option>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Contact Type','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Contact Type','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['error' => 'query.contact_type','wire:model' => 'query.contact_type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => 'query.contact_type','wire:model' => 'query.contact_type']); ?>
                        <option value="">-- Select Option --</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = App\Models\Query::contact_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($label); ?></option>
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

            </div>

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Query Remarks/Comments','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Query Remarks/Comments','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['placeholder' => 'Staff remarks regarding query','wire:model' => 'query.remarks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Staff remarks regarding query','wire:model' => 'query.remarks']); ?>
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
            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Preferred Timings','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Preferred Timings','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model' => 'query.p_timings']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'query.p_timings']); ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = App\Models\Query::preferred_timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($label); ?>"><?php echo e($label); ?></option>
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
            </div>

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Marketing Reference','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Marketing Reference','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model.live' => 'query.reference']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'query.reference']); ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = App\Models\Query::marketing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($label); ?></option>
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
            </div>
        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Timeline / Status</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This will define query timeline in the system.</p>
            </div>

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Status','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Status','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['isSkipSelect' => true,'wire:model.live' => 'timeline.timeline_id','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is_skip_select' => true,'wire:model.live' => 'timeline.timeline_id','disabled' => true]); ?>

                        <option selected value="<?php echo e($timelines[0]->id); ?>"><?php echo e($timelines[0]->title); ?></option>

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

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Comments on Status','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Comments on Status','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['placeholder' => 'Remarks regarding status','wire:model' => 'timeline.remarks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Remarks regarding status','wire:model' => 'timeline.remarks']); ?>
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

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Status Date & Time','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Status Date & Time','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['disabled' => true,'value' => ''.e(now()->toDateTimeString()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => true,'value' => ''.e(now()->toDateTimeString()).'']); ?>
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

            <div class="sm:col-span-3">
                <?php if (isset($component)) { $__componentOriginal478e2baf9d376141d61299de7fedd983 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal478e2baf9d376141d61299de7fedd983 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-label','data' => ['class' => 'form-label required','label' => 'Follow Up Date & Time','for' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-label required','label' => 'Follow Up Date & Time','for' => '']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['id' => 'follow_up','name' => 'follow_up','type' => 'datetime-local','wire:model.live' => 'timeline.fw_date_time']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'follow_up','name' => 'follow_up','type' => 'datetime-local','wire:model.live' => 'timeline.fw_date_time']); ?>
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


        <div class="form-group pt-6">
            <button class="btn btn-indigo mr-2" type="submit">
                <?php echo e(trans('global.save')); ?>

            </button>
            <a href="<?php echo e(route('admin.queries.index')); ?>" class="btn btn-secondary">
                <?php echo e(trans('global.cancel')); ?>

            </a>
        </div>
    </form>
    <div>
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
</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/livewire/query/create.blade.php ENDPATH**/ ?>