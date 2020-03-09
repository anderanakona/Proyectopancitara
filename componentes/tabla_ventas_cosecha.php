<?php 

$idcosecha=$_POST["idcosecha"];
include '../controlador/CosechaControlador.php';
$conversion_euro_pesos=5000;


 ?>


 <div class="list-group" id="list-tab" role="tablist">
      <div class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"  role="tab" aria-controls="home">
      	<h3>Total de ventas en importaciones</h3>

<?php 

foreach (CosechaControlador::getVenta($idcosecha, 'importacion') as $filas) {
 	
  ?>
    <?php echo $filas[0] ?> pesos colombianos



  <?php  } ?>

      </div>
     
      <div class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"  role="tab" aria-controls="profile"><h3>Total de ventas en exportaciones</h3>
  <?php echo $filas[0] ?>
      <?php 

        foreach (CosechaControlador::getVentaeuro($idcosecha, 'Exportacion') as $filas) {
 	
     ?>
    <?php echo $filas[0] ?> Euros  equivalentes a <?php echo $filas[0]*$conversion_euro_pesos ?> Pesos colombianos



     <?php  } ?>

      	  
          </div>

         
     
      
 </div>

 
     