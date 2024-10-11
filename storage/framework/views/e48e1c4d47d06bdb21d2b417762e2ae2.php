<?php $__env->startSection('content'); ?>
<div class="row">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.common.ph-section-header','data' => ['title' => 'Students List','subtitle' => 'All the active students list']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.ph-section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Students List','subtitle' => 'All the active students list']); ?>
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
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_create')): ?>
            <a class="btn btn-indigo" href="<?php echo e(route('admin.students.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.student.title_singular')); ?>

            </a>
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
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.student.student-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-1984167300-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/admin/student/index.blade.php ENDPATH**/ ?>