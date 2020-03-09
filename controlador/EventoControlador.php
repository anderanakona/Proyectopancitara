<?php 


include_once "../modelo/EventoDao.php";
 include ( "../funcionesLogic/NexmoMessage.php" );


/**
 * 
 */
class EventoControlador
{
	
	 public  function crearevento($nombre, $descripcion, $id_usuario, $imagen, $fecha_evento){

foreach (EventoDao::getTelefono() as $filas) {
    # code...
        $nexmo_sms = new NexmoMessage('10b19bc1', 'd97a8724');
    $info = $nexmo_sms->sendText($filas['telefono'], 'Cicklow', $nombre.' '.$descripcion.' '.$fecha_evento);
}
  

         return  EventoDao::crearevento($nombre, $descripcion, $id_usuario, $imagen, $fecha_evento);
	 }


     public function getEvento(){

     	return EventoDao::getEvento();
     }


     public function getEventoid($id_evento){

     	return EventoDao::getEventoid($id_evento);
     }

     public function getEventoAll($sel){
        return EventoDao::getEventoAll($sel);
     }

    public function getTelefono(){
     return EventoDao::getTelefono();
    }
}

 ?>

   

 
        

