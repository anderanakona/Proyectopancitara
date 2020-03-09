<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body style="background-color: rgb(239, 244, 247 );">
<header>    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="vista_campesino_form.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" style="color:white" href="VistaGeografia.php">Geografia la vega cauca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="musica_campesina.php">Musica</a>
      </li>
    
    </ul>
  </div>
    <a href="perfil.php" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
   <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>

<style type="text/css">
 
.simple-form input { 
  border: 1px solid #eee;
  border-left: 5px solid;
}
.simple-form input:optional {
  border-left-color: #999;
}
.simple-form input:required {
  border-left-color: green;
}
.simple-form input:invalid {
  border-left-color: red;
}

.simple-form select { 
  border: 1px solid #eee;
  border-left: 5px solid;
}
.simple-form select:optional {
  border-left-color: #999;
}
.simple-form select:required {
  border-left-color: green;
}
.simple-form select:invalid {
  border-left-color: red;
}



.simple-form textarea { 
  border: 1px solid #eee;
  border-left: 5px solid;
}
.simple-form textarea:optional {
  border-left-color: #999;
}
.simple-form textarea:required {
  border-left-color: green;
}
.simple-form textarea:invalid {
  border-left-color: red;
}

</style>

<center><h1>Gastos <?php echo $_GET["nombre_cosecha"] ?></h1></center>

  <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                     <div class="col-md-3" id="content_gastos"></div>
                     <div class="col-md-6 row">
                       <div class="col-md-6">
                        <div class="card" data-toggle="modal" data-target="#modalventas">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <img class="embed-responsive-item" src="estilos/imagenes/imagenescontaduria/ingresofoto.png"></img allowfullscreen>

                                </div>
                                <div class="card-body">
                                  <button class="card-title mb-3 btn btn-link">Agregar ventas de cafe</button>
                                   
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card" data-toggle="modal" data-target="#modalgastos">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <img class="embed-responsive-item" src="estilos/imagenes/imagenescontaduria/gastofoto.png" allowfullscreen></img>

                                </div>
                                <div class="card-body">
                                  <button class="card-title mb-3 btn btn-link">Agregar Gasto</button>
                                   
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card" data-toggle="modal" data-target="#modallistamovimientos">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <img class="embed-responsive-item" src="estilos/imagenes/imagenescontaduria/listamovimientos.png" allowfullscreen></img>

                                </div>
                                <div class="card-body">
                                  <button class="card-title mb-3  btn btn-link">Lista de movimientos</button> 
                                   
                                </div>
                            </div>
                        </div>



                       


                     </div>
                     <div class="col-md-3" id="content_ingresos"></div>

                        
                    </div><!-- .row -->
                </div><!-- .animated -->
            </div><!-- .content
            
            cuantos palos tiene




             -->



 <!-- modal  crear las ventas de cafe -->
<div>
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modalventas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="tituloventas">Agregar ventas </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
        <div class="alert alert-success hide"></div>
        <form id="register_form_ventas" name="register_form_ventas" novalidate role="form"  class="simple-form"  method="post" autocomplete="off">
     
      <div class="input-group form-group">
      <label for="txtcafevendidas" class="col-sm-3">Libras en cafe vendidas</label>
            
           <input type="number" name="txtcafevendidas" id="txtcafevendidas" class="form-control" placeholder="" required> 
      </div>

          <div class="input-group form-group">
      <label for="txtfecha_ventas" class="col-sm-3">Fecha</label>
            
           <input type="date" name="txtfecha_ventas" id="txtfecha_ventas" class="form-control" required> 
       </div>




       <div class="input-group form-group">
        <label for="comment_ventas" class="col-sm-3">Descripcion</label>
            
           <textarea name="comment_ventas" id="comment_ventas" class="form-control" placeholder="Descripcion" required></textarea>
       </div>



       <div class="input-group form-group">
      <label for="txttipo_venta" class="col-sm-3">Tipo de venta</label>
           
          <select class="form-control" name="txttipo_venta" id="txttipo_venta" required>
              <option value="">Seleccionar tipo de venta</option>
              <option value="Exportacion">Exportacion</option>
              <option value="Importacion">Importacion</option>
          </select>
     </div>

    </div>



