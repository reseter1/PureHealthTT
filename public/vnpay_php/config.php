<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vnp_TmnCode = "COGGW4SF"; //Website ID in VNPAY System
$vnp_HashSecret = "U6QF7TRH40DGY39WSJXLOU13S2E1UGTP"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "https://purehealth.reseter.space/customer/checkout-result";
$vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
