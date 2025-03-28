
<?php $__env->startSection('insertView'); ?>
<form action="/edit-order" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Ghi chú:</label>
                    <input class="form-control" type="text" name="note" value="<?php echo e($order->note); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Đơn vị</label>
                    <select name="statuscode" class="form-control" name="typecode">
                        <?php $__currentLoopData = $orderStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($order->statuscode == $status->statuscode ? "selected" : ""); ?> value="<?php echo e($status->statuscode); ?>"><?php echo e($status->description); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class=" col-md-12 btn btn-primary">Cập nhật đơn hàng</button>
    </div>
    <input type="hidden" name="ordercode" value="<?php echo e($order->ordercode); ?>">
    <?php echo csrf_field(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/admin/order/edit.blade.php ENDPATH**/ ?>