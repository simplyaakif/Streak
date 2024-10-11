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
        <div class="">

            <?php if (isset($component)) { $__componentOriginal0ab287eb4d748f4d14b19a252454cec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ab287eb4d748f4d14b19a252454cec2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => 'Queries Dashboard','subtitle' => 'Queries Reports and Sub Reports']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Queries Dashboard','subtitle' => 'Queries Reports and Sub Reports']); ?>
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
        <div class="divide-y">

            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'query_show','label' => 'Daily Queries','stat' => ''.e($dQuery).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_show','label' => 'Daily Queries','stat' => ''.e($dQuery).'']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'query_show','label' => 'Weekly Queries','stat' => ''.e($wQuery).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_show','label' => 'Weekly Queries','stat' => ''.e($wQuery).'']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'query_show','label' => 'Montly Queries','stat' => ''.e($mQuery).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_show','label' => 'Montly Queries','stat' => ''.e($mQuery).'']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'query_show','label' => 'Last Month Queries','stat' => ''.e($pMquery).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_show','label' => 'Last Month Queries','stat' => ''.e($pMquery).'']); ?>
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
                </div>
            </div>

            <div class="mt-8 pt-8 pb-16">
                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-2">Records</h2>
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
<?php $component->withAttributes([]); ?># <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Query <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Course <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Entry By <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Entry Date <?php echo $__env->renderComponent(); ?>
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
                        <?php $__empty_1 = true; $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                    <?php echo e($loop->iteration); ?>

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
                                        <div class="w-12">
                                            <img class="h-10 w-10 rounded-full" src="<?php echo e($query->avatarUrl()); ?>"
                                                 alt="">
                                        </div>
                                        <div>
                                            <div>
                                                <?php echo e($query->name); ?>

                                                <div class="text-xs text-gray-500"><?php echo e($query->mobile); ?></div>
                                                <div class="text-xs text-gray-500"><?php echo e($query->email); ?></div>
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
                                    <div class="flex text-center space-x-2 max-w-xs">
                                        <?php $__currentLoopData = $query->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                <span class="px-2 py-1 truncate rounded-full bg-gray-100 text-xs">
                                    <?php echo e($course->title); ?>

                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <span class="text-sm">

                        <?php echo e($query->entry_by); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <div class="flex flex-col text-center space-y-1">
                            <span class="bg-gray-50 text-xs rounded-full">
                        <?php echo e($query->recent_timeline_title); ?>

                            </span>
                                        <span class="text-red-600 text-xs">
                                <?php echo e($query->recent_timeline_date); ?>

                            </span>
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
                                    <span class="text-xs"><?php echo e($query->human_date); ?></span>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.table.cell','data' => ['colspan' => '6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '6']); ?>
                                    <div class="text-center text-gray-400 py-4">
                                        No Query Found
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
<?php if (isset($__attributesOriginal729d2caf76c5015970936df928fe4f08)): ?>
<?php $attributes = $__attributesOriginal729d2caf76c5015970936df928fe4f08; ?>
<?php unset($__attributesOriginal729d2caf76c5015970936df928fe4f08); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal729d2caf76c5015970936df928fe4f08)): ?>
<?php $component = $__componentOriginal729d2caf76c5015970936df928fe4f08; ?>
<?php unset($__componentOriginal729d2caf76c5015970936df928fe4f08); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/query/dashboard.blade.php ENDPATH**/ ?>