
<?php $__env->startSection('insertView'); ?>
<div style=" margin-bottom:20px; display: flex; justify-content: center;">
    <div style=" max-width: 500px; width: 90vw; " class="contact-page-side-content">
        <h3 class="contact-page-title">Kết quả thanh toán đơn hàng</h3>
        <p class="contact-page-message mb-25">Mã đơn hàng: <?php echo e($order->ordercode); ?> <br> Tên người nhận:
            <?php echo e($order->receivername); ?> <br>Tổng thanh toán:
            <?php echo e(number_format($order->total)); ?> VND <br>Kết quả thanh toán:
            <?php if($result == 'Thanh toán thành công'): ?>
        <p style="color: lime; margin-top: -25px;"><?php echo e($result); ?></p>
        <?php else: ?>
        <p style="color: red; margin-top: -25px;"><?php echo e($result); ?></p>
        <?php endif; ?>
        </p>
        <div class="single-contact-block">
            <h4><i class="fa fa-fax"></i> Địa chỉ giao hàng:</h4>
            <p><?php echo e($order->shipaddress); ?></p>
        </div>
        <div class="single-contact-block">
            <h4><i class="fa fa-phone"></i> Số điện thoại người nhận hàng:</h4>
            <p><?php echo e($order->receiverphone); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/customer/checkout_result.blade.php ENDPATH**/ ?>