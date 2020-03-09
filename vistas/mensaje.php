<?php

    include ( "../funcionesLogic/NexmoMessage.php" );
    $nexmo_sms = new NexmoMessage('10b19bc1', 'd97a8724');
    $info = $nexmo_sms->sendText( "+573145903682", 'Cicklow', 'hola como vas en el estudio');

?>