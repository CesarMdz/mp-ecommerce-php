<?php

require '../vendor/autoload.php';

	MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

      $id = isset($_POST["id"]) ? $_POST["id"] : null;
$topic = isset($_POST["type"]) ? $_POST["type"] : null;

  if(isset($_POST['type']){
	  echo 'Se recibio algo';
  }else{
  	echo 'no se recibio nada';
  }
?>


