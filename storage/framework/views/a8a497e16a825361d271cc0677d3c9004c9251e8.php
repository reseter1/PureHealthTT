

<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Tên đơn vị hàng</th>
            <th>Mô tả</th>
            <th style="width: 100px">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($unit->unitcode); ?></td>
            <td style="padding-left: 2vw;"><?php echo e($unit->unitname); ?></td>
            <td><?php echo e($unit->description); ?></td>
            <td>
                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('<?php echo e($unit->unitcode); ?>', '/delete-unit')">
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
        <?php echo $units->previousPageUrl() ? '<a href="'.$types->previousPageUrl().'">
            👈 Trang trước
        </a>' : ''; ?>

    </div>
    <div class="mr-2 pagination__next">
        <?php echo $units->nextPageUrl() ? '<a href="'.$types->nextPageUrl().'">
            Trang tiếp 👉
        </a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/unit/list.blade.php ENDPATH**/ ?>