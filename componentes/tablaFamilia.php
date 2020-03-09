<?php 
include '../controlador/FamiliaControlador.php';


 $id_vereda=$_POST['id_vereda'];
 $cont=0;


 ?>



 <div class="col-sm-12">

 <h2> lista de familias</h2> 
   
		<table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Nombres jefe o jefa</th>
                  <th>Apellidos</th>
                  <th>Parentesco</th>
                  <th>acciones</th>
                </tr>
    </thead>
<?php 

$familia = FamiliaControlador::getFamiliajefe($id_vereda);
foreach ($familia as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];

              $cont++;
 ?>

    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['nombre_persona'] ?></td>
    <td><?php echo $filas['apellido_persona'] ?></td>
    <td><?php echo $filas['parentesco'] ?></td>  

    <td> 
         <a href="registroPersona.php?id_familia=<?php echo $filas['id_familia'] ?>&nombre_vereda=<?php echo $filas['nombre_vereda'] ?>" >agregar personas al nucleo familiar</a>
   </td> 





    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>

  