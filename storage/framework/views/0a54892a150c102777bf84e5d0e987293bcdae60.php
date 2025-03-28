

<?php $__env->startSection('insertView'); ?>
<form action="/change-password" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="brandName">Tên đăng nhập</label>
                    <input type="text" name="username" value="<?php echo e($username); ?>" class="form-control" readonly>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="brandName">Email</label>
                    <input type="text" name="email" value="<?php echo e($email); ?>" class="form-control" disabled>
                </div>
            </div>

        </div>

        <div class="form-group">
            <label>Mật khẩu cũ</label>
            <input type="password" name="oldPassword" class="form-control" placeholder="Nhập mật khẩu cũ"></input>
        </div>

        <div class="form-group">
            <label>Mật khẩu mới</label>
            <input type="password" name="newPassword" class="form-control" placeholder="Nhập mật khẩu mới"></input>
        </div>

        <div class="form-group">
            <label>Xác nhận mật khẩu</label>
            <input type="password" name="newPassword_confirmation" class="form-control" placeholder="Xác nhận mật khẩu"></input>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary col-md-12">Cập nhật</button>
    </div>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/user/change_password.blade.php ENDPATH**/ ?>