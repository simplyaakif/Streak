<div class="block">
    <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['wire:click' => '$set(\'showModal\',true)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'showModal\',true)']); ?>Take Attendance <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
    <div class="mt-4">
        <?php if (isset($component)) { $__componentOriginal061a11851891bd36eae44cba11a5ebe4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal061a11851891bd36eae44cba11a5ebe4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table','data' => ['class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
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
<?php $component->withAttributes([]); ?>Date <?php echo $__env->renderComponent(); ?>
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
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $attendanceRecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date =>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes([]); ?><?php echo e($date); ?> <?php echo $__env->renderComponent(); ?>
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
                            <div class="flex space-x-2">
                                <?php if (isset($component)) { $__componentOriginal95d0561691888b1ea30e4dcd205f4e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye','data' => ['class' => 'w-5 h-5 text-gray-500','wire:click' => 'showAttendance(\''.e($date).'\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gray-500','wire:click' => 'showAttendance(\''.e($date).'\')']); ?>
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
                                <?php if (isset($component)) { $__componentOriginal32022bdceaa704d305484041fc21cb4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32022bdceaa704d305484041fc21cb4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.edit','data' => ['class' => 'w-5 h-5 text-blue-500','wire:click' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-blue-500','wire:click' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32022bdceaa704d305484041fc21cb4a)): ?>
<?php $attributes = $__attributesOriginal32022bdceaa704d305484041fc21cb4a; ?>
<?php unset($__attributesOriginal32022bdceaa704d305484041fc21cb4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32022bdceaa704d305484041fc21cb4a)): ?>
<?php $component = $__componentOriginal32022bdceaa704d305484041fc21cb4a; ?>
<?php unset($__componentOriginal32022bdceaa704d305484041fc21cb4a); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['colspan' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '3']); ?>No Records Found <?php echo $__env->renderComponent(); ?>
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
    </div>

    <div>

        <!--[if BLOCK]><![endif]--><?php if($showAttendanceModal): ?>
            <?php if (isset($component)) { $__componentOriginal6eb288a80e68f6f6b1755bcc863df159 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.dialog','data' => ['maxWidth' => '3xl','wire:model.live' => 'showAttendanceModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['maxWidth' => '3xl','wire:model.live' => 'showAttendanceModal']); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <?php echo e(Carbon\Carbon::parse($attendanceRecord[0]["datetime"])->format('D d F Y')); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
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
<?php $component->withAttributes([]); ?>Student Name <?php echo $__env->renderComponent(); ?>
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
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('body', null, []); ?> 
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $attendanceRecord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes([]); ?><?php echo e($record["student"]["name"]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($record['attendance_status']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['colspan' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '']); ?> No data found <?php echo $__env->renderComponent(); ?>
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
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('footer', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['wire:click' => '$set(\'showAttendanceModal\',false)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'showAttendanceModal\',false)']); ?>Cancel <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $attributes = $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $component = $__componentOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <form wire:submit="submit">
        <?php if (isset($component)) { $__componentOriginal6eb288a80e68f6f6b1755bcc863df159 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.dialog','data' => ['maxWidth' => '3xl','wire:model.live' => 'showModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['maxWidth' => '3xl','wire:model.live' => 'showModal']); ?>
             <?php $__env->slot('title', null, []); ?> 
                <span class="text-cyan-700 font-medium"><?php echo e($batch->title); ?></span>
                <span class="text-base text-gray-400">Student Attendance</span>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('content', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal061a11851891bd36eae44cba11a5ebe4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal061a11851891bd36eae44cba11a5ebe4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table','data' => ['style' => 'max-height: 400px;overflow: auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'max-height: 400px;overflow: auto']); ?>
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
<?php $component->withAttributes([]); ?>Name <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Date <?php echo $__env->renderComponent(); ?>
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
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $batch->activeStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($student->name); ?> <?php echo $__env->renderComponent(); ?>
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
                                    <div class="text-xs space-x-2">
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = App\Models\StudentAttendance::STATUS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label for="status_<?php echo e($student->id); ?>_<?php echo e($status); ?>">
                                                <input type="radio" id="status_<?php echo e($student->id); ?>_<?php echo e($status); ?>"
                                                       name="status_<?php echo e($student->id); ?>"
                                                       wire:model="statuses.<?php echo e($student->id); ?>"
                                                       value="<?php echo e($status); ?>"/>
                                                <?php echo e($status); ?>

                                            </label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
<?php $component->withAttributes([]); ?><?php echo e(now()->format('d-m-Y')); ?> <?php echo $__env->renderComponent(); ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

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
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('footer', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => ['wire:click' => '$set(\'showModal\',false)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'showModal\',false)']); ?>Cancel <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Submit Attendance <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $attributes = $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $component = $__componentOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
    </form>

</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/livewire/admin/student-attendance.blade.php ENDPATH**/ ?>