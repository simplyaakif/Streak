<div class="space-y-4">
    <div class="grid grid-cols-3 gap-2">
        <?php if (isset($component)) { $__componentOriginale7b4627895d0ada149e7780843c0cb87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7b4627895d0ada149e7780843c0cb87 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.filter-wrapper','data' => ['label' => 'Search by Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.filter-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Search by Name']); ?>
            <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'filters.search','placeholder' => 'Search Query by Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'filters.search','placeholder' => 'Search Query by Name']); ?>
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
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7b4627895d0ada149e7780843c0cb87)): ?>
<?php $attributes = $__attributesOriginale7b4627895d0ada149e7780843c0cb87; ?>
<?php unset($__attributesOriginale7b4627895d0ada149e7780843c0cb87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7b4627895d0ada149e7780843c0cb87)): ?>
<?php $component = $__componentOriginale7b4627895d0ada149e7780843c0cb87; ?>
<?php unset($__componentOriginale7b4627895d0ada149e7780843c0cb87); ?>
<?php endif; ?>
        <div>

            <?php if (isset($component)) { $__componentOriginal84b5730becad88a448a869cc00a53715 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84b5730becad88a448a869cc00a53715 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.filter-select','data' => ['label' => 'Select Batch']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.filter-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Select Batch']); ?>
                <?php if (isset($component)) { $__componentOriginal26612d3f1018e0d4691b34c23fc8850d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26612d3f1018e0d4691b34c23fc8850d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-select','data' => ['wire:model.live' => 'filters.batch']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'filters.batch']); ?>
                    <option value="">All</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($batch->id); ?>"><?php echo e($batch->title); ?></option>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84b5730becad88a448a869cc00a53715)): ?>
<?php $attributes = $__attributesOriginal84b5730becad88a448a869cc00a53715; ?>
<?php unset($__attributesOriginal84b5730becad88a448a869cc00a53715); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84b5730becad88a448a869cc00a53715)): ?>
<?php $component = $__componentOriginal84b5730becad88a448a869cc00a53715; ?>
<?php unset($__componentOriginal84b5730becad88a448a869cc00a53715); ?>
<?php endif; ?>
        </div>
        <div>
            <?php if (isset($component)) { $__componentOriginale7b4627895d0ada149e7780843c0cb87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7b4627895d0ada149e7780843c0cb87 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.filter-wrapper','data' => ['label' => 'Created Between']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.filter-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Created Between']); ?>
                <div class="mb-2">
                    <div class="mb-2 flex space-x-1">
                        <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'filters.date_min','type' => 'date','placeholder' => 'Search Student by Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'filters.date_min','type' => 'date','placeholder' => 'Search Student by Name']); ?>
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
                        <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['wire:model.live' => 'filters.date_max','type' => 'date','placeholder' => 'Search Student by Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'filters.date_max','type' => 'date','placeholder' => 'Search Student by Name']); ?>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7b4627895d0ada149e7780843c0cb87)): ?>
<?php $attributes = $__attributesOriginale7b4627895d0ada149e7780843c0cb87; ?>
<?php unset($__attributesOriginale7b4627895d0ada149e7780843c0cb87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7b4627895d0ada149e7780843c0cb87)): ?>
<?php $component = $__componentOriginale7b4627895d0ada149e7780843c0cb87; ?>
<?php unset($__componentOriginale7b4627895d0ada149e7780843c0cb87); ?>
<?php endif; ?>
        </div>

    </div>
    <div class="container">

    <?php if (isset($component)) { $__componentOriginal061a11851891bd36eae44cba11a5ebe4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal061a11851891bd36eae44cba11a5ebe4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table','data' => ['class' => 'max-w-full ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-w-full ']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                #
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                D.P
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => ['sortable' => true,'wire:click' => 'sortBy(\'name\')','direction' => $sortDirection  === 'name' ?
                                    $sortDirection:null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sortable' => true,'wire:click' => 'sortBy(\'name\')','direction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortDirection  === 'name' ?
                                    $sortDirection:null)]); ?>Student
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Gender <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Batch <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Status <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Session Dates <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Admitted On <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9050fb1871fae696b9f6641a87e799cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9050fb1871fae696b9f6641a87e799cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> Actions <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $attributes = $__attributesOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__attributesOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9050fb1871fae696b9f6641a87e799cf)): ?>
<?php $component = $__componentOriginal9050fb1871fae696b9f6641a87e799cf; ?>
<?php unset($__componentOriginal9050fb1871fae696b9f6641a87e799cf); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('body', null, []); ?> 
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.row','data' => ['wire:loading.class.delay' => 'opacity-50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.class.delay' => 'opacity-50']); ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => 'w-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-2']); ?>
                        <?php echo e($students->firstItem() + $loop->iteration - 1); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => 'w-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-2']); ?>
                        <div class="w-12 rounded-full">
                            <?php $admission = App\Models\Student::findOrFail($student->student_id)?>
                            <!--[if BLOCK]><![endif]--><?php $__empty_2 = true; $__currentLoopData = $admission->dp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <a  href="<?php echo e($entry['url']); ?>">
                                    <img class="h-10 w-10 rounded-full"
                                         src="<?php echo e($entry['url']); ?>" alt="<?php echo e($entry['name']); ?>"
                                         title="<?php echo e($entry['name']); ?>">
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                <img class="h-10 w-10 rounded-full" src="<?php echo e($admission->avatarUrl()); ?>" alt="">
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '']); ?>
                        <div class="flex space-x-2 items-center">

                            <div>
                                <div>
                                    <?php echo e($student->name); ?>

                                    <div class="text-xs text-gray-500"><?php echo e($student->mobile); ?></div>
                                    <div class="text-xs text-gray-500 truncate"><?php echo e($student->email); ?></div>
                                </div>
                            </div>
                        </div>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <div class="capitalize">
                            <?php echo e($student->gender); ?>

                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => ' overflow-hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ' overflow-hidden']); ?>
                        <div class="flex flex-wrap text-center ">
                            <div class="bg-gray-100 m-1 px-2 py-1 rounded-lg">
                                <div class=" text-center  text-xs w-20">
                                    <?php echo e($student->batch_title); ?>

                                </div>
                            </div>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                        <span class=" ">
                                <?php echo e(App\Models\BatchStudent::STATUS[$student->batch_status]); ?>

                        </span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['class' => 'text-sm justify-center items-center align-middle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-sm justify-center items-center align-middle']); ?>
                        <div class="min-w-[100px]">
                            <?php echo e(carbon($student->session_start_date)->format('d-M-Y')); ?>

                        </div>
                        <div class="min-w-[100px]">
                            <?php echo e(carbon($student->session_end_date)->format('d-M-Y')); ?>

                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(carbon($student->created_at)->diffForHumans()); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <div class="flex space-x-2 items-center">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_show')): ?>
                                <a href="<?php echo e(route('admin.students.show',$admission->id)); ?>">
                                    <?php if (isset($component)) { $__componentOriginal95d0561691888b1ea30e4dcd205f4e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye','data' => ['class' => 'w-6 h-6  text-cyan-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6  text-cyan-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $attributes = $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $component = $__componentOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
                                </a>

                            <?php endif; ?>





                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_delete')): ?>
                                <a href="#">
                                    <?php if (isset($component)) { $__componentOriginal54951bafeaab9df77e16fbbcb64bac40 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54951bafeaab9df77e16fbbcb64bac40 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.trash','data' => ['class' => 'w-5 h-5  text-red-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5  text-red-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54951bafeaab9df77e16fbbcb64bac40)): ?>
