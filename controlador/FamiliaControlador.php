<?php 
include_once  '../modelo/FamiliaDao.php';
/**
 * 
 */
class  FamiliaControlador 
{
  public function crearFamilia($id_vereda)
  {
  return FamiliaDao::crearFamilia($id_vereda);

  }
  public function identificarmaximoFamilia(){
  	return FamiliaDao::identificarmaximoFamilia();

  }

  public function getFamiliajefe($id_vereda){

  return FamiliaDao::getFamiliajefe($id_vereda);
  }
    
   public function getFamiliaId($id_familia){

     return FamiliaDao::getFamiliaId($id_familia);
      }

       public function getGeneroMasculino($id_familia){
        return FamiliaDao::getGeneroMasculino($id_familia);
       }
      public function  getGeneroFemenino($id_familia){
        return FamiliaDao::getGeneroFemenino($id_familia);
      }


 ///para gobernador --------------gobernador------------s


        //para el numero de familias por vereda para 
    public function getNumeroFamiliaVereda($id_vereda){
    return FamiliaDao::getNumeroFamiliaVereda($id_vereda);

   }

   //SELECT COUNT(id_familia) FROM familia
   public function getNumeroFamiliaResguardo(){
    return FamiliaDao::getNumeroFamiliaResguardo();
   }

     public function getNumeroFemeninovereda($id_vereda){

      return FamiliaDao::getNumeroFemeninovereda($id_vereda);
     }

      public function getNumeroFemeninoResguardo(){
        return FamiliaDao::getNumeroFemeninoResguardo();
      }
  

   public function getNumeroMasculinovereda($id_vereda){
    return FamiliaDao::getNumeroMasculinovereda($id_vereda);
   }

    public function getNumeroMasculinoResguardo(){
      return FamiliaDao::getNumeroMasculinoResguardo();
    }


     public function getNumeroTipodocumentoVereda($tipodocumento, $id_vereda){
      return FamiliaDao::getNumeroTipodocumentoVereda($tipodocumento, $id_vereda);
     }

     public function getNumeroTipodocumentoResguardo($tipodocumento){
      return FamiliaDao::getNumeroTipodocumentoResguardo($tipodocumento);
     }

       public function getNumeroOcupacionVereda($ocupacion, $id_vereda){
        return FamiliaDao::getNumeroOcupacionVereda($ocupacion, $id_vereda);
       }

       public function getNumeroOcupacionResguardo($ocupacion){
        return FamiliaDao::getNumeroOcupacionResguardo($ocupacion);
       }
	
}
