

<?php $__env->startSection('insertView'); ?>
<form action="/add-product" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="productname" value="<?php echo e(old('productname')); ?>" class="form-control"
                        placeholder="Nhập tên sản phẩm">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phân loại</label>
                    <select name="typecode" class="form-control" name="typecode">
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->typecode); ?>"><?php echo e($type->typename); ?> (<?php echo e($type->description); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Giá Gốc (VND)</label>
                    <input type="number" name="price" value="<?php echo e(old('price')); ?>" class="form-control"
                        placeholder="Vui lòng nhập số nguyên, ví dụ: 100000">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Giảm giá (%)</label>
                    <input type="number" name="discount" value="<?php echo e(old('discount')); ?>" class="form-control"
                        placeholder="Vui lòng nhập giá trị từ 0 - 100">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mô Tả </label>
                    <input type="text" name="shortdescription" class="form-control"
                        placeholder="Nhập vào mô tả tổng quát về sản phẩm"
                        value="<?php echo e(old('shortdescription')); ?>"></input>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Đơn vị</label>
                    <select name="unitcode" class="form-control" name="typecode">
                        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($unit->unitcode); ?>"><?php echo e($unit->unitname); ?> (<?php echo e($unit->description); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="description" id="description" class="form-control"
                placeholder="Nhập mô tả chi tiết về sản phẩm"><?php echo e(old('description')); ?></textarea>
        </div>

        <div class="form-group">
            <label>Ảnh Sản Phẩm</label>
            <input type="file" accept="image/jpeg, image/png" class="form-control" id="upload_img">
            <div class="mt-2" id="image_show">
            </div>
            <input type="hidden" name="picturelink" id="thumb">
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
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
        <button type="submit" class=" col-md-12 btn btn-primary">Thêm sản phẩm</button>
    </div>
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/product/add.blade.php ENDPATH**/ ?>