<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>

    <link rel="stylesheet" href="<?php echo e(asset('css/student.css')); ?>"/>
    <title><?php echo e(trans('panel.site_title')); ?></title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">



    <script src="<?php echo e(asset('js/components.js')); ?>"></script>



    <style>
        [x-cloak] { display: none !important; }
    </style>

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notifications')->html();
} elseif ($_instance->childHasBeenRendered('V3odZLQ')) {
    $componentId = $_instance->getRenderedChildComponentId('V3odZLQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('V3odZLQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V3odZLQ');
} else {
    $response = \Livewire\Livewire::mount('notifications');
    $html = $response->html();
    $_instance->logRenderedChild('V3odZLQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</head>

<body class="text-blueGray-800 antialiased">

<noscript>You need to enable JavaScript to run this app.</noscript>

<div id="app">
    <div x-data="{ open: false }" @keydown.window.escape="open = false"
         class="relative h-screen flex overflow-hidden bg-gray-100">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="flex-1 overflow-auto focus:outline-none">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>

            <div class="bg-white ">
                <div class="max-w-6xl p-2 px-8 flex justify-between text-sm text-gray-500 mx-auto">

                    <div>
                        Ace American Center of English
                    </div>
                    <div class="flex items-center">

                    Made with <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.heart','data' => ['class' => 'w-5 mx-2 h-5 text-red-600','bold' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.heart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 mx-2 h-5 text-red-600','bold' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> by <span
                            class="ml-1 text-gray-700">
                         App Soulz
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="logoutform" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo e(csrf_field()); ?>

</form>
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

<script src="<?php echo e(mix('js/filament.js')); ?>" defer></script>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-spotlight')->html();
} elseif ($_instance->childHasBeenRendered('uFZpOJL')) {
    $componentId = $_instance->getRenderedChildComponentId('uFZpOJL');
    $componentTag = $_instance->getRenderedChildComponentTagName('uFZpOJL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uFZpOJL');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-spotlight');
    $html = $response->html();
    $_instance->logRenderedChild('uFZpOJL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo $__env->yieldContent('scripts'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>










</body>
</html>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/layouts/admin.blade.php ENDPATH**/ ?>