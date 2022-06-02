<?php $__env->startSection('content'); ?>
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Page header -->
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <!-- Profile -->
                        <div class="flex items-center">
                            
                            
                            
                            <?php $__empty_1 = true; $__currentLoopData = Auth::user()->employee->dp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                
                                
                                
                                <img
                                    class="hidden h-16 w-16 rounded-full sm:block"
                                    src="<?php echo e($entry['url']); ?>" alt="<?php echo e($entry['name']); ?>"
                                    title="<?php echo e($entry['name']); ?>"
                                >
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <img
                                    class="hidden h-16 w-16 rounded-full sm:block"
                                    src="<?php echo e(Auth::user()->employee->avatarUrl()); ?>"
                                    alt="">
                            <?php endif; ?>
                            <div>
                                <div class="flex items-center">
                                    <img class="h-16 w-16 rounded-full sm:hidden"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">
                                    <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                        Good morning, <?php echo e(Auth::user()->name); ?>

                                    </h1>
                                </div>
                                <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <dt class="sr-only">Designation</dt>
                                    <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                             x-description="Heroicon name: solid/check-circle"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo e(App\Models\Employee::DESIGNATION[Auth::user()->employee->designation]); ?>

                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('query_create')): ?>
                            <a href="<?php echo e(route('admin.queries.create')); ?>" type="button" class="inline-flex items-center px-4 py-2
                        border
                        border-gray-300
                        shadow-sm
                        text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                Create Query
                            </a>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_create')): ?>
                            <a href="<?php echo e(route('admin.students.create')); ?>" type="button" class="inline-flex items-center px-4 py-2 border
                        border-transparent
                        shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                Create Admission
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-2">Tasks For <?php echo e(Auth::user()->name); ?></h2>
                <div class="bg-yellow-100 border-yellow-400 border rounded-lg py-4 px-8">
                    <ul class="list-decimal text-gray-700 divide-y divide-yellow-200 space-y-2">
                        <?php $__empty_1 = true; $__currentLoopData = $user_tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="w-full items-center">
                                <div class=" grid grid-cols-1 md:grid-cols-6 items-center ">
                                    <div class="md:col-span-4">
                                        <h3 class="text-base"><?php echo e($task->name); ?></h3>
                                        <p class="text-sm"><?php echo e($task->description); ?></p>
                                    </div>
                                    <div>
                                        <div class="flex space-x-2">
                                        <?php echo e($task->status->name); ?>

                                            <span>
                                                <a
                                                onclick = "if (! confirm('Did you Actually Completed?')) { return false; }"
                                                   href="<?php echo e(route('admin.task_done',$task->id)); ?>">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.add','data' => ['class' => 'w-6 h-6']]); ?>
