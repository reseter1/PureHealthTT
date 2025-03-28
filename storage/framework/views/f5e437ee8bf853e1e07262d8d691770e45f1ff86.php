
<?php $__env->startSection('insertView'); ?>
<div style="position: relative; top: -1vw;" class="li-section-title">
    <h2>
        <span style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important;"><?php echo e($title); ?></span>
    </h2>
</div>
<?php if(!Auth::check()): ?>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 20px auto;display: flex;align-items: center;justify-content: center;">
    Bạn chưa đăng nhập, vui lòng đăng nhập và để xem những đơn hàng của bạn
</h1>
<?php elseif(!session()->has('hasOrder')): ?>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 40px;display: flex;align-items: center;justify-content: center;">
    Bạn chưa đặt bất kỳ đơn hàng nào, hãy chọn những sản phẩm thêm vào giỏ hàng và đặt hàng ngay nào!
</h1>
<?php else: ?>
<div style="margin-top: -40px;" class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên người nhận</th>
                                <th>Số điện thoại người nhận</th>
                                <th>Địa chỉ nhận hàng</th>
                                <th>Ghi chú</th>
                                <th>Tổng thanh toán (VND)</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="/customer/order-details/<?php echo e($order->ordercode); ?>"><?php echo e($order->ordercode); ?></a>
                                </td>
                                <td><?php echo e($order->receivername); ?></td>
                                <td><?php echo e($order->receiverphone); ?></td>
                                <td><?php echo e($order->shipaddress); ?></td>
                                <td><?php echo e($order->note); ?></td>
                                <td><?php echo e(number_format($order->total)); ?></td>
                                <?php if($order->statuscode == 'OS2'): ?>
                                <td><a href="/customer/checkout/<?php echo e($order->ordercode); ?>"><?php echo e($order->orderStatus->description); ?></a>
                                </td>
                                <?php else: ?>
                                <td><?php echo e($order->orderStatus->description); ?></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('paginate'); ?>
<?php if(session()->has('hasOrder')): ?>
<div style="display: flex; justify-content: space-between; margin-top: -10px;" class="pagination">
    <div class="ml-2 pagination__previous">
        <?php echo $orders->previousPageUrl() ? '<a href="'.$orders->previousPageUrl().'">👈 Trang trước</a>' : ''; ?>

    </div>
    <div>
        <ul class="pagination__numbers" style="display: flex; list-style: none;">
            <?php
            $currentPage = $orders->currentPage();
            $lastPage = $orders->lastPage();
            $startPage = max($currentPage - 2, 1);
            $endPage = min($currentPage + 2, $lastPage);
            ?>

            <?php for($page = $startPage; $page <= $endPage; $page++): ?> <li class="<?php echo e($page == $currentPage ? 'active' : ''); ?>" style="margin-right: 10px;">
                <?php if($page == $currentPage): ?>
                <span><?php echo e($page); ?></span>
                <?php else: ?>
                <a href="<?php echo e($orders->url($page)); ?>"><?php echo e($page); ?></a>
                <?php endif; ?>
                </li>
                <?php endfor; ?>
        </ul>
    </div>
    <div class="mr-2 pagination__next">
        <?php echo $orders->nextPageUrl() ? '<a href="'.$orders->nextPageUrl().'">Trang tiếp 👉</a>' : ''; ?>

    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/customer/order_list.blade.php ENDPATH**/ ?>