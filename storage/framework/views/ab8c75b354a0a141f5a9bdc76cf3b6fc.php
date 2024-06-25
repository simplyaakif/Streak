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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => 'Recoveries Received','subtitle' => 'Admission installments received.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recoveries Received','subtitle' => 'Admission installments received.']); ?>
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
        <div class="m-2  grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
        <?php if (isset($component)) { $__componentOriginal34693c4af450526aaa48daf9e13cb3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34693c4af450526aaa48daf9e13cb3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'recovery_access','label' => 'Due Today','sublabel' => 'Recovery Amount Due Today','stat' => ''.e($amount_due_today).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'recovery_access','label' => 'Due Today','sublabel' => 'Recovery Amount Due Today','stat' => ''.e($amount_due_today).'']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.cash','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.cash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $attributes = $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $component = $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'recovery_access','label' => 'Due Month','sublabel' => 'Amount Due this Month','stat' => $amount_due_month]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'recovery_access','label' => 'Due Month','sublabel' => 'Amount Due this Month','stat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($amount_due_month)]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.cash','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.cash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $attributes = $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $component = $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'recovery_show','label' => 'Due Pending','sublabel' => 'Amount Due till today','stat' => $amount_due_pending]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'recovery_show','label' => 'Due Pending','sublabel' => 'Amount Due till today','stat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($amount_due_pending)]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.cash','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.cash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $attributes = $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $component = $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.stat-card','data' => ['can' => 'recovery_show','label' => 'Due Future','sublabel' => 'Amount Due after this Month','stat' => $amount_due_future]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'recovery_show','label' => 'Due Future','sublabel' => 'Amount Due after this Month','stat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($amount_due_future)]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.cash','data' => ['class' => 'w-6 h-6 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.cash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $attributes = $__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__attributesOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376)): ?>
<?php $component = $__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376; ?>
<?php unset($__componentOriginal7471e082b5ebd8de4f2ad8e7f58c2376); ?>
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
        <div class="mt-8">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.filament.recovery.recovery-index', [])->html();
} elseif ($_instance->childHasBeenRendered('z0XcXYs')) {
    $componentId = $_instance->getRenderedChildComponentId('z0XcXYs');
    $componentTag = $_instance->getRenderedChildComponentTagName('z0XcXYs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z0XcXYs');
} else {
    $response = \Livewire\Livewire::mount('admin.filament.recovery.recovery-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('z0XcXYs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/recovery/index.blade.php ENDPATH**/ ?>