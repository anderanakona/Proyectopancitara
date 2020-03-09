
<?php 
include '../controlador/CosechaControlador.php';
$idcosecha=$_POST["idcosecha"];



 ?>


 <div class="list-group">


<?php  


foreach (CosechaControlador::listamovventas($idcosecha) as $filas) {
    $id=$filas["id_venta"]."||".
    $filas["libras_vendidas"]."||".
        $filas["fecha_venta"]."||".
        $filas["tipo_venta"]."||".
        $filas["descripcion"];


  ?>
    <div href="#" id="gastos-mov" class="list-group-it­em list-group-item-acti­on flex-column align-items-start card" >
<div class="d-flex w-100 justify-content-betw­een row">
  <div class="col-7"></div>
  <div class="col-5"><small class="text-muted"><?php echo $filas['fecha_venta']; ?></small></div>

</div>
<h6 class="mb-1"><?php echo $filas['tipo_venta']; ?>. <small class="text-muted"><?php echo $filas['libras_vendidas']; ?> libras</small>
</h6>
<small class="text-muted"><?php echo $filas['descripcion'] ?>.</small>

<div> <button class="btn btn-success" onclick="editarventas('<?php echo $id ?>')"><span class="glyphicon glyphicon-refresh"></span></button>
   <button class="btn btn-danger" onclick="eliminarventas('<?php echo $filas["id_venta"] ?>')"><span class="glyphicon glyphicon-remove"></span></button>

</div>
 
</div>


  <?php  } ?>

   





</div>



<script type="text/javascript">
  var id_venta=0;
  var ev=0;
 function  editarventas(id){

 d=id.split('||'); 


alertify.confirm('Editar venta', '¿ Esta Seguro Que Desea editar venta?',
 function(){
 
 
 

  setTimeout(function(){               
                   $('#modallistamovimientos').modal('hide');      }, 100);

     setTimeout(function(){               
                    $('#modalventas').modal('show');      }, 500);
  
    $('#txtcafevendidas').val(d[1]);
  $('#txtfecha_ventas').val(d[2]);
 $('#txttipo_venta').val(d[3]);
$('#comment_ventas').val(d[4]);
id_venta=d[0];
console.log(id_venta);
ev=1;

 tituloventas=document.getElementById("tituloventas");
  tituloventas.innerHTML = "Editar ventas";


}
 , function(){ alertify.error('Cancelado')});

  
  


 }
 function eliminarventas(id){

alertify.confirm('Eliminar venta', '¿ Esta Seguro Que Desea eliminar venta?',
 function(){
      

       var datos='id_venta='+id;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/eliminar_venta_logic.php',
    data:datos,
    success:function(res){
      if(res==1){
      
      console.log("eliminado "+ res);
      vermovimientosventas();



      }else{
        console.log("error"+ res);
      }
     
      
      
    }


  });












  }
 , function(){ 
  console.log("Cancelado");
   

  });


console.log(id);
 }






</script>



