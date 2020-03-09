<?php 

$idcosecha=$_POST["idcosecha"];
include '../controlador/CosechaControlador.php';
$conversion_euro_pesos=5000;


 ?>

 <div class="list-group" id="list-tab" role="tablist">
      <div class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"  role="tab" aria-controls="home">
      	<h3>Total de gastos en cosecha </h3>

<?php 

foreach (CosechaControlador::getGasto($idcosecha) as $filas) {
 	
  ?>
    <?php echo $filas[0] ?> pesos colombianos



  <?php  } ?>

      </div>
     
    
         
     
      
 </div>

 