
<?php 
include_once '../controlador/PersonaControlador.php';


        $txtCedula     =$_POST["txtCedula"];
        $txtNombres   =$_POST["txtNombres"];  
        $txtApellidos   =$_POST["txtApellidos"];  
         $txtGenero    =$_POST["txtGenero"];
        $txtFecha_nacimiento   =$_POST["txtFecha_nacimiento"];       
         $txtCorreo =$_POST["txtCorreo"];
         $txtid_familia =$_POST["txtid_familia"];
         $txtParentesco=$_POST["txtParentesco"];
         $txttipodocumento=$_POST["txttipodocumento"];


         $txt_edad=$_POST["txt_edad"];

         $txt_ocupacion=$_POST["txtOcupacion"];
         
       
         
       
           $result='';

       if(PersonaControlador::buscarCedula($txtCedula)){
        $result=0;
       }else{

       // ($cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $genero, $correo, $parentesco, $id_familia);
       PersonaControlador::crearPersona($txttipodocumento,$txtCedula, $txtNombres, $txtApellidos,$txtFecha_nacimiento, $txt_edad, $txtGenero, $txtCorreo, $txtParentesco, $txt_ocupacion, $txtid_familia);
       $result=1;
        

       }
      
     echo $result;


 ?>