<?php $attributes = $__attributesOriginal54951bafeaab9df77e16fbbcb64bac40; ?>
<?php unset($__attributesOriginal54951bafeaab9df77e16fbbcb64bac40); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54951bafeaab9df77e16fbbcb64bac40)): ?>
<?php $component = $__componentOriginal54951bafeaab9df77e16fbbcb64bac40; ?>
<?php unset($__componentOriginal54951bafeaab9df77e16fbbcb64bac40); ?>
<?php endif; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc)): ?>
<?php $attributes = $__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc; ?>
<?php unset($__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc)): ?>
<?php $component = $__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc; ?>
<?php unset($__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php if (isset($component)) { $__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.row','data' => ['wire:loading.class.delay' => 'opacity-50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.class.delay' => 'opacity-50']); ?>
                    <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['colspan' => '9']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '9']); ?>
                        <div class="py-10 flex justify-center items-center text-gray-300 text-xl">
                            No Student Found...
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $attributes = $__attributesOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__attributesOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1c864884b7d3a30c0af83d85853862)): ?>
<?php $component = $__componentOriginal2f1c864884b7d3a30c0af83d85853862; ?>
<?php unset($__componentOriginal2f1c864884b7d3a30c0af83d85853862); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc)): ?>
<?php $attributes = $__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc; ?>
<?php unset($__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc)): ?>
<?php $component = $__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc; ?>
<?php unset($__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal061a11851891bd36eae44cba11a5ebe4)): ?>
<?php $attributes = $__attributesOriginal061a11851891bd36eae44cba11a5ebe4; ?>
<?php unset($__attributesOriginal061a11851891bd36eae44cba11a5ebe4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal061a11851891bd36eae44cba11a5ebe4)): ?>
<?php $component = $__componentOriginal061a11851891bd36eae44cba11a5ebe4; ?>
<?php unset($__componentOriginal061a11851891bd36eae44cba11a5ebe4); ?>
<?php endif; ?>
    <div>
        <?php echo e($students->links()); ?>

    </div>
    </div>

</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/livewire/admin/student/student-table.blade.php ENDPATH**/ ?>