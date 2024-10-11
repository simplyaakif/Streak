<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0269754f5545880bc88fc7cdcd6ad82f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0269754f5545880bc88fc7cdcd6ad82f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.page-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal0ab287eb4d748f4d14b19a252454cec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ab287eb4d748f4d14b19a252454cec2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => 'Alumni','subtitle' => 'Generate certificate for the alumni']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Alumni','subtitle' => 'Generate certificate for the alumni']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ab287eb4d748f4d14b19a252454cec2)): ?>
<?php $attributes = $__attributesOriginal0ab287eb4d748f4d14b19a252454cec2; ?>
<?php unset($__attributesOriginal0ab287eb4d748f4d14b19a252454cec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ab287eb4d748f4d14b19a252454cec2)): ?>
<?php $component = $__componentOriginal0ab287eb4d748f4d14b19a252454cec2; ?>
<?php unset($__componentOriginal0ab287eb4d748f4d14b19a252454cec2); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0269754f5545880bc88fc7cdcd6ad82f)): ?>
<?php $attributes = $__attributesOriginal0269754f5545880bc88fc7cdcd6ad82f; ?>
<?php unset($__attributesOriginal0269754f5545880bc88fc7cdcd6ad82f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0269754f5545880bc88fc7cdcd6ad82f)): ?>
<?php $component = $__componentOriginal0269754f5545880bc88fc7cdcd6ad82f; ?>
<?php unset($__componentOriginal0269754f5545880bc88fc7cdcd6ad82f); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0f9af6d1889a85773e85c08cf893c74e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f9af6d1889a85773e85c08cf893c74e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.page-body','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.page-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="max-w-6xl mx-auto">
            <h2 class="text-lg leading-6 font-medium text-gray-900">Alumni</h2>
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal061a11851891bd36eae44cba11a5ebe4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal061a11851891bd36eae44cba11a5ebe4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
<?php $component->withAttributes([]); ?>Sr # <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Student <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Batch Name <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Course Name <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Certificate Status <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Actions <?php echo $__env->renderComponent(); ?>
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
                        <?php $__empty_1 = true; $__currentLoopData = $admissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php if (isset($component)) { $__componentOriginaleea752fb3cc96a2d638b14ce0aa904dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleea752fb3cc96a2d638b14ce0aa904dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($loop->iteration); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($admission->student->name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($admission->batch->title); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($admission->batch->course->title); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?> Course
                                    <?php echo e(App\Models\BatchStudent::STATUS[$admission->batch_status]); ?>

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
                                    <?php if(isset($admission->certificate)): ?>
                                        <span class="bg-cyan-100 p-1 text-cyan-800 rounded-full">Published</span>
                                    <?php else: ?>

                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.certificate.create', ['batchStudent' => $admission]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3474995514-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                    <?php endif; ?>
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
                                    <a href="<?php echo e(route('admin.certificates.show',$admission->id)); ?>">
                                        <?php if (isset($component)) { $__componentOriginal95d0561691888b1ea30e4dcd205f4e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye','data' => ['class' => 'w-4 h-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gray-400']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal2f1c864884b7d3a30c0af83d85853862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1c864884b7d3a30c0af83d85853862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['colspan' => '7','class' => 'text-center text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '7','class' => 'text-center text-gray-400']); ?> No data found
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
                        <?php endif; ?>
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
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f9af6d1889a85773e85c08cf893c74e)): ?>
<?php $attributes = $__attributesOriginal0f9af6d1889a85773e85c08cf893c74e; ?>
<?php unset($__attributesOriginal0f9af6d1889a85773e85c08cf893c74e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f9af6d1889a85773e85c08cf893c74e)): ?>
<?php $component = $__componentOriginal0f9af6d1889a85773e85c08cf893c74e; ?>
<?php unset($__componentOriginal0f9af6d1889a85773e85c08cf893c74e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/certificate/index.blade.php ENDPATH**/ ?>