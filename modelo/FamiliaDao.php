<?php 


include_once '../persistencia/Conexion.php';

class FamiliaDao
{ 
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }
  

     /**
     * Metodo que sirve para crear personas
     *
     * @param      object         
     * @return     boolean
     */
    public static function crearFamilia($id_vereda)
    {
    	

      $query = "INSERT INTO familia (id_vereda) VALUES ('$id_vereda')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }



    public function getFamiliajefe($id_vereda){
     $query="SELECT * FROM vereda INNER JOIN familia on(vereda.id_vereda=familia.id_vereda) INNER JOIN persona ON(familia.id_familia=persona.id_familia) WHERE vereda.id_vereda='$id_vereda' AND (persona.parentesco='Jefa' OR persona.parentesco='Jefe')";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }

     public function getFamiliaId($id_familia){
     $query="SELECT * FROM vereda INNER JOIN familia on(vereda.id_vereda=familia.id_vereda) INNER JOIN persona ON(familia.id_familia=persona.id_familia) WHERE  familia.id_familia='$id_familia'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }
    

   public function identificarmaximoFamilia(){
    

   $querymax = "SELECT max(id_familia) maximo FROM familia";
   
      $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
            # code...
            $max=$filas2['maximo'];
        }

        return $max;
    }


    public function getGeneroMasculino($id_familia){
     $query="SELECT COUNT(persona.id_persona) nm FROM persona WHERE persona.genero=1 and persona.id_familia='$id_familia'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }



    public function getGeneroFemenino($id_familia){
     $query="SELECT COUNT(persona.id_persona) nf FROM persona WHERE persona.genero=2 and persona.id_familia='$id_familia'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }




////Gobernador--------------------------------------gobernador

    //para el numero de familias por vereda
    public function getNumeroFamiliaVereda($id_vereda){
       $query="SELECT COUNT(id_familia) nfamilia FROM familia where familia.id_vereda='$id_vereda'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }



//contar familias de todo el resguardo
   public function getNumeroFamiliaResguardo(){
       $query="SELECT COUNT(id_familia) nfamilia FROM familia";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

       //contar el genero femenino por vereda  
       public function getNumeroFemeninovereda($id_vereda){
       $query="SELECT COUNT(persona.id_persona) nf FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.genero=2 and vereda.id_vereda='$id_vereda'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

       //contar el genero femenino por  el resguardo 
       public function getNumeroFemeninoResguardo(){
       $query="SELECT COUNT(persona.id_persona) nf FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) where persona.genero=2";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

      //contar el genero masculino por vereda  
       public function getNumeroMasculinovereda($id_vereda){
       $query="SELECT COUNT(persona.id_persona) nm FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.genero=1 and vereda.id_vereda='$id_vereda'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }


      //contar el genero masculino por  el resguardo 
       public function getNumeroMasculinoResguardo(){
       $query="SELECT COUNT(persona.id_persona) nm FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.genero=1";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }


   


      //contar el  edad segun el tipo de documento por vereda
       public function getNumeroTipodocumentoVereda($tipodocumento, $id_vereda){
       $query="SELECT COUNT(persona.id_persona) cedula FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.tipodocumento='$tipodocumento' and vereda.id_vereda='$id_vereda'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }


      //contar el  edad segun el tipo de documento por  resguardo
       public function getNumeroTipodocumentoResguardo($tipodocumento){
       $query="SELECT COUNT(persona.id_persona) cedula FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.tipodocumento='$tipodocumento'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }



      //contar la ocupacion  vereda
       public function getNumeroOcupacionVereda($ocupacion, $id_vereda){
       $query="SELECT COUNT(persona.id_persona) noc FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.ocupacion='$ocupacion' and vereda.id_vereda='$id_vereda'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }
     //contar la ocupacion  Resguardo
       public function getNumeroOcupacionResguardo($ocupacion){
       $query="SELECT COUNT(persona.id_persona) noc FROM persona INNER JOIN familia ON(persona.id_familia=familia.id_familia) INNER JOIN vereda ON(familia.id_vereda=vereda.id_vereda) WHERE persona.ocupacion='$ocupacion'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }




 
}