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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => ''.e($batch->title).'','subtitle' => 'Batch Details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($batch->title).'','subtitle' => 'Batch Details']); ?>
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
        <div class="flex space-x-2">
            <a href="<?php echo e(route('admin.stream.class',$batch->id)); ?>">
                <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php if (isset($component)) { $__componentOriginal285eddc9278dae58281aa961bf08a625 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal285eddc9278dae58281aa961bf08a625 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.book','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.book'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal285eddc9278dae58281aa961bf08a625)): ?>
<?php $attributes = $__attributesOriginal285eddc9278dae58281aa961bf08a625; ?>
<?php unset($__attributesOriginal285eddc9278dae58281aa961bf08a625); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal285eddc9278dae58281aa961bf08a625)): ?>
<?php $component = $__componentOriginal285eddc9278dae58281aa961bf08a625; ?>
<?php unset($__componentOriginal285eddc9278dae58281aa961bf08a625); ?>
<?php endif; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
            </a>
        </div>
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

        <?php if (isset($component)) { $__componentOriginalb5964ceaff5596b67291a601bad6f23f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5964ceaff5596b67291a601bad6f23f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs','data' => ['first' => 'students','border' => 'border-b border-solid border-gray-300']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['first' => 'students','border' => 'border-b border-solid border-gray-300']); ?>
             <?php $__env->slot('tabs', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal3ed3c854de996964913d0aed80fea3f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ed3c854de996964913d0aed80fea3f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'students']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'students']); ?>Students <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $attributes = $__attributesOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $component = $__componentOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__componentOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3ed3c854de996964913d0aed80fea3f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ed3c854de996964913d0aed80fea3f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'attendance']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'attendance']); ?>Attendance Records <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $attributes = $__attributesOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $component = $__componentOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__componentOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3ed3c854de996964913d0aed80fea3f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ed3c854de996964913d0aed80fea3f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'lesson_planner']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'lesson_planner']); ?>Class Work <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $attributes = $__attributesOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $component = $__componentOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__componentOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3ed3c854de996964913d0aed80fea3f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ed3c854de996964913d0aed80fea3f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'home_tasks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'home_tasks']); ?>Home Tasks <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $attributes = $__attributesOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__attributesOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ed3c854de996964913d0aed80fea3f1)): ?>
<?php $component = $__componentOriginal3ed3c854de996964913d0aed80fea3f1; ?>
<?php unset($__componentOriginal3ed3c854de996964913d0aed80fea3f1); ?>
<?php endif; ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('details', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'students']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'students']); ?>
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <?php $__empty_1 = true; $__currentLoopData = $batch->activeStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                                <div class="flex-1 flex flex-col p-8">
                                    <a href="<?php echo e(route('admin.students.show',$student->id)); ?>">
                                    <?php $__empty_2 = true; $__currentLoopData = $student->dp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        
                                        
                                        
                                        <img class="w-24 h-24 flex-shrink-0 object-cover mx-auto rounded-full"
                                             src="<?php echo e($entry['url']); ?>" alt="<?php echo e($entry['name']); ?>"
                                             title="<?php echo e($entry['name']); ?>"
                                        >
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <img class="w-24 h-24 flex-shrink-0 mx-auto rounded-full"
                                             src="<?php echo e($student->avatarUrl()); ?>"
                                             alt="">
                                    <?php endif; ?>


                                    <h3 class="mt-6 hover:text-cyan-700 text-gray-900 text-sm
                                    font-medium"><?php echo e($student->name); ?></h3>
                                        </a>
                                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                                        <dt class="sr-only">Student Details</dt>




                                        <dd class="text-gray-500 text-sm">Start:
                                            <span class="text-black">
                                <?php echo e(carbon($student->pivot->session_start_date)->format('d-M-Y')); ?>

                                </span>
                                        </dd>
                                        <dd class="text-gray-500 text-sm">End:
                                            <span class="text-black">
                                <?php echo e(carbon($student->pivot->session_end_date)->format('d-M-Y')); ?>

                                </span>
                                        </dd>
                                        <dt class="text-sm my-2 bg-cyan-100 ">Last Login</dt>
                                        <dd class="text-xs"><?php echo e(json_encode($student->last_login)); ?></dd>
                                    </dl>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="w-full text-center p-4 sm:col-span-2 md:col-span-3 lg:col-span-4">No student
                                active or
                                enrolled in this batch
                            </li>
                    <?php endif; ?>

                    <!-- More people... -->
                    </ul>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $attributes = $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $component = $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'attendance']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'attendance']); ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.filament.classroom.student-attendance', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1027445047-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.student-attendance', ['batch' => $batch]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1027445047-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $attributes = $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $component = $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'lesson_planner']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'lesson_planner']); ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.class-room.lesson-planner', ['batch' => $batch]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1027445047-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $attributes = $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $component = $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'home_tasks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'home_tasks']); ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.filament.student.home-task', ['batch' => $batch]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1027445047-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $attributes = $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $component = $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'class_exams']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'class_exams']); ?>Class Examination <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $attributes = $__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__attributesOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc)): ?>
<?php $component = $__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc; ?>
<?php unset($__componentOriginal885bbeaf9b37ab18eeefec76ec3240cc); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5964ceaff5596b67291a601bad6f23f)): ?>
<?php $attributes = $__attributesOriginalb5964ceaff5596b67291a601bad6f23f; ?>
<?php unset($__attributesOriginalb5964ceaff5596b67291a601bad6f23f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5964ceaff5596b67291a601bad6f23f)): ?>
<?php $component = $__componentOriginalb5964ceaff5596b67291a601bad6f23f; ?>
<?php unset($__componentOriginalb5964ceaff5596b67291a601bad6f23f); ?>
<?php endif; ?>

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/student/classroom.blade.php ENDPATH**/ ?>