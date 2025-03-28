

<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th style="min-width: 100px;">Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Phân loại</th>
            <th>Mô tả ngắn</th>
            <th style="min-width: 200px;">Mô tả đầy đủ</th>
            <th>Giá gốc (VND)</th>
            <th style="min-width: 100px;">Giảm giá (%)</th>
            <th>Đơn vị</th>
            <th>Trạng thái</th>
            <th style="width: 100px">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="/customer/product-details/<?php echo e($product->productcode); ?>"><?php echo e($product->productcode); ?></a></td>
            <td style="min-width: 100px;"><?php echo e($product->productname); ?></td>
            <td>
                <a href="<?php echo e($product->picturelink); ?>">
                    <img src="<?php echo e($product->picturelink); ?>" width="100px">
                </a>
            </td>
            <td><?php echo e($product->type->typename); ?></td>
            <td><?php echo e($product->shortdescription); ?></td>
            <td style="min-width: 200px;"><?php echo e($product->description); ?></td>
            <td><?php echo e(number_format($product->price)); ?></td>
            <td style="min-width: 100px;"><?php echo e($product->discount); ?></td>
            <td><?php echo e($product->unit->unitname); ?></td>
            <?php if($product->active == 1): ?>
            <td><span class=" btn btn-success btn-xs">ACTIVE</span></td>
            <?php else: ?>
            <td> <span class="btn btn-danger btn-xs">INACTIVE</span></td>
            <?php endif; ?>
            <td>
                <a class="btn btn-primary btn-sm" href="/edit-product/<?php echo e($product->productcode); ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('<?php echo e($product->productcode); ?>', '/delete-product')">
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
        <?php echo $products->previousPageUrl() ? '<a href="'.$products->previousPageUrl().'">👈 Trang trước</a>' : ''; ?>

    </div>
    <div>
        <ul class="pagination__numbers" style="display: flex; list-style: none;">
            <?php
            $currentPage = $products->currentPage();
            $lastPage = $products->lastPage();
            $startPage = max($currentPage - 2, 1);
            $endPage = min($currentPage + 2, $lastPage);
            ?>

            <?php for($page = $startPage; $page <= $endPage; $page++): ?> <li class="<?php echo e($page == $currentPage ? 'active' : ''); ?>" style="margin-right: 10px;">
                <?php if($page == $currentPage): ?>
                <span><?php echo e($page); ?></span>
                <?php else: ?>
                <a href="<?php echo e($products->url($page)); ?>"><?php echo e($page); ?></a>
                <?php endif; ?>
                </li>
                <?php endfor; ?>
        </ul>
    </div>
    <div class="mr-2 pagination__next">
        <?php echo $products->nextPageUrl() ? '<a href="'.$products->nextPageUrl().'">Trang tiếp 👉</a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/product/list.blade.php ENDPATH**/ ?>