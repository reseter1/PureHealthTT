
<?php $__env->startSection('insertView'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Phân quyền</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="/user-details/<?php echo e($user->usercode); ?>"><?php echo e($user->usercode); ?></a></td>
            <td><?php echo e($user->username); ?></td>
            <td><?php echo e($user->email); ?></td>
            <?php if($user->role == 1): ?>
            <td>Quản trị viên</td>
            <?php else: ?>
            <td>Khách hàng</td>
            <?php endif; ?>
            <?php if($user->active == 1): ?>
            <td><span class=" btn btn-success btn-xs">ACTIVE</span></td>
            <?php else: ?>
            <td> <span class="btn btn-danger btn-xs">INACTIVE</span></td>
            <?php endif; ?>
            <td>
                <a class="btn btn-primary btn-sm" href="/change-user/<?php echo e($user->usercode); ?>">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="removeRow('<?php echo e($user->usercode); ?>', '/delete-user')">
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
        <?php echo $users->previousPageUrl() ? '<a href="'.$users->previousPageUrl().'">👈 Trang trước</a>' : ''; ?>

    </div>
    <div>
        <ul class="pagination__numbers" style="display: flex; list-style: none;">
            <?php
            $currentPage = $users->currentPage();
            $lastPage = $users->lastPage();
            $startPage = max($currentPage - 2, 1);
            $endPage = min($currentPage + 2, $lastPage);
            ?>

            <?php for($page = $startPage; $page <= $endPage; $page++): ?> <li class="<?php echo e($page == $currentPage ? 'active' : ''); ?>" style="margin-right: 10px;">
                <?php if($page == $currentPage): ?>
                <span><?php echo e($page); ?></span>
                <?php else: ?>
                <a href="<?php echo e($users->url($page)); ?>"><?php echo e($page); ?></a>
                <?php endif; ?>
                </li>
                <?php endfor; ?>
        </ul>
    </div>
    <div class="mr-2 pagination__next">
        <?php echo $users->nextPageUrl() ? '<a href="'.$users->nextPageUrl().'">Trang tiếp 👉</a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/user/list.blade.php ENDPATH**/ ?>