<?php 
include_once '../controlador/CosechaControlador.php';


 $id_usuario=$_POST['id_usuario'];
 $cont=0;


 ?>



 <div class="col-sm-12">


   
		<table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Nombre cosecha</th>
                  <th>Fecha registro</th>
                  
                </tr>
    </thead>
<?php 

$cosecha =CosechaControlador::getcosecha($id_usuario);
foreach ($cosecha as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];
              $cont++;
 ?>

    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['nombre_cosecha'] ?></td>
    <td><?php echo $filas['fecha_registro'] ?></td>

    <td> 
         <a href="#" >agregar gastos de la cosecha</a>
   </td> 





    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>
