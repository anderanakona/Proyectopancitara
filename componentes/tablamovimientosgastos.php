<?php 
include '../controlador/CosechaControlador.php';
$idcosecha=$_POST["idcosecha"];

 ?>

 <div class="list-group">

<?php  


foreach (CosechaControlador::listamovGasto($idcosecha) as $filas) {
    $id=$filas["id_gasto"]."||".
    $filas["gasto"]."||".
        $filas["fecha_gasto"]."||".
        $filas["categoria"]."||".
        $filas["descripcion"];


  ?>
    <div href="#" id="gastos-mov" class="list-group-it­em list-group-item-acti­on flex-column align-items-start card" >
<div class="d-flex w-100 justify-content-betw­een row">
  <div class="col-7"></div>
  <div class="col-5"><small class="text-muted"><?php echo $filas['fecha_gasto']; ?></small></div>

</div>
<h6 class="mb-1"><?php echo $filas['categoria']; ?>. <small class="text-muted"><?php echo $filas['gasto']; ?></small>
</h6>
<small class="text-muted"><?php echo $filas['descripcion'] ?>.</small>

<div> <button class="btn btn-success" onclick="editargasto('<?php echo $id ?>')"><span class="glyphicon glyphicon-refresh"></span></button>
   <button class="btn btn-danger" onclick="eliminargasto('<?php echo $filas["id_gasto"] ?>')"><span class="glyphicon glyphicon-remove"></span></button>

</div>
 
</div>




  <?php  } ?>






</div>


<script type="text/javascript">
  var eg=0;
  var id_gasto=0;
function editargasto(id){

 d=id.split('||'); 



         

alertify.confirm('Editar gastos', '¿ Esta Seguro Que Desea editar gastos?',
 function(){
 
 
 

   setTimeout(function(){               
                   $('#modallistamovimientos').modal('hide');      }, 100);

     setTimeout(function(){               
                    $('#modalgastos').modal('show');      }, 200);
  

  $('#txtgastos').val(d[1]);
  $('#txtfecha_gastos').val(d[2]);
$('#comment_gastos').val(d[4]);
 $('#txtcategoria').val(d[3]);
 id_gasto=d[0];
 console.log(id_gasto);

 eg=1;
 

  titulogasto=document.getElementById("modaltitulogasto");
  titulogasto.innerHTML = "Editar Gasto";

}
 , function(){ alertify.error('Cancelado')});
}


function eliminargasto(id){

alertify.confirm('Eliminar gasto', '¿ Esta Seguro Que Desea eliminar gasto?',
 function(){
      

       var datos='id_gasto='+id;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/eliminar_gasto_logic.php',
    data:datos,
    success:function(res){
      if(res==1){
      
      console.log("eliminado "+ res);
      vermovimientosgastos();



      }else{
        console.log("error"+ res);
      }
     
      
      
    }


  });












  }
 , function(){ 
  console.log("Cancelado");
   

  });
}

</script>
