<?php 
include '../controlador/ProyectoControlador.php';
$cont=0;

 ?>





<div class="row">
  
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-pendiente" role="tabpanel" aria-labelledby="list-home-list">
      	
 <div class="col-sm-12">

 <h2>proyectos Pendientes</h2> 
   
		<table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Titulo proyecto</th>
                  <th>Fecha realizacion</th>                  
                  <th>Accion</th>
                </tr>
    </thead>
<?php 

$familia = ProyectoControlador::getproyectos();
foreach ($familia as $filas){  
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5];               
              $cont++;
 ?>


    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['tituloproyecto'] ?></td>
    <td><?php echo $filas['fecha_realizacion'] ?></td>
    

    <td> 
      <a href="#" onclick="imprimirdatos('<?php echo $id ?>')" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Revisar</a>  
   </td> 



    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>




      </div>
      <div class="tab-pane fade" id="list-aprobado" role="tabpanel" aria-labelledby="list-profile-list">
        


        <div class="col-sm-12">

 <h2>proyectos Aprobados</h2> 
   
    <table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Titulo proyecto</th>
                  <th>Fecha Aprobacion</th>                  
                  <th>Accion</th>
                </tr>
    </thead>
<?php 

$pro = ProyectoControlador::getproyectosAprobados();
foreach ($pro as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5]."||".              
              $filas[6]."||".
              $filas[7]."||".
              $filas[8]."||".
              $filas[9]."||".
              $filas[10].'||'.
              $filas[11];               
              $cont++;
 ?>


    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['tituloproyecto'] ?></td>
    <td><?php echo $filas['fecha_aprobacion'] ?></td>
    

    <td> 
      <a href="#" onclick="verdetallesaprobado('<?php echo $id ?>')" class="btn btn-primary" data-toggle="modal" data-target="#modalaprobados">Ver detalles</a>  
   </td> 



    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>





      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        

        <div class="col-sm-12">

 <h2>proyectos Aprobados</h2> 
   
    <table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Titulo proyecto</th>
                  <th>Fecha Aprobacion</th>                  
                  <th>Accion</th>
                </tr>
    </thead>
<?php 

$pro = ProyectoControlador::getproyectosRechazados();
foreach ($pro as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5]."||".              
              $filas[6]."||".
              $filas[7]."||".
              $filas[8]."||".
              $filas[9]."||".
              $filas[10].'||'.
              $filas[11];               
              $cont++;
 ?>


    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['tituloproyecto'] ?></td>
    <td><?php echo $filas['fecha_aprobacion'] ?></td>
    

    <td> 
      <a href="#" onclick="verdetallesaprobado('<?php echo $id ?>')" class="btn btn-primary" data-toggle="modal" data-target="#modalaprobados">Ver detalles</a>  
   </td> 



    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>






        
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">..d.</div>
    </div>
  </div>
</div>

