

<?php $__env->startSection('insertView'); ?>
<form action="/add-type" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Tên phân loại</label>
                    <input type="text" name="typename" value="<?php echo e(old('typename')); ?>" class="form-control" placeholder="Nhập tên phân loại">
                </div>
            </div>

        </div>

        <div class="form-group">
            <label>Mô tả phân loại</label>
            <textarea name="description" class="form-control"><?php echo e(old('description')); ?></textarea>
        </div>

        <div class="form-group">
            <label>Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary col-md-12">Thêm phân loại</button>
    </div>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/type/add.blade.php ENDPATH**/ ?>