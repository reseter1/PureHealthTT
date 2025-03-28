
<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Mã khách hàng</th>
            <th>Tên người nhận</th>
            <th>SĐT người nhận</th>
            <th>Địa chỉ nhận</th>
            <th>Ghi chú</th>
            <th style="width: 100px;">Tổng tiền (VND)</th>
            <th>Trạng thái</th>
            <th style="width: 100px">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="/order-details/<?php echo e($order->ordercode); ?>"><?php echo e($order->ordercode); ?></a></td>
            <td><a href="/user-details/<?php echo e($order->customercode); ?>"><?php echo e($order->customercode); ?></a></td>
            <td><?php echo e($order->receivername); ?></td>
            <td><?php echo e($order->receiverphone); ?></td>
            <td><?php echo e($order->shipaddress); ?></td>
            <td><?php echo e($order->note); ?></td>
            <td><?php echo e(number_format($order->total)); ?></td>
            <?php if($order->statuscode == 'OS1'): ?>
            <td><span style="background-color: blue;" class="btn btn-xs">WAIT</span></td>
            <?php elseif($order->statuscode == 'OS2'): ?>
            <td><span style="background-color: coral;" class="btn btn-xs">AUTH</span></td>
            <?php elseif($order->statuscode == 'OS3'): ?>
            <td><span style="background-color: blueviolet;" class="btn btn-xs">CHECKOUT</span></td>
            <?php elseif($order->statuscode == 'OS4'): ?>
            <td><span style="background-color: lime;" class="btn btn-xs">COMPLETE</span></td>
            <?php elseif($order->statuscode == 'OS5'): ?>
            <td><span style="background-color: red;" class="btn btn-xs">CANCEL</span></td>
            <?php endif; ?>
            <td>
                <a class="btn btn-primary btn-sm" href="/edit-order/<?php echo e($order->ordercode); ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('<?php echo e($order->ordercode); ?>', '/delete-order')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('paginate'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/order/list.blade.php ENDPATH**/ ?>