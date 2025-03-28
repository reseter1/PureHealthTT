
<?php $__env->startSection('insertView'); ?>
<div style="margin-top: -50px;" class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="/template/customer/images/banner2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="list-view" class="tab-pane fade product-list-view active show " role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="<?php echo e($product->picturelink); ?>">
                                                    <img src="<?php echo e($product->picturelink); ?>" alt="Li's Product Image">
                                                </a>
                                                <?php if(now()->diffInDays(\Carbon\Carbon::parse($product->created_at)) < 3): ?>
                                                    <span class="sticker">New</span>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a
                                                                href="/customer/type/<?php echo e($product->typecode); ?>"><?php echo e($product->type->typename); ?></a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <?php for($i = 1; $i <= 5; $i++): ?> <?php if($i
                                                                    <=$avrgRateProducts[$product->
                                                                    productcode]): ?>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <?php else: ?>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php endfor; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name"
                                                            href="/customer/product-details/<?php echo e($product->productcode); ?>"><?php echo e($product->productname); ?></a>
                                                    </h4>
                                                    <div class="price-box">
                                                        <span
                                                            class="new-price new-price-2"><?php echo e(number_format($product->price*(100-$product->discount)/100)); ?>

                                                            VND/<?php echo e($product->unit->unitname); ?></span>
                                                        <br>
                                                        <span class="old-price"><?php echo e(number_format($product->price)); ?>

                                                            VND/<?php echo e($product->unit->unitname); ?></span>
                                                        <span class="discount-percentage">Giảm
                                                            <?php echo e($product->discount); ?>%</span>
                                                    </div>
                                                    <br>
                                                    <p>Mô tả nhanh: <?php echo e($product->shortdescription); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#"
                                                            onclick="addCart('/customer/add-carts?code=<?php echo e($product->productcode); ?>&quantity=1')">Thêm
                                                            vào
                                                            giỏ</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter_<?php echo e($product->productcode); ?>"
                                                            href="#"><i class="fa fa-eye"></i>Xem nhanh</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Bộ lọc</h2>
                    </div>
                    <!-- filter-sub-area start -->
                    <form action="">
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Phân loại:</h5>
                            <div class="categori-checkbox">
                                <select style="background-color: white;" name="typeOption">
                                    <option value="0" <?php echo e($default['typeOption'] == '0' ? 'selected' : ''); ?>>Tất cả
                                    </option>
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->typecode); ?>"
                                        <?php echo e($default['typeOption'] == $type->typecode ? 'selected' : ''); ?>>
                                        <?php echo e($type->typename); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Mức giảm giá:</h5>
                            <div class="categori-checkbox">
                                <select style="background-color: white;" name="discountOption" id="">
                                    <option value="0%" <?php echo e($default['discountOption'] == '0%' ? 'selected' : ''); ?>>Không
                                        chọn</option>
                                    <option value="10%" <?php echo e($default['discountOption'] == '10%' ? 'selected' : ''); ?>>10%
                                    </option>
                                    <option value="20%" <?php echo e($default['discountOption'] == '20%' ? 'selected' : ''); ?>>20%
                                    </option>
                                    <option value="30%" <?php echo e($default['discountOption'] == '30%' ? 'selected' : ''); ?>>30%
                                    </option>
                                    <option value="40%" <?php echo e($default['discountOption'] == '40%' ? 'selected' : ''); ?>>40%
                                    </option>
                                    <option value="50%" <?php echo e($default['discountOption'] == '50%' ? 'selected' : ''); ?>>50%
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Giá thấp nhất (VND):</h5>
                            <input style="background-color: white;" type="number" name="minPrice"
                                value="<?php echo e($default['minPrice']); ?>">
                        </div>
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Giá cao nhất (VND):</h5>
                            <input style="background-color: white;" type="number" name="maxPrice"
                                value="<?php echo e($default['maxPrice']); ?>">
                        </div>
                        <button
                            style="margin: 15px 0px; width: 150px; border-radius: 5px; color:white; background-color: black;"
                            type="submit">Lọc sản phẩm</button>
                        <a style="margin-left: 15px;" href="/customer/product-list/">Xóa lọc</a>
                    </form>
                    <!-- filter-sub-area end -->
                </div>
                <!--sidebar-categores-box end  -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('quickView'); ?>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade modal-wrapper" id="exampleModalCenter_<?php echo e($product->productcode); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <img src="<?php echo e($product->picturelink); ?>" alt="product image">
                                </div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="product-details-view-content pt-60">
                            <div class="product-info">
                                <h2>Sản phẩm: <?php echo e($product->productname); ?></h2>
                                <a href="/customer/type/<?php echo e($product->typecode); ?>" class="product-details-ref">Phân loại:
                                    <?php echo e($product->type->typename); ?></a>
                                <div class="rating-box pt-20">
                                    <ul class="rating rating-with-review-item">
                                        <?php for($i = 1; $i <= 5; $i++): ?> <?php if($i <=$avrgRateProducts[$product->
                                            productcode]): ?>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <?php else: ?>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <?php endif; ?>
                                            <?php endfor; ?>
                                            <br>
                                            <li><a href="/customer/product-details/<?php echo e($product->productcode); ?>">Xem chi
                                                    tiết hơn</a></li>
                                    </ul>
                                </div>
                                <div class="price-box pt-20">
                                    <span class="new-price new-price-2">Giá giảm:
                                        <?php echo e(number_format($product->price*(100-$product->discount)/100)); ?>

                                        VND/<?php echo e($product->unit->unitname); ?></span>
                                    <br><br>
                                    <span class="old-price">Giá gốc: <?php echo e(number_format($product->price)); ?>

                                        VND/<?php echo e($product->unit->unitname); ?></span>
                                </div>
                                <div class="product-desc">
                                    <p>
                                        <span>Hiện đang giảm giá: <?php echo e($product->discount); ?>%<br> Mô tả nhanh:
                                            <?php echo e($product->shortdescription); ?>

                                        </span>
                                    </p>
                                </div>
                                <div class="single-add-to-cart">
                                    <form class="cart-quantity" id="add-to-cart-form-<?php echo e($product->code); ?>">
                                        <div class="quantity">
                                            <input type="hidden" value="<?php echo e($product->productcode); ?>" name="code">
                                            <label>Số lượng:</label>
                                            <div class="cart-plus-minus">
                                                <input name="quantity" class="cart-plus-minus-box" value="1"
                                                    type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                </div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <button class="add-to-cart" type="submit">Thêm vào giỏ</button>
                                    </form>
                                </div>
                                <div class="product-additional-info pt-25">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('paginate'); ?>
