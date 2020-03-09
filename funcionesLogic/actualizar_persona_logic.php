<?php 


include_once '../controlador/PersonaControlador.php';


        $txtCedula     =$_POST["txtCedula_a"];
        $txtNombres   =$_POST["txtNombres_a"];  
        $txtApellidos   =$_POST["txtApellidos_a"];  
         $txtGenero    =$_POST["txtGenero_a"];
        $txtFecha_nacimiento   =$_POST["txtFecha_nacimiento_a"];       
         $txtCorreo =$_POST["txtCorreo_a"];
         $txtid =$_POST["txtid_a"];
         $txtParentesco=$_POST["txtParentesco_a"];
         $txttipodocumento=$_POST["txttipodocumento_a"];


         $txt_edad=$_POST["txt_edad"];

         $txt_ocupacion=$_POST["txtOcupacion_a"];
         
       
         
       
           $result='';

       if(PersonaControlador::actualizarPersona($txttipodocumento, $txtCedula, $txtNombres, $txtApellidos, $txtFecha_nacimiento, $txt_edad, $txtGenero,$txtCorreo, $txtParentesco, $txt_ocupacion, $txtid)){





       $result=1;
       

       }else{
        $result=0;
       }
      
     echo $result;




 ?>





