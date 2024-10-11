<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/student.css')); ?>" />
    <title><?php echo e(config('app.name')); ?></title>
</head>

<body class="h-full">
        <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/layouts/app.blade.php ENDPATH**/ ?>