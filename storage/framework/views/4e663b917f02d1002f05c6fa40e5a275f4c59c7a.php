
<?php $__env->startSection('insertView'); ?>
<div style="position: relative; top: -1vw;" class="li-section-title">
    <h2>
        <span style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important;"><?php echo e($title); ?></span>
    </h2>
</div>
<?php if(session()->has('error') || session()->has('success') ||$errors->any()): ?>
<h2 style="margin: 10px auto;display: flex;align-items: center;justify-content: center;">
    <?php echo $__env->make('notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</h2>
<?php endif; ?>
<?php if(Auth::check()): ?>
<div style="display: flex; justify-content: center; margin-bottom: 15px;">
    <form action="/customer/change-password" method="POST">
        <div style="max-width: 1000px;" class="login-form">
            <h4 class="login-title">Đổi mật khẩu</h4>
            <div class="row">
                <div class="col-md-12 col-12 mb-20">
                    <label>Email tài khoản: </label>
                    <input class="mb-0" type="text" value="<?php echo e(Auth::user()->email); ?>" disabled>
                </div>
                <div class="col-md-12 col-12 mb-20">
                    <label>Tên người dùng: </label>
                    <input class="mb-0" name="username" type="text" value="<?php echo e(Auth::user()->username); ?>" readonly>
                </div>
                <div class="col-md-12 col-12 mb-20">
                    <label>Mật khẩu cũ: </label>
                    <input class="mb-0" name="oldPassword" type="password" placeholder="Nhập mật khẩu cũ">
                </div>
                <div class="col-md-12 col-12 mb-20">
                    <label>Mật khẩu mới: </label>
                    <input class="mb-0" name="newPassword" type="password" placeholder="Nhập mật khẩu mới">
                </div>
                <div class="col-md-12 col-12 mb-20">
                    <label>Xác nhận mật khẩu: </label>
                    <input class="mb-0" name="newPassword_confirmation" type="password" placeholder="Xác nhận mật khẩu">
                </div>
                <div class="col-md-12">
                    <button class="register-button mt-0">Đổi mật khẩu</button>
                </div>
            </div>
        </div>
        <?php echo csrf_field(); ?>
    </form>
</div>
<?php else: ?>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 20px auto;display: flex;align-items: center;justify-content: center;">
    Bạn chưa đăng
    nhập
</h1>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspace/PureHealthTT/resources/views/customer/change_password.blade.php ENDPATH**/ ?>