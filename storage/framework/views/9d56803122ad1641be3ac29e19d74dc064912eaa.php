<?php if($errors->any()): ?>
<div id="error-alert" class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div id="error-alert" class="alert alert-danger">
    <?php echo e(Session::get('error')); ?>

</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div id="success-alert" class="alert alert-primary">
    <ul>
        <li><?php echo e(session()->get('success')); ?></li>
    </ul>
</div>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/notification.blade.php ENDPATH**/ ?>