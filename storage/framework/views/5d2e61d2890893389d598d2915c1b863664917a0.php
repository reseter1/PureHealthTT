
<?php $__env->startSection('insertView'); ?>
<?php echo $__env->make('notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(!Auth::check()): ?>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 20px ;display: flex;align-items: center;justify-content: center;">
    Bạn chưa đăng nhập, vui lòng đăng nhập và sử dụng giỏ hàng của bạn
</h1>
<?php elseif(session()->get('carts') == []): ?>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600 !important; height: 20vh; margin: 20px;display: flex;align-items: center;justify-content: center;">
    Chưa có sản phẩm nào trong giỏ hàng của bạn, hãy thêm ngay nào!
</h1>
<?php else: ?>
<div style="margin-top: -40px;">
    <div class="checkout-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="/customer/create-order" method="POST">
                        <div class="checkbox-form">
                            <h3>Thông tin đặt hàng</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Địa chỉ giao hàng (Chỉ phục vụ giao hàng khu vực TP.HCM): <span class="required">*</span></label>
                                        <label>Quận: <span class="required">*</span></label>
                                        <select name="district" id="load_district">
                                        </select>
                                        <label style="margin-top: 10px;">Phường: <span class="required">*</span></label>
                                        <select name="subDistrict" id="load_subdistrict">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Số nhà/ đường: <span class="required">*</span></label>
                                        <input name="extraAddress" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Tên người nhận: <span class="required">*</span></label>
                                        <input name="receivername" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số điện thoại người nhận:<span class="required">*</span></label>
                                        <input name="receiverphone" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;" class="order-button-payment">
                            <input value="Đặt hàng" type="submit">
                        </div>
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Thông tin sản phẩm đặt</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="cart-product-total">Tổng tiền (VND)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = session()->get('carts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $productInCart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key != 'total'): ?>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><?php echo e($productInCart['info']->productname); ?><strong class="product-quantity">
                                                × <?php echo e($productInCart['quantity']); ?>

                                                <?php echo e($productInCart['info']->unit->unitname); ?></strong></td>
                                        <td class="cart-product-total"><span class="amount"><?php echo e(number_format($productInCart['info']->price*(1-$productInCart['info']->discount/100) *(int)$productInCart['quantity'])); ?></span>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Tổng thanh toán (VND):</th>
                                        <td><strong><span class="amount"><?php echo e(number_format(session()->get('carts')['total'])); ?></span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    window.onload = function() {

        let districtList = <?php echo json_encode($address, 15, 512) ?>;
        let optionsHtml = '<option value="">Chọn quận</option>';
        $.each(districtList, function(index, district) {
            optionsHtml += `
    <option value="${district.name}">${district.name}</option>
  `;
        });

        $('#load_district').html(optionsHtml);
    }
    $("#load_district").change(function() {
        let districtName = $(this).val();
        let districtList = <?php echo json_encode($address, 15, 512) ?>;
        let subdistricts = [];

        $.each(districtList, function(index, district) {
            if (district.name === districtName) {
                subdistricts = district.wards;
                return false;
            }
        });

        let subdistrictOptionsHtml = '';

        $.each(subdistricts, function(index, subdistrict) {
            subdistrictOptionsHtml += `
            <option value="${subdistrict.name}">${subdistrict.name}</option>
        `;
        });

        $('#load_subdistrict').html(subdistrictOptionsHtml);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/customer/order.blade.php ENDPATH**/ ?>