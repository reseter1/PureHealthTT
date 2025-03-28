
<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá gốc (VND)</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="/order-details/<?php echo e($order->ordercode); ?>"><?php echo e($order->ordercode); ?></a></td>
            <td><a href="/customer/product-details/<?php echo e($order->productcode); ?>"><?php echo e($order->productcode); ?></a></td>
            <td style="padding-left: 30px;"><?php echo e($order->number); ?></td>
            <td><?php echo e(number_format($order->realprice)); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/order/order_details.blade.php ENDPATH**/ ?>