<?php $component->withName('icons.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </a>
                                            </span>
                                        </div>
                                        <div>
                                            <?php $__empty_2 = true; $__currentLoopData = $task->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                            <span class="text-sm  text-yellow-600"><?php echo e($tag->name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="text-sm">
                                        Due by <span class=""><?php echo e(carbon($task->due_date)->format('d-m-Y')); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="flex">No Task Assigned to You</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <!-- Card -->
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_daily_queries','label' => 'Daily Queries','stat' => ''.e($dQuery).'']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_daily_queries','label' => 'Daily Queries','stat' => ''.e($dQuery).'']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.user-comment','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_daily_admission','label' => 'New Daily Admission','stat' => ''.e($dStudent).'']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_daily_admission','label' => 'New Daily Admission','stat' => ''.e($dStudent).'']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.todo-list','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.todo-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_daily_expenses','label' => 'Daily Expense','stat' => ''.e($dExpense).' Rs']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_daily_expenses','label' => 'Daily Expense','stat' => ''.e($dExpense).' Rs']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.invoice','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.invoice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_daily_sale','label' => 'Daily Sale','stat' => ''.e($dSale).' Rs']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_daily_sale','label' => 'Daily Sale','stat' => ''.e($dSale).' Rs']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.money-check','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.money-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_monthly_queries','label' => 'Monthly Queries','stat' => ''.e($mQuery).'']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_monthly_queries','label' => 'Monthly Queries','stat' => ''.e($mQuery).'']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.user-comment','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_monthly_admission','label' => 'Monthly Admission','stat' => ''.e($mStudent).'']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_monthly_admission','label' => 'Monthly Admission','stat' => ''.e($mStudent).'']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.todo-list','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.todo-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_monthly_expenses','label' => 'Monthly Expenses','stat' => ''.e($mExpense).' Rs']]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_monthly_expenses','label' => 'Monthly Expenses','stat' => ''.e($mExpense).' Rs']); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.invoice','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.invoice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.stat-card','data' => ['can' => 'view_monthly_sale','label' => 'Monthly Sale','stat' => $mSale]]); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['can' => 'view_monthly_sale','label' => 'Monthly Sale','stat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mSale)]); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.money-check','data' => ['class' => 'w-6 h-6 text-gray-400']]); ?>
<?php $component->withName('icons.money-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </div>

            <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
                Recent activity
            </h2>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-2">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('query_show')): ?>
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                <?php echo $chart1->renderHtml(); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_show')): ?>
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                <?php echo $chart2->renderHtml(); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_show')): ?>
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                <?php echo $chart3->renderHtml(); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>

            <?php echo $chart1->renderChartJsLibrary(); ?>

            <?php echo $chart1->renderJs(); ?>

            <?php echo $chart2->renderJs(); ?>

            <?php echo $chart3->renderJs(); ?>

            

            <div class="max-w-6xl mt-8 mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('query_show')): ?>

                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900 ">
                                Recent Queries
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    <?php $__empty_1 = true; $__currentLoopData = $rQueries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="<?php echo e(route('admin.queries.show',$query->id)); ?>" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.user-comment','data' => ['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']]); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate"><?php echo e($query->name); ?></span>
                          <span><span class="text-gray-900 font-medium"><?php echo e($query->course->title); ?></span> </span>
                          <span class="text-xs"><?php echo e($query->entry_by); ?></span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <li>
                                            No Query in System
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Course
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Added By
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <?php $__empty_1 = true; $__currentLoopData = $rQueries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            <?php echo e($query->name); ?>

                                                        </span>
                                                                <span class="text-xs">
                                                        <?php echo e($query->mobile); ?>

                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                            <?php echo e($query->course->title); ?>

                                                        </td>
                                                        <td class="max-w-0 px-6 py-4 text-right whitespace-nowrap text-xs truncate
                                                text-gray-500">
                                                            <?php echo e($query->entry_by); ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                <?php endif; ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_show')): ?>

                        <div>
                            <h2 class="  text-lg leading-6 font-medium text-gray-900">
                                Recent Admissions
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    <?php $__empty_1 = true; $__currentLoopData = $rAdmissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="<?php echo e(route('admin.queries.show',$query->id)); ?>" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.user-comment','data' => ['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']]); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate"><?php echo e($admission->name); ?></span>
                          <span><span class="text-gray-900 font-medium"><?php echo e($query->course->title); ?></span> </span>
                          <span class="text-xs"><?php echo e($query->entry_by); ?></span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <li>
                                            No Query in System
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Course
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Added By
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <?php $__empty_1 = true; $__currentLoopData = $rAdmissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            <?php echo e($admission->name); ?>

                                                        </span>
                                                                <span class="text-xs">
                                                        <?php echo e($admission->mobile); ?>

                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                            <?php echo e($query->course->title); ?>

                                                        </td>
                                                        <td class="max-w-0 px-6 py-4 text-right whitespace-nowrap text-xs truncate
                                                text-gray-500">
                                                            <?php echo e($query->entry_by); ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td colspan="3">
                                                            <div class="p-2 text-gray-500 text-center">
                                                                No Student in the System
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_show')): ?>

                        <div>
                            <h2 class="  text-lg leading-6 font-medium text-gray-900">
                                Recent Expenses
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    <?php $__empty_1 = true; $__currentLoopData = $rExpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="<?php echo e(route('admin.queries.show',$expense->id)); ?>" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.user-comment','data' => ['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']]); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 h-5 w-5 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate"><?php echo e($expense->vendor->name); ?></span>
                          <span><span class="text-gray-900 font-medium"><?php echo e($expense->amount); ?> Rs</span> </span>
                          <span class="text-xs"><?php echo e(Carbon\Carbon::parse($expense->due_date)->diffForHumans()); ?></span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <li>
                                            No Expense in System
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Vendor
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Amount
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Paid Status
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Due Date
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <?php $__empty_1 = true; $__currentLoopData = $rExpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            <?php echo e($expense->vendor->name); ?>

                                                        </span>
                                                                <span class="text-xs">
                                                        <?php echo e($expense->vendor->mobile); ?>

                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class=" px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <?php echo e($expense->amount); ?> Rs
                                                        </td>
                                                        <td class=" px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            <?php echo e($expense->is_paid_human); ?>

                                                        </td>
                                                        <td class=" px-6 py-4 text-right whitespace-nowrap text-xs
                                                text-gray-500">
                                                            <?php if(!$expense->is_paid): ?>
                                                                <?php echo e(Carbon\Carbon::parse($expense->due_date)->diffForHumans()); ?>

                                                            <?php else: ?>
                                                                Paid
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                <?php endif; ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/admin/home.blade.php ENDPATH**/ ?>