<h3>Gửi khách hàng <?php echo e($username); ?>,</h3>
<div>
    <h4>Chúng tôi là bộ phận CSKH của hệ thống PureHealthTT 🥰. Hệ thống chúng tôi nhận được một yêu cầu đặt hàng của
        bạn, thông tin chi tiết về đơn hàng, bạn có thể xem tại đây (nếu bạn đang đăng nhập tài khoản của mình): <br>
        <?php echo e(env('APP_URL', 'Laravel')); ?>/customer/order-details/<?php echo e($code); ?>

        <br>Nếu đó thực sự là bạn, vui lòng nhấn
        vào liên kết
        bên dưới 👇 để xác nhận đơn đặt hàng của bạn. Lưu ý, sau khi xác nhận thì đơn hàng không thể bị hủy trừ khi bạn
        liên hệ chúng tôi qua trung tâm CSKH và trình bày lý do hủy và trước khi thực hiện xác nhận liên kết bên dưới,
        bạn phải đang đăng nhập tài khoản của mình vào hệ thống của chúng tôi:
        <br><?php echo e(env('APP_URL', 'Laravel')); ?>/customer/confirm-order/<?php echo e($code); ?> <br>🚨Nếu đó không phải là bạn, hoặc bạn muốn
        hủy đơn hàng này, vui lòng bấm vào liên kết bên dưới 👇 để xác nhận hủy: <br>
        <?php echo e(env('APP_URL', 'Laravel')); ?>/customer/cancel-order/<?php echo e($code); ?> <br>. Nếu còn bất cứ vấn đề gì khác, vui
        lòng nhắn tin trực tiếp qua số điện thoại Zalo bộ phận CSKH của chúng tôi: ☎️ 0866860918. <br>💚💚💚 Cảm ơn bạn
        đã
        quan tâm và tin dùng PureHealthTT 💚💚💚!
    </h4>
</div>
<img width="1000" height="400" src="https://photo2.tinhte.vn/data/attachment-files/2021/06/5507324_Cover_rau-cu.png" alt="">
<br><br>
<h3>-- PureHealthTT -- <br>Trân trọng. 🙆‍♀️🙆‍♂️🙆</h3><?php /**PATH /var/www/html/resources/views/mail/confirm_order_mail.blade.php ENDPATH**/ ?>