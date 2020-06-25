<?php

require 'vendor/autoload.php';

	MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

     $payment = '{ello:friend}';
            write_json_log($payment,"./log/webhooksTest-PaymentStandard-".$id."-out-".date('Y-m-d').".json");
         

     
    

    function write_json_log($content, $file){
    	
        try {
            //file_fix_directory(dirname($file));
    
            if (gettype($content) == 'string') {
                $json = json_encode(array('data' => json_decode($content, true)), JSON_PRETTY_PRINT);
                file_put_contents("php://stderr", $json);
                if (file_put_contents($file, $json)) {
                    return true;
                }
            } else {
                $json = json_encode(array('data' => $content), JSON_PRETTY_PRINT);
                file_put_contents("php://stderr", $json);
                if (file_put_contents($file, $json)) {
                    return true;
                }
            }
            return false;
        } catch (Exception $e) {
            write_general_log($content, $file);
        }
    }

    function write_general_log($content, $file){
    	
        try {
            $general = dirname($file) . "general.log";
    
            //file_fix_directory(dirname($file));
    
            if (gettype($content) == 'string') {
                $json = json_encode(array('file' => $file, 'data' => json_decode($content, true)), JSON_PRETTY_PRINT);
                //error_log($json);
                file_put_contents("php://stderr", $json,FILE_APPEND);
                if (file_put_contents($general, $json, LOCK_EX)) {
                    return true;
                }
            } else {
                $json = json_encode(array('file' => $file, 'data' => $content), JSON_PRETTY_PRINT);
                //error_log($json);
                file_put_contents("php://stderr", $json,FILE_APPEND);
                if (file_put_contents($general, $json, LOCK_EX)) {
                    return true;
                }
            }
            return false;
        } catch (Exception $e) {
            file_fix_directory(dirname($file));
            echo($e->getMessage);
        }
    }

?>


