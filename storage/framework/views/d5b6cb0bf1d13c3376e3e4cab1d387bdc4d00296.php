
<?php $__env->startSection('insertView'); ?>
<div style="margin: 10px;">
    <label for="">Mã số: <?php echo e($user->usercode); ?></label>
    <br>
    <label for="">Tên người dùng: <?php echo e($user->username); ?></label>
    <br>
    <label for="">Email: <?php echo e($user->email); ?></label>
    <br>
    <label for="">Điện thoại: <?php echo e($user->phone); ?></label>
    <br>
    <label for="">Ngày sinh: <?php echo e(\Carbon\Carbon::parse($user->birthday)->format('d-m-Y')); ?></label>
    <br>
    <label for="">Phân quyền: <?php echo e($user->role == 1 ? 'Quản trị viên' : 'Khách hàng'); ?></label>
    <br>
    <label for="">Trạng thái: <?php echo e($user->active == 1 ? 'Kích hoạt' : 'Không kích hoạt'); ?></label>
    <br>
    <label for="">Thời gian tạo: <?php echo e($user->created_at); ?></label>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/user/details.blade.php ENDPATH**/ ?>