<div class="modal-footer">
  <input type="submit"  class="submit btn btn-success" value="Aceptar"/>
</form>
</div>


        </div>    
       
    </div>
  </div>
</div>
</div>

 <!-- modal  crear los gastos -->


 <div>
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modalgastos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="modaltitulogasto">Agregar gastos </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
        <div class="alert alert-success hide"></div>
       <form id="register_form_gastos" name="register_form_gastos" novalidate role="form"  class="simple-form"  method="post" autocomplete="off">
      <div class="input-group form-group">
      <label for="txtgastos" class="col-sm-3">Gastos</label>
            
           <input type="number" name="txtgastos" id="txtgastos" class="form-control" placeholder="" required> 
      </div>

          <div class="input-group form-group">
      <label for="txtfecha_gastos" class="col-sm-3" >Fecha</label>
            
           <input type="date" name="txtfecha_gastos" id="txtfecha_gastos" class="form-control" required> 
       </div>

           <div class="input-group form-group">
      <label for="txtcategoria" class="col-sm-3">Categoria</label>
           
          <select class="form-control" name="txtcategoria" id="txtcategoria" required>
            <option value="">seleccionar categoria</option>
              <option value="Personal">Personal</option>
              <option value="Comida">Comida</option>
               <option value="Transporte">Transporte</option>
              <option value="Herramientas">Herramientas</option>
          </select>
     </div>





       <div class="input-group form-group">
        <label for="comment_gastos" class="col-sm-3">Descripcion</label>
            
           <textarea name="comment_gastos" id="comment_gastos" class="form-control" placeholder="Descripcion" required></textarea>
       </div>



   
    </div>



<div class="modal-footer">
  <input type="submit" name="submit" class="submit btn btn-success" value="Aceptar"/>
   </form>
</div>


        </div>    
       
    </div>
  </div>
</div>
</div>





 <div class="row">
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modallistamovimientos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel">Lista de movimientos </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body" id="content_movimientos">
      <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-ganancia-list" data-toggle="list" href="#list-ganancia" role="tab" aria-controls="ganancia">Ganancias</a>
      <a class="list-group-item list-group-item-action" id="list-gastos-list" data-toggle="list" href="#list-gastos" role="tab" aria-controls="gastos">Gastos</a>
      
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-ganancia" role="tabpanel" aria-labelledby="list-ganancia-list">
        





      </div>
     
      <div class="tab-pane fade" id="list-gastos" role="tabpanel" aria-labelledby="list-gastos-list">
       



      </div>
    </div>
  </div>
</div>



   
      </div>



<div class="modal-footer">
  <input type="submit" name="submit" class="submit btn btn-success" value="Aceptar"/>

</div>


        </div>    
       
    </div>
  </div>
</div>


</div>


 <script src="estilos/js/jquery.min.js" ></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>
    




</body>
</html>


<script type="text/javascript">

  verinformacionventas();
  verinformacionGastos();
  vermovimientosgastos();
  vermovimientosventas();

 

     function vermovimientosgastos(){
                   var id_cosecha=<?php echo $_GET['idcosecha'] ?>;
    var datos='idcosecha='+id_cosecha;

                $.ajax({
                    url: '../componentes/tablamovimientosgastos.php',
                    method: "POST",
                    data: datos,
                    success: function (respuesta) {
                        $('#list-gastos').html(respuesta)
                      
                    },
                    error: function () {
                         alert("error", "Error en el sistema");
                    }
                });
                }
                    function vermovimientosventas(){
                   var id_cosecha=<?php echo $_GET['idcosecha'] ?>;
    var datos='idcosecha='+id_cosecha;

                $.ajax({
                    url: '../componentes/tablamovimientosventas.php',
                    method: "POST",
                    data: datos,
                    success: function (respuesta) {
                        $('#list-ganancia').html(respuesta)
                      
                    },
                    error: function () {
                         alert("error", "Error en el sistema");
                    }
                });
                }









                function verinformacionventas(){
                   var id_cosecha=<?php echo $_GET['idcosecha'] ?>;
    var datos='idcosecha='+id_cosecha;

                $.ajax({
                    url: '../componentes/tabla_ventas_cosecha.php',
                    method: "POST",
                    data: datos,
                    success: function (respuesta) {
                        $('#content_ingresos').html(respuesta)
                      
                    },
                    error: function () {
                         alerta("error", "Error en el sistema");
                    }
                });
                }


                     function verinformacionGastos(){
                   var id_cosecha=<?php echo $_GET['idcosecha'] ?>;
    var datos='idcosecha='+id_cosecha;

                $.ajax({
                    url: '../componentes/tabla_gastos_cosecha.php',
                    method: "POST",
                    data: datos,
                    success: function (respuesta) {
                        $('#content_gastos').html(respuesta)
                      
                    },
                    error: function () {
                         alert("error", "Error en el sistema");
                    }
                });
                }



              










