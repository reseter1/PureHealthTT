

<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Tên phân loại</th>
            <th>Mô tả phân loại</th>
            <th>Trạng thái</th>
            <th style="width: 100px">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($type->typecode); ?></td>
            <td><?php echo e($type->typename); ?></td>
            <td><?php echo e($type->description); ?></td>
            <?php if($type->active == 1): ?>
            <td><span style="margin-left: 0.4vw;" class=" btn btn-success btn-xs">ACTIVE</span></td>
            <?php else: ?>
            <td> <span style="margin-left: 0.4vw;" class=" btn btn-danger btn-xs">INACTIVE</span></td>
            <?php endif; ?>
            <td>
                <a class="btn btn-primary btn-sm" href="/edit-type/<?php echo e($type->typecode); ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('<?php echo e($type->typecode); ?>', 'delete-type')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('paginate'); ?>
<div style="display: flex;
    justify-content: space-between; margin-top: -10px;" class="pagination">
    <div class="ml-2 pagination__previous">
        <?php echo $types->previousPageUrl() ? '<a href="'.$types->previousPageUrl().'">
            👈 Trang trước
        </a>' : ''; ?>

    </div>
    <div class="mr-2 pagination__next">
        <?php echo $types->nextPageUrl() ? '<a href="'.$types->nextPageUrl().'">
            Trang tiếp 👉
        </a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/type/list.blade.php ENDPATH**/ ?>