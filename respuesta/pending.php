<?php
if (isset($_GET['collection_status']) ) {

echo '<p>ID de pago: <strong>'.$_GET['collection_id'].'</strong></p>';
echo '<p>Metodo de pago: <strong>'.$_GET['payment_type'].'</strong></p>';
echo '<h3> Su pago esta pendiente</h3>';
echo '<p>En cuanto se acredite le enviaremos un correo con los datos del envio, Gracias</p>';
echo '<p><a href="../">Seguir Comprando</a></p>';


}
?>
