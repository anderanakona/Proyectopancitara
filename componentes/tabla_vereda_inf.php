<?php 
include '../controlador/FamiliaControlador.php';
include '../controlador/VeredaControlador.php';


     
 ?>

<div id="informacion_resguardo">

<?php
  
   $usuario="";
   $id_vereda=null;
  


 if(isset($_POST["id_vereda"])){
   $id_vereda=$_POST['id_vereda'];
 }

    //por vereda 
  if($_POST["id_vereda"]!=0){
     $num_familia_vereda = FamiliaControlador::getNumeroFamiliaVereda($id_vereda);
     $num_femenino_vereda= FamiliaControlador::getNumeroFemeninovereda($id_vereda);   
     $num_masculino_vereda= FamiliaControlador::getNumeroMasculinovereda($id_vereda);
  }else{
        $num_familia_vereda=FamiliaControlador::getNumeroFamiliaResguardo();
       $num_femenino_vereda= FamiliaControlador:: getNumeroFemeninoResguardo();
       $num_masculino_vereda= FamiliaControlador::getNumeroMasculinoResguardo();

 }


   $vereda_id = VeredaControlador::getVeredaId($id_vereda);
  


   $num_familia_resguardo = FamiliaControlador::getNumeroFamiliaResguardo();
   

   $nombre_vereda='';

?> 

<?php foreach ($vereda_id as $filasnombre): ?>
	<?php  $nombre_vereda=$filasnombre["nombre_vereda"]; ?>
	
<?php endforeach ?>

<h3><?php echo $nombre_vereda; ?></h3>


<style type="text/css">
	.card{
		border-top:2px solid  blue;
		margin: 10px;
       padding: 10px;

   
}
	
</style>

