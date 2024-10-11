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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => 'Finance Status','subtitle' => 'Finance Reports of the month']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Finance Status','subtitle' => 'Finance Reports of the month']); ?>
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
    <?php if (isset($component)) { $__componentOriginal729d2caf76c5015970936df928fe4f08 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal729d2caf76c5015970936df928fe4f08 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.layout-subpage','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.layout-subpage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div>
            <form action="<?php echo e(route('admin.finance.dashboard')); ?>"  class="flex gap-2">
                <?php if (isset($component)) { $__componentOriginal034b47a4c344adc563f07c06a7f4c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal034b47a4c344adc563f07c06a7f4c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.data-input-text','data' => ['label' => 'Date','type' => 'date','name' => 'date','value' => ''.e($date).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Date','type' => 'date','name' => 'date','value' => ''.e($date).'']); ?>
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
                <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Submit <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
            </form>
        </div>
        <div class="grid md:grid-cols-4 gap-4 my-10">
            <?php $__empty_1 = true; $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'recovery_show','sublabel' => 'In '.e(now()->monthName).'','label' => $account['bank'],'stat' => $account['total']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'recovery_show','sublabel' => 'In '.e(now()->monthName).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($account['bank']),'stat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($account['total'])]); ?>
                     <?php $__env->slot('icon', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal07e4e4a6514c365ce3a482df8d949fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal07e4e4a6514c365ce3a482df8d949fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.user-comment','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.user-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal07e4e4a6514c365ce3a482df8d949fce)): ?>
<?php $attributes = $__attributesOriginal07e4e4a6514c365ce3a482df8d949fce; ?>
<?php unset($__attributesOriginal07e4e4a6514c365ce3a482df8d949fce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07e4e4a6514c365ce3a482df8d949fce)): ?>
<?php $component = $__componentOriginal07e4e4a6514c365ce3a482df8d949fce; ?>
<?php unset($__componentOriginal07e4e4a6514c365ce3a482df8d949fce); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal34693c4af450526aaa48daf9e13cb3ea)): ?>
<?php $attributes = $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea; ?>
<?php unset($__attributesOriginal34693c4af450526aaa48daf9e13cb3ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal34693c4af450526aaa48daf9e13cb3ea)): ?>
<?php $component = $__componentOriginal34693c4af450526aaa48daf9e13cb3ea; ?>
<?php unset($__componentOriginal34693c4af450526aaa48daf9e13cb3ea); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </div>
        <div class="my-8">
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
<?php $component->withAttributes([]); ?>Number Of Recoveries Received <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Total Contribution of Batch <?php echo $__env->renderComponent(); ?>
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
                    <?php $__empty_1 = true; $__currentLoopData = $batchFinanceStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes([]); ?><?php echo e($row['title']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($row['count']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($row['total']); ?> Rs <?php echo $__env->renderComponent(); ?>
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
                    <?php endif; ?>
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
<?php $component->withAttributes([]); ?>Total Recoveries + Amount <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($batchFinanceStatus->sum('count')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($batchFinanceStatus->sum('total')); ?> Rs <?php echo $__env->renderComponent(); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal729d2caf76c5015970936df928fe4f08)): ?>
<?php $attributes = $__attributesOriginal729d2caf76c5015970936df928fe4f08; ?>
<?php unset($__attributesOriginal729d2caf76c5015970936df928fe4f08); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal729d2caf76c5015970936df928fe4f08)): ?>
<?php $component = $__componentOriginal729d2caf76c5015970936df928fe4f08; ?>
<?php unset($__componentOriginal729d2caf76c5015970936df928fe4f08); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/finance/dashboard.blade.php ENDPATH**/ ?>