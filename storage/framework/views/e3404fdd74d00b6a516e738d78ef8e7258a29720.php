
<?php $__env->startSection('insertView'); ?>
<div style="position: relative; top: -1vw;" class="li-section-title">
    <h2>
        <span style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important;"><?php echo e($title); ?></span>
    </h2>
</div>
<div style="margin-top: -40px;" class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Mã sản phẩm</th>
                                <th>Số lượng mua</th>
                                <th>Giá gốc (VND)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order->ordercode); ?>

                                </td>
                                <td><a href="/customer/product-details/<?php echo e($order->productcode); ?>"><?php echo e($order->productcode); ?></a>
                                </td>
                                <td><?php echo e($order->number); ?>

                                </td>
                                <td><?php echo e(number_format($order->realprice)); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspace/PureHealthTT/resources/views/customer/order_details.blade.php ENDPATH**/ ?>