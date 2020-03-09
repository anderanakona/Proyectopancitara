<?php 
include_once '../controlador/PersonaControlador.php';
include_once '../controlador/FamiliaControlador.php';

        $txt_tipodocumento="CC";
        $txtCedula     =$_POST["txtCedula"];
        $txtNombres   =$_POST["txtNombres"];  
        $txtApellidos   =$_POST["txtApellidos"];  
         $txtGenero    =$_POST["txtGenero"];
        $txtFecha_nacimiento   =$_POST["txtFecha_nacimiento"];       
         $txtCorreo =$_POST["txtCorreo"];
         $txtid_vereda =$_POST["txtid_vereda"];
         $txt_edad=$_POST["txt_edad"];

         $txt_ocupacion=$_POST["txtOcupacion"];

         $parentesco='';


         if($txtGenero==1){
           $parentesco='Jefe';
         }else{
           $parentesco='Jefa';
         }
            
       $result='';

       if(PersonaControlador::buscarCedula($txtCedula)){
        $result=0;
       }else{
       FamiliaControlador::crearFamilia($txtid_vereda);
      $id_familia= FamiliaControlador::identificarmaximoFamilia(); 

      if(PersonaControlador::crearPersona($txt_tipodocumento, $txtCedula, $txtNombres, $txtApellidos,$txtFecha_nacimiento, $txt_edad,  $txtGenero, $txtCorreo, $parentesco, $txt_ocupacion, $id_familia)){
        $result=1; 
      }else{
        $result=2;
      }
       
              
       }
      
     echo $result;


 ?>