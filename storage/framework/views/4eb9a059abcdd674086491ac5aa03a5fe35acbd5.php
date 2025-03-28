
<?php $__env->startSection('insertView'); ?>
<div style="position: relative; top: -1vw;" class="li-section-title">
    <h2>
        <span
            style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important;"><?php echo e($title); ?></span>
    </h2>
</div>
<div style="display: flex; justify-content: center;" style="margin: -40px;">
    <iframe src="/Policy.pdf" style="height: 600px;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/customer/policy.blade.php ENDPATH**/ ?>