// Handle form submit and validation
$( "#register_form_ventas" ).submit(function(event) {
  var libras= $('#txtcafevendidas').val();
    var fecha_venta= $('#txtfecha_ventas').val();
    var descripcion= $('#comment_ventas').val();
    var tipo_venta= $('#txttipo_venta').val();
    
    if(libras=="" || fecha_venta=="" || descripcion=="" || tipo_venta==""){
     
      alertify.error("Faltan datos por rellenar");
       return false;
    }else{  

      if(ev==1){
       
alertify.confirm('Editar Ventas', '¿ Esta Seguro Que Desea editar Ventas?',
 function(){
 
 actualizarVenta();
 
 tituloventas=document.getElementById("tituloventas");
  tituloventas.innerHTML = "Agregar ventas";
  ev=0;


}
 , function(){ 
  console.log("Cancelado");
    ev=1;

  });
    
        return false;
      }else{
        
       ingresarVenta();
          return false;
      }
       
    }
});

$( "#register_form_gastos" ).submit(function(event) {
 var gastos= $('#txtgastos').val();
    var fecha_gasto= $('#txtfecha_gastos').val();
    var descripcion= $('#comment_gastos').val();
    var categoria= $('#txtcategoria').val();
    
    if(gastos=="" || fecha_gasto=="" || descripcion=="" || categoria==""){
     
      alertify.error("Faltan datos por rellenar");
       return false;
    }else{ 

    if(eg==1){ 
    


alertify.confirm('Editar gastos', '¿ Esta Seguro Que Desea editar gastos?',
 function(){
 
 actualizarGasto();
 titulogasto=document.getElementById("modaltitulogasto");
  titulogasto.innerHTML = "Agregar Gastos";
  eg=0;


}
 , function(){ 
  console.log("Cancelado");
    eg=1;

  });

    
       return false;
    }else{
     ingresarGasto();

          return false;
    }  
       
    }
});


function ingresarVenta(){
    var libras= $('#txtcafevendidas').val();
    var fecha_venta= $('#txtfecha_ventas').val();
    var descripcion= $('#comment_ventas').val();
    var tipo_venta= $('#txttipo_venta').val();
    var id_cosecha=<?php echo $_GET['idcosecha'] ?>;

      var datos='libras='+libras+'&fecha_venta='+fecha_venta+'&descripcion='+descripcion+'&tipo_venta='+tipo_venta+'&id_cosecha='+id_cosecha;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_ventas_cosecha_logic.php',
    data:datos,
    success:function(res){
      if(res==1){

       $('.alert-success').removeClass('hide').html("Agregado correctamente");
       verinformacionventas(); 
       vermovimientosventas();
        $('#txtcafevendidas').val("");
        $('#txtfecha_ventas').val("");
        $('#comment_ventas').val("");
        $('#txttipo_venta').val("");
         setTimeout(function(){    $('#modalventas').modal('hide');    
          $('.alert-success').removeClass('hide').html("");               
                       }, 1000);


       

      }else{
        alertify.error("Error del servidor");
      }
     
      
      
    }


  });

  

   // alert(libras+''+fecha_venta+''+descripcion+''+tipo_venta+''+id_cosecha);

}   


