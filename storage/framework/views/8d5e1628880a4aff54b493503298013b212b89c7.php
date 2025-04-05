
<?php $__env->startSection('insertView'); ?>
<h1
    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 40px;display: flex;align-items: center;justify-content: center;">
    <?php echo e($message); ?>

</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspace/PureHealthTT/resources/views/customer/confirm_order.blade.php ENDPATH**/ ?>