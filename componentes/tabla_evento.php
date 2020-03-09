<?php 
include_once '../controlador/EventoControlador.php'; 
 ?>

 <?php 
 $sel=$_POST['sel'];
$filas_eventos=EventoControlador::getEventoAll($sel);
  $variable_php=null;

 ?>

 <?php foreach ($filas_eventos as $filas):
  $id_evento=$filas["id_evento"];
  $imagenscr='data:image/jpeg;base64,'.base64_encode($filas["imagen"]);
  $descripcion=$filas["descripcion"];

  if($filas["imagen"]==''){
    $imagenscr='estilos/imagenes/canto.jpg';
  }


    $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
               $filas[3]."||".
              $imagenscr;
  ?>

     

  <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body"  data-toggle="modal" data-target="#exampleModal" onclick="ver('<?php echo  $id; ?>')">

              <img src="<?php echo $imagenscr; ?>" width="200">
               <h4 class="card-title mb-3"><?php echo $filas["nombre_evento"] ?></h4>

              
             </div>
            
      </div>
  </div>


   <?php endforeach ?>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo"></h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div id="id_div_imagen"></div>
      

      
     

        <p id="descripcion"></p>
      </div>
      <div class="modal-footer">
        <p id="fecha_eventos"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" hidden>Close</button>        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function ver(datos){
  
   titulo=document.getElementById("titulo");
   descripcion=document.getElementById("descripcion");
   fecha=document.getElementById("fecha_eventos");


   d=datos.split('||');          
   titulo.innerHTML=(d[1]);
   descripcion.innerHTML=(d[2]);
   fecha.innerHTML=(d[3]);
  


   document.getElementById("id_div_imagen").innerHTML='<img src="'+d[4]+'"  width="200" />';
   

  }

</script>