function ingresarGasto(){
    var gastos= $('#txtgastos').val();
    var fecha_gasto= $('#txtfecha_gastos').val();
    var descripcion= $('#comment_gastos').val();
    var categoria= $('#txtcategoria').val();
    var id_cosecha=<?php echo $_GET['idcosecha'] ?>;

  var datos='txtgastos='+gastos+'&fecha_gasto='+fecha_gasto+'&descripcion='+descripcion+'&categoria='+categoria+'&id_cosecha='+id_cosecha;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_gastos_cosecha_logic.php',
    data:datos,
    success:function(res){
      if(res==1){
        
        $('#txtgastos').val("");
        $('#txtfecha_gastos').val("");
        $('#comment_gastos').val("");
        $('#txtcategoria').val("");
       
        $('.alert-success').removeClass('hide').html("Agregado correctamente");
        vermovimientosgastos();
        verinformacionGastos();

           setTimeout(function(){    $('#modalgastos').modal('hide'); 
                             $('.alert-success').removeClass('hide').html("");
                       }, 1000);

      }else{
        alertify.error("Error del servidor");
      }
      
      
    }


  });

   // alert(gastos+''+fecha_gasto+''+descripcion+''+id_cosecha+''+categoria);

}  



function actualizarGasto(){
    var gastos= $('#txtgastos').val();
    var fecha_gasto= $('#txtfecha_gastos').val();
    var descripcion= $('#comment_gastos').val();
    var categoria= $('#txtcategoria').val();

  var datos='txtgastos='+gastos+'&fecha_gasto='+fecha_gasto+'&descripcion='+descripcion+'&categoria='+categoria+'&id_gasto='+id_gasto;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/actualizar_gastos_logic.php',
    data:datos,
    success:function(res){
   
      if(res==1){
        
        $('#txtgastos').val("");
        $('#txtfecha_gastos').val("");
        $('#comment_gastos').val("");
        $('#txtcategoria').val("");
       
        $('.alert-success').removeClass('hide').html("Actualizado correctamente");
        verinformacionGastos();
        vermovimientosgastos();
        verinformacionventas(); 
       vermovimientosventas();

           setTimeout(function(){    $('#modalgastos').modal('hide'); 
                             $('.alert-success').removeClass('hide').html("");
                       }, 1000);

      }else{
        alertify.error("Error del servidor");
       
      }
      
      
    }


  });

   // alert(gastos+''+fecha_gasto+''+descripcion+''+id_cosecha+''+categoria);

} 





function actualizarVenta(){
   var libras= $('#txtcafevendidas').val();
    var fecha_venta= $('#txtfecha_ventas').val();
    var descripcion= $('#comment_ventas').val();
    var tipo_venta= $('#txttipo_venta').val();
   

      var datos='libras='+libras+'&fecha_venta='+fecha_venta+'&descripcion='+descripcion+'&tipo_venta='+tipo_venta+'&id_venta='+id_venta;
   $.ajax({

    type:'POST',
    url:'../funcionesLogic/actualizar_venta_logic.php',
    data:datos,
    success:function(res){
   
      if(res==1){
        
       $('#txtcafevendidas').val("");
        $('#txtfecha_ventas').val("");
        $('#comment_ventas').val("");
        $('#txttipo_venta').val("");
       verinformacionventas(); 
       vermovimientosventas();
        vermovimientosgastos();
        verinformacionGastos();
        $('.alert-success').removeClass('hide').html("Actualizado correctamente");
     

           setTimeout(function(){    $('#modalventas').modal('hide'); 
                             $('.alert-success').removeClass('hide').html("");
                       }, 1000);

      }else{
        alertify.error("Error del servidor");
       
      }
      
      
    }


  });

   // alert(gastos+''+fecha_gasto+''+descripcion+''+id_cosecha+''+categoria);

} 



$(".close").click(function(){
 $('#txtgastos').val("");
 $('#txtfecha_gastos').val("");
 $('#comment_gastos').val("");
$('#txtcategoria').val("");
 $('#txtcafevendidas').val("");
$('#txtfecha_ventas').val("");
$('#comment_ventas').val("");
$('#txttipo_venta').val("");
titulogasto=document.getElementById("modaltitulogasto");
  titulogasto.innerHTML = "Agregar Gastos";

   tituloventas=document.getElementById("tituloventas");
  tituloventas.innerHTML = "Agregar ventas";
  eg=0;

});


</script>
