<?php $__env->startComponent('mail::message'); ?>
# Introduction

Hello, <?php echo e($details['name']); ?>, <br/>
Your Student Account has been created Successfully. <br/>


## You may login using following details.

Username: <b><?php echo e($details['email']); ?></b> <br/>
Password: <b><?php echo e($details['password']); ?></b> <br/>

This is a system generated password. We recommend you to change it. <br/>

To login click here.
<?php $__env->startComponent('mail::button', ['url' => route('student.dashboard')]); ?>
Login to Student Portal
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/emails/student-user-details.blade.php ENDPATH**/ ?>