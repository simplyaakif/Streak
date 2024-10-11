<?php $__env->startSection('content'); ?>
    <div class="row">
        <article>
            <div>
                <div>
                    <img class="h-32 w-full object-cover lg:h-48"
                         src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                         alt="">
                </div>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                        <div class="flex">
                            <?php $__empty_1 = true; $__currentLoopData = $student->dp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                
                                
                                
                                <img
                                    class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 object-cover mx-auto rounded-full"
                                    src="<?php echo e($entry['url']); ?>" alt="<?php echo e($entry['name']); ?>"
                                    title="<?php echo e($entry['name']); ?>"
                                >
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <img
                                    class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 mx-auto rounded-full"
                                    src="<?php echo e($student->avatarUrl()); ?>"
                                    alt="">
                            <?php endif; ?>
                        </div>
                        <div
                            class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                <h1 class="text-2xl font-bold text-gray-900 truncate">
                                    <?php echo e($student->name); ?>

                                </h1>
                            </div>
                            <div
                                class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">








                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Message</span>
                                </button>
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Email</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                            <?php echo e($student->name); ?>

                        </h1>
                    </div>
                </div>
            </div>

            <?php if (isset($component)) { $__componentOriginalb5964ceaff5596b67291a601bad6f23f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5964ceaff5596b67291a601bad6f23f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs','data' => ['first' => 'profile','border' => 'border-b border-solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['first' => 'profile','border' => 'border-b border-solid']); ?>
                 <?php $__env->slot('tabs', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal3ed3c854de996964913d0aed80fea3f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ed3c854de996964913d0aed80fea3f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'profile']); ?>Student Details <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'sessions']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'sessions']); ?>Sessions <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab','data' => ['tab' => 'user_account']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'user_account']); ?>User Account <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tab' => 'attendance']); ?>Attendance <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'profile']); ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.filament.student.student-edit', ['studentId' => $student->id,'student_id' => $student->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-765629788-0', $__slots ?? [], get_defined_vars());

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'sessions']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'sessions']); ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.filament.student.batch.batch-index', ['studentId' => $student->id,'student_id' => $student->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-765629788-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        <?php $__currentLoopData = $student->batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mt-10">
                                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            <?php echo e($batch->title); ?>

                                        </h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                            <?php echo e($batch->duration); ?>

                                        </p>
                                    </div>

                                    <div class="bg-gray-100 px-4 py-5 sm:px-6">
                                        <?php
                                        $recoveries = App\Models\Recovery::where('batch_student_id',$batch->pivot->id)
                                                      ->get()
                                        ?>
                                        <h3 class="text-xl font-bold">Fee Schedule</h3>
                                        <div>
                                            <ul>
                                                <li>
                                                    <div class="grid gap-4 md:grid-cols-6">
                                                        <div class="font-bold">Amount</div>
                                                        <div class="font-bold">Due Date</div>
                                                        <div class="font-bold">Status</div>
                                                        <div class="font-bold">Paid On</div>
                                                        <div class="font-bold">Account</div>
                                                        <div class="font-bold">Slip/Transaction ID</div>
                                                    </div>
                                                </li>
                                                <?php $__empty_1 = true; $__currentLoopData = $recoveries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recovery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <li>
                                                    <div class="grid gap-4 md:grid-cols-6">
                                                    <div><?php echo e($recovery->amount); ?> Rs</div>
                                                    <div><?php echo e($recovery->due_date); ?></div>
                                                    <div><?php echo e($recovery->is_paid ? "Paid":"Pending"); ?></div>
                                                    <div><?php echo e($recovery->paid_on); ?></div>
                                                    <div><?php echo e($recovery->account->title); ?></div>
                                                    <div><?php echo e($recovery->slip_number); ?></div>
                                                    </div>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'user_account']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'user_account']); ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.filament.student.user-edit', ['studentId' => $student->id,'userId' => $student->user_id,'student_id' => $student->id,'user_id' => $student->user_id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-765629788-2', $__slots ?? [], get_defined_vars());

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-details','data' => ['tab' => 'guardian']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'guardian']); ?>
                        <?php if (isset($component)) { $__componentOriginalcc3bd700512a243b328ab98fbdcdf888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc3bd700512a243b328ab98fbdcdf888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.empty-state','data' => ['title' => 'No guardian','subtitle' => 'Add a guardian to this student','label' => 'Add
                Guardian']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'No guardian','subtitle' => 'Add a guardian to this student','label' => 'Add
                Guardian']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc3bd700512a243b328ab98fbdcdf888)): ?>
<?php $attributes = $__attributesOriginalcc3bd700512a243b328ab98fbdcdf888; ?>
<?php unset($__attributesOriginalcc3bd700512a243b328ab98fbdcdf888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc3bd700512a243b328ab98fbdcdf888)): ?>
<?php $component = $__componentOriginalcc3bd700512a243b328ab98fbdcdf888; ?>
<?php unset($__componentOriginalcc3bd700512a243b328ab98fbdcdf888); ?>
<?php endif; ?>
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
[$__name, $__params] = $__split('admin.filament.student.attendance-show', ['studentId' => $student->id,'student_id' => $student->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-765629788-3', $__slots ?? [], get_defined_vars());

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

        </article>
        <div class="card bg-blueGray-100">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/student/show.blade.php ENDPATH**/ ?>