<div style="display: flex; justify-content: space-between; margin-top: -10px;" class="pagination">
    <div class="ml-2 pagination__previous">
        <?php echo $products->previousPageUrl() ? '<a href="'.$products->previousPageUrl().'">👈 Trang trước</a>' : ''; ?>

    </div>
    <div>
        <ul class="pagination__numbers" style="display: flex; list-style: none;">
            <?php
            $currentPage = $products->currentPage();
            $lastPage = $products->lastPage();
            $startPage = max($currentPage - 2, 1);
            $endPage = min($currentPage + 2, $lastPage);
            ?>

            <?php for($page = $startPage; $page <= $endPage; $page++): ?> <li
                class="<?php echo e($page == $currentPage ? 'active' : ''); ?>" style="margin-right: 10px;">
                <?php if($page == $currentPage): ?>
                <span><?php echo e($page); ?></span>
                <?php else: ?>
                <a href="<?php echo e($products->url($page)); ?>"><?php echo e($page); ?></a>
                <?php endif; ?>
                </li>
                <?php endfor; ?>
        </ul>
    </div>
    <div class="mr-2 pagination__next">
        <?php echo $products->nextPageUrl() ? '<a href="'.$products->nextPageUrl().'">Trang tiếp 👉</a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /workspaces/codespaces-blank/PureHealthTTLaravelEC/resources/views/customer/product_list.blade.php ENDPATH**/ ?>