<?php
require '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-2715478544766023-091119-711c045e5944e37e1443f14c75c16049-147706667");

$payment = isset($_POST["payment_id"]) ? MercadoPago\Payment::find_by_id($_POST["payment_id"]) : NULL;
$merchant_order = isset($_POST["merchant_order_id"]) ? MercadoPago\MerchantOrder::find_by_id($_POST["merchant_order_id"]) : NULL;

if($merchant_order === NULL){
    if( isset($_POST["payment_id"]) ){
        $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order_id);
        print_r( $merchant_order);
    }else{
        echo 'Error datos faltantes!!';
        die();
    }
}




?>
