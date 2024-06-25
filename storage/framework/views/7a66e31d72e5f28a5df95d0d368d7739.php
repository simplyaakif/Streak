
<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div x-data="{features:false}" class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center justify-center flex-shrink-0 px-4">



                <div class="w-full text-center mx-auto">
                <?php if (isset($component)) { $__componentOriginal6643649c5a42e02b6eb29accffdf0a0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6643649c5a42e02b6eb29accffdf0a0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo-ace','data' => ['class' => 'h-12 mx-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('logo-ace'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-12 mx-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6643649c5a42e02b6eb29accffdf0a0c)): ?>
<?php $attributes = $__attributesOriginal6643649c5a42e02b6eb29accffdf0a0c; ?>
<?php unset($__attributesOriginal6643649c5a42e02b6eb29accffdf0a0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6643649c5a42e02b6eb29accffdf0a0c)): ?>
<?php $component = $__componentOriginal6643649c5a42e02b6eb29accffdf0a0c; ?>
<?php unset($__componentOriginal6643649c5a42e02b6eb29accffdf0a0c); ?>
<?php endif; ?>
                </div>








            </div>
            <?php if (isset($component)) { $__componentOriginalbb3349b598d885be3d442dcb9dde8762 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb3349b598d885be3d442dcb9dde8762 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb3349b598d885be3d442dcb9dde8762)): ?>
<?php $attributes = $__attributesOriginalbb3349b598d885be3d442dcb9dde8762; ?>
<?php unset($__attributesOriginalbb3349b598d885be3d442dcb9dde8762); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb3349b598d885be3d442dcb9dde8762)): ?>
<?php $component = $__componentOriginalbb3349b598d885be3d442dcb9dde8762; ?>
<?php unset($__componentOriginalbb3349b598d885be3d442dcb9dde8762); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/sidebar.blade.php ENDPATH**/ ?>