<div class="row animated fadeIn">
 <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de familias-allyus</h4>
               
              <?php foreach ($num_familia_vereda as $nfv): ?>
              	<h4 class="card-title mb-3"><?php echo $nfv["nfamilia"] ?></h4>

              	 <?php 
              	 $titulo_familias="Proyecto para las familias";
                 $id_num_fam=$nfv["nfamilia"]."||".
                        $titulo_familias;

              	 ?>
              	
              <?php endforeach ?>  
               <a href="#" onclick="vermodal('<?php echo $id_num_fam ?>')">Gestionar proyecto</a>                 
             </div>
            
      </div>
  </div>
  <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de mujeres</h4>
               
              <?php foreach ($num_femenino_vereda as $nfemv): ?>
              	<h4 class="card-title mb-3"><?php echo $nfemv["nf"] ?></h4>
                <?php 
              	 $titulo_mujeres="Proyecto para las mujeres";
                 $id_num_muj=$nfemv["nf"]."||".
                        $titulo_mujeres;

              	 ?>
              	
              <?php endforeach ?> 
               <a href="#" onclick="vermodal('<?php echo $id_num_muj ?>')">Gestionar proyecto</a>                  
             </div>
            
      </div>
  </div>


   <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de hombres</h4>
               
              <?php foreach ($num_masculino_vereda as $nmasv): ?>
              	<h4 class="card-title mb-3"><?php echo $nmasv["nm"] ?></h4>


              	 <?php 
              	 $titulo_hombres="Proyecto para los hombres";
                 $id_num_hom=$nmasv["nm"]."||".
                        $titulo_hombres;

              	 ?>
              <?php endforeach ?>   

             <a href="#" onclick="vermodal('<?php echo $id_num_hom ?>')">Gestionar proyecto</a>           
             </div>
            
      </div>
  </div>


    <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Niños con registro civil</h4>
               
              <?php 
             $titulo_RC="ayuda para niños con registro civil";
             $numerocount_RC=0;
              if($_POST["id_vereda"]!=0){
               $tipodocRC=FamiliaControlador::getNumeroTipodocumentoVereda("RC",$id_vereda);
              }else{
              	$tipodocRC=FamiliaControlador::getNumeroTipodocumentoResguardo("RC");
              }


            // $num_doc_vereda=VeredaControlador::getNumeroTipodocumentoResguardo($tipodoc);
              foreach ($tipodocRC as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["cedula"]            
                  ?></h4>


              	 <?php 
              	 $numerocount_RC=$filas["cedula"]; 
                     $id_num_RC=$filas["cedula"]."||".
                        $titulo_RC;

              	 ?>
              <?php endforeach ?> 
               <a href="#"  onclick="vermodal('<?php echo $id_num_RC ?>'); ">Gestionar proyecto</a>     

             </div>
            
      </div>
  </div>
   


    <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de niños con tarjeta de identidad</h4>
               
              <?php 
              $titulo_TI="Niños con tarjeta de identidad";
             $numerocount_TI=0;

               if($_POST["id_vereda"]!=0){
               $tipodocTI=FamiliaControlador::getNumeroTipodocumentoVereda("TI",$id_vereda);
              }else{
              	$tipodocTI=FamiliaControlador::getNumeroTipodocumentoResguardo("TI");
              }
           

            // $num_doc_vereda=VeredaControlador::getNumeroTipodocumentoResguardo($tipodoc);
              foreach ($tipodocTI as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["cedula"] ?></h4>
              	 <?php 
              	 $numerocount_TI=$filas["cedula"]; 
                     $id_num_TI=$filas["cedula"]."||".
                        $titulo_TI;

              	 ?>



              <?php endforeach ?>   
               <a href="#" onclick="vermodal('<?php echo $id_num_TI ?>')">Gestionar proyecto</a>                
             </div>
            
      </div>
  </div>
   <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de personas con cedula de ciudadania</h4>
               
              <?php 
             
                $titulo_CC="Personas mayores de edad";
               $numerocount_CC=0;
               if($_POST["id_vereda"]!=0){
               $tipodocCC=FamiliaControlador::getNumeroTipodocumentoVereda("CC",$id_vereda);
              }else{
              	$tipodocCC=FamiliaControlador::getNumeroTipodocumentoResguardo("CC");
              }

            // $num_doc_vereda=VeredaControlador::getNumeroTipodocumentoResguardo($tipodoc);
              foreach ($tipodocCC as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["cedula"] ?></h4>

              	 <?php 
              	 $numerocount_CC=$filas["cedula"]; 
                     $id_num_CC=$filas["cedula"]."||".
                        $titulo_CC;

              	 ?>
              <?php endforeach ?> 
               <a href="#" onclick="vermodal('<?php echo $id_num_CC ?>')">Gestionar proyecto</a>                  
             </div>
            
      </div>
  </div>



   <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de personas con profesion Artesanos</h4>
               
              <?php 
             

               if($_POST["id_vereda"]!=0){

               $tipoocupacionArt=FamiliaControlador::getNumeroOcupacionVereda("Artesano-MAKIRURAY", $id_vereda);
              }else{
              	$tipoocupacionArt=FamiliaControlador::getNumeroOcupacionResguardo("Artesano-MAKIRURAY");
              }

            // $num_doc_vereda=VeredaControlador::getNumeroTipodocumentoResguardo($tipodoc);
              foreach ($tipoocupacionArt as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["noc"] ?></h4>
                 <?php 
              	 $titulo_arte="Artesanos";
                     $id_num_arte=$filas["noc"]."||".
                        $titulo_arte;

              	 ?>

              <?php endforeach ?>  
               <a href="#" onclick="vermodal('<?php echo $id_num_arte ?>')">Gestionar proyecto</a>                 
             </div>
            
      </div>
  </div>

   <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de personas con profesion Musicos</h4>
               
              <?php 
             

               if($_POST["id_vereda"]!=0){

               $tipoocupacionMus=FamiliaControlador::getNumeroOcupacionVereda("Musico-TAKINA", $id_vereda);
              }else{
              	$tipoocupacionMus=FamiliaControlador::getNumeroOcupacionResguardo("Musico-TAKINA");
              }

            // $num_doc_vereda=VeredaControlador::getNumeroTipodocumentoResguardo($tipodoc);
              foreach ($tipoocupacionMus as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["noc"] ?></h4>

              	 <?php 
              	 $titulo_musi="Musicos";
                     $id_num_musi=$filas["noc"]."||".
                        $titulo_musi;

              	 ?>
              <?php endforeach ?>
               <a href="#" onclick="vermodal('<?php echo $id_num_musi ?>')">Gestionar proyecto</a>                   
             </div>
            
      </div>
  </div>


  <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de personas con profesion Agricultor</h4>
               
              <?php 
             

               if($_POST["id_vereda"]!=0){

               $tipoocupacionAgr=FamiliaControlador::getNumeroOcupacionVereda("Agricultor-CHAKRAKAMAY", $id_vereda);
              }else{
              	$tipoocupacionAgr=FamiliaControlador::getNumeroOcupacionResguardo("Agricultor-CHAKRAKAMAY");
              }

           
              foreach ($tipoocupacionAgr as $filas): ?>
              	  <h4 class="card-title mb-3"><?php echo $filas["noc"] ?></h4>
                   <?php 
              	 $titulo_agr="Agricultor";
                     $id_num_agr=$filas["noc"]."||".
                     $titulo_agr;

              	 ?>



              <?php endforeach ?> 
               <a href="#"  onclick="vermodal('<?php echo $id_num_agr ?>')">Gestionar proyecto</a>                  
             </div>
            
      </div>
  </div>


  <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body">

               <h4 class="card-title mb-3">Numero de personas con profesion Medicos tradicionales</h4>
               
              <?php 
             

               if($_POST["id_vereda"]!=0){

               $tipoocupacionMed=FamiliaControlador::getNumeroOcupacionVereda("Medicino tradicional-HAMPI", $id_vereda);
              }else{
              	$tipoocupacionMed=FamiliaControlador::getNumeroOcupacionResguardo("Medicino tradicional-HAMPI");
              }

           
              foreach ($tipoocupacionMed as $filas): ?>
              	<h4 class="card-title mb-3"><?php echo $filas["noc"] ?></h4>


              <?php 
              	 $titulo_med="Medicos tradicionales";
                 $id_num_med=$filas["noc"]."||".
                 $titulo_med;

              	 ?>

              <?php endforeach ?>  
               <a href="#" onclick="vermodal('<?php echo $id_num_med ?>')">Gestionar proyecto</a>                 
             </div>
            
      </div>
  </div>

 


 

  






 </div>


	
</div>


<!-- Modal -->
<div class="modal fade" id="gestionproyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gestionar proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="register_form">
  <div class="form-group row">
    <label for="titulopr" class="col-sm-2 col-form-label">Titulo proyecto</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="titulopr">
    </div>
  </div>

   <div class="form-group row">
    <label for="objetivopr" class="col-sm-2 col-form-label">Ojetivo general</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="objetivopr">
    </div>
  </div>

   <div class="form-group row">
    <label for="justificacionpr" class="col-sm-2 col-form-label">Justificacion</label>
    <div class="col-sm-10">
      <textarea type="text"  class="form-control-plaintext" style="color: blue;" id="justificacionpr"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="descripcionpr" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="text"  class="form-control" id="descripcionpr"></textarea>
    </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="registrar" class="btn btn-primary" onclick="crearProyecto();">Guardar</button>
     </form>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">
	
  function vermodal(datos) {
  	// body...
 d=datos.split('||'); 


 if(d[0]==0){
 	alertify.error('Debes seleccionar el numero mayores a cero');
 }else{
 	 $('#justificacionpr').val(d[1]+' para una cantidad de '+d[0]); 
  	  $('#gestionproyecto').modal('show');
 }  
 
  	

  	  
  }




function crearProyecto(){
var error_messages = 'faltan datos por seleccionar';
 var justificacion=$('#justificacionpr').val();
var descripcion=$('#descripcionpr').val();
var titulo=$('#titulopr').val();
var objetivo=$('#objetivopr').val();



 if (justificacion=='' || descripcion=='' || titulo=='' || objetivo=='') {
  error_messages='faltan datos por rellenar';
  alertify.error(error_messages);
 // $('.alert-success').removeClass('hide').html(error_messages);
  return false;
 }else{

alertify.success("muy bien datos");


 var datos='txtjustificacion='+justificacion+'&txtdescripcion='+descripcion+'&txttitulo='+titulo+'&txtobjetivo='+objetivo;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_proyecto_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
   
           alertify.confirm('Registro', 'Registro exitoso', function(){ 

            alertify.success('exitoso');
            


            },function(){  $('#gestionproyecto').modal('hide');});
              $('#gestionproyecto').modal('hide');
       
       }else{
        alertify.confirm('Registro', 'Error del servidor', function(){ alert('proyecto ya existe'+res) }
                , function(){ alertify.error('Cerrar')});
       }
    }


  });
   
























  return false;

}
}




</script>