<?php
require '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-2715478544766023-091119-711c045e5944e37e1443f14c75c16049-147706667");

if (!isset($_POST["data_id"], $_POST["type"]) || !ctype_digit($_POST["data_id"])) {
    http_response_code(400);
    return;
}
switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        print_r($payment);
        return response('OK', 201);
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
        return response('OK', 201);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
        return response('OK', 201);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
        return response('OK', 201);
        break;
}

?>
