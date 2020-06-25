<?php
require '../vendor/autoload.php';
 if (isset($_GET["id"], $_GET["topic"])) {
	MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');
	 return response('OK', 201);

        if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
            abort(404);
        }

       
        $payment = null;
	 
	 switch ($_GET["topic"]) {
            case "payment":
                $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
                file_put_contents('test.txt', $payment);
                
                break;
            
        }
	 
 }
?>
