<?php

if (isset($_GET['collection_status']) and isset($_GET['collection_id'])and isset($_GET['external_reference'])) {

    echo '<p>ID de pago: <strong>'.$_GET['collection_id'].'</strong></p>';
    echo '<p>Metodo de pago: <strong>'.$_GET['payment_type'].'</strong></p>';
    echo '<p>Referencia Externa: <strong>'.$_GET['external_reference'].'</strong></p>';
    echo '<h3> Su pago a sido aprobado</h3>';
    echo '<p><a href="../">Seguir Comprando</a></p>';


}
?>
