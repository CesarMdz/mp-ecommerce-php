<?php
require '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-2715478544766023-091119-711c045e5944e37e1443f14c75c16049-147706667");

switch($_POST["type"]) {
            case "payment":
                $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
                break;
            case "plan":
                $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
                break;
            case "subscription":
                $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
                break;
            case "invoice":
                $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                break;
        }
        
        if (isset($payment) || $payment != NULL){
            $cart_id = explode('_', $payment['external_reference']);

            $order = new Order((int)Order::getOrderByCartId((int)$cart_id[1]));
            $current_state = (int)$order->getCurrentState();

            switch($payment['status']){
                case 'approved':
                    $order_state ="PS_OS_PAYMENT";
                    $mensaje="El Pago ha sido aprobado y acreditado";
                    break;
                case 'pending' || 'authorized' || 'in_process':
                    $order_state ="MERCADOPAGO_PENDING";
                    $mensaje ="El Pago se encuentra Pendiente de Validación";
                    break;
                case 'rejected':
                     $order_state ="MERCADOPAGO_REJECTED";
                    $mensaje ="El Pago ha sido rechazado.";
                    break;
                default:
                    $order_state ="MERCADOPAGO_FAILED";
                    $mensaje ="El proceso de pago ha fallado.";
                    break;                        
            }
            if($current_state!=Configuration::get($order_state)) $order->setCurrentState((int)Configuration::get($order_state));
        }
        exit();  



?>
