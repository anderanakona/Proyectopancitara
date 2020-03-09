<?php 

include_once '../modelo/CosechaDao.php';

class CosechaControlador
{
	 public static function crearCosecha($nombre_cosecha, $id_usuario)
    {
     return CosechaDao::crearCosecha($nombre_cosecha, $id_usuario);

    }
     public function getcosecha($id_usuario){
     return CosechaDao::getcosecha($id_usuario);
     }

      public  function crearVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta, $id_cosecha)
    {
    	return CosechaDao::crearVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta, $id_cosecha);
    }
    public static function crearGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_cosecha)
    {
    return CosechaDao::crearGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_cosecha);

    }

     public function getVenta($id_cosecha, $tipo_venta){
        return CosechaDao::getVenta($id_cosecha, $tipo_venta);
     }
     public function getVentaeuro($id_cosecha, $tipo_venta){
        return CosechaDao::getVentaeuro($id_cosecha, $tipo_venta);
     }

     public function getGasto($id_cosecha){
        return CosechaDao::getGasto($id_cosecha);
     }
      public function listamovGasto($id_cosecha){
        return CosechaDao::listamovGasto($id_cosecha);
      }

       public function listamovventas($id_cosecha){
        return CosechaDao::listamovventas($id_cosecha);
       }

        public  function actualizarGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_gasto){
            return CosechaDao::actualizarGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_gasto);
        }


         public function eliminarGasto($id_gasto){

            return CosechaDao::eliminarGasto($id_gasto);
         }
          public function actualizarVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta,$id_venta){
            return CosechaDao::actualizarVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta,$id_venta);
          }
          public function eliminarVenta($id_venta){
            return CosechaDao::eliminarVenta($id_venta);
          }
}


 ?>