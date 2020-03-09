<?php 


include_once '../modelo/VeredaDao.php';


class VeredaControlador
{  
  public function getVereda(){
  return   VeredaDao::getVereda();
  }

  public  function getVeredaId($id_vereda){
  	return VeredaDao::getVeredaId($id_vereda);
  }

}


