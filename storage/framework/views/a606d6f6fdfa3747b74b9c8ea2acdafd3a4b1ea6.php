<?php $__env->startComponent('mail::message'); ?>
# Welcome

Hello, <?php echo e($data['name']); ?>, <br/>
Your Employee Account has been created Successfully. <br/>


## You may login using following details.

Username: <b><?php echo e($data['email']); ?></b> <br/>
Password: <b><?php echo e($data['password']); ?></b> <br/>

This is a system generated password. We recommend you to change it. <br/>

To login click here.
<?php $__env->startComponent('mail::button', ['url' => route('admin.home')]); ?>
Login to Employee Portal
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/emails/employee-create-notification.blade.php ENDPATH**/ ?>