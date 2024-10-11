<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>


    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/filament/support/support.css')); ?>"/>

    <title><?php echo e(config('app.name')); ?></title>
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

    <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-667336964-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</head>

<body class="text-blueGray-800 antialiased">

<noscript>You need to enable JavaScript to run this app.</noscript>

<div id="app">
    <div x-data="{ open: false }" @keydown.window.escape="open = false"
         class="relative h-screen flex overflow-hidden bg-gray-100">
        <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
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
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>

        <div class="flex-1 overflow-auto focus:outline-none">
            <?php if (isset($component)) { $__componentOriginalff09156f73c896030ee75284e9b2c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff09156f73c896030ee75284e9b2c466 = $attributes; } ?>
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
<?php if (isset($__attributesOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $attributes = $__attributesOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__attributesOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $component = $__componentOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__componentOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>

            <div class="bg-white ">
                <div class="max-w-6xl p-2 px-8 flex justify-between text-sm text-gray-500 mx-auto">

                    <div>
                        Ace American Center of English
                    </div>
                    <div class="flex items-center">

                    Made with <?php if (isset($component)) { $__componentOriginala8a696c0067ca4fbabcc40e90c22e3a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8a696c0067ca4fbabcc40e90c22e3a2 = $attributes; } ?>
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
<?php if (isset($__attributesOriginala8a696c0067ca4fbabcc40e90c22e3a2)): ?>
<?php $attributes = $__attributesOriginala8a696c0067ca4fbabcc40e90c22e3a2; ?>
<?php unset($__attributesOriginala8a696c0067ca4fbabcc40e90c22e3a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8a696c0067ca4fbabcc40e90c22e3a2)): ?>
<?php $component = $__componentOriginala8a696c0067ca4fbabcc40e90c22e3a2; ?>
<?php unset($__componentOriginala8a696c0067ca4fbabcc40e90c22e3a2); ?>
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


<?php echo $__env->yieldContent('scripts'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>










</body>
</html>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/layouts/admin.blade.php ENDPATH**/ ?>