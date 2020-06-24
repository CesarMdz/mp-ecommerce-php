<?php
require '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-2715478544766023-091119-711c045e5944e37e1443f14c75c16049-147706667");

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
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
