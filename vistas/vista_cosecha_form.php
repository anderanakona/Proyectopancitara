<?php
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/CosechaControlador.php';
include_once '../controlador/user_session.php';



//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();


if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$filas=$user->setUser($userSession->getCurrentUser());

$tipo=$filas["tipo"];
$id_usuario=$filas["id_usuario"];
$nombre_usuario=$filas["nombre_usuario"];
 if($tipo==2){
        header('Location: vista_indigena_form.php');
}else if($tipo==4){
        header('Location: vista_urbano_form.php');
}

}else{
header('Location: home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>
<header>    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="vista_campesino_form.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" href="vista_cosecha_form.php">Federacion de cafeteros la vega</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="vista_conocimiento_form.php">Conocimientos y saberes</a>
      </li>
    
    </ul>
  </div>
    <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
   <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>

<center><h1>Cosechas</h1></center>



<!-- Modal -->
<div class="modal fade" id="modalcosecha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo">Crear cosecha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
    <div class="form-group">
      <label for="txtnombre">Nombre Cosecha:</label>
      <input type="input" class="form-control" id="txtnombre" placeholder="Nombre de la cosecha" name="txtnombre">
    </div>


   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
        <button type="submit" class="btn btn-success" id="cosecha">Guardar</button>  
         
      </div>
    </div>
  </div>
</div>

<button class="btn btn-success" data-toggle="modal" data-target="#modalcosecha">Crear cosecha</button>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Ayuda</button>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ayuda cosecha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>1. Crear cosecha</p>
       <p>2. Dar en el link <a href="#">Agregar registros cosecha</a>  </p>
       <p>3. Agregar gastos y ventas de cafe en la venta de cafe cuantas libras vendio.</p>
       <p>4. puedes ver tu lista de movimientos.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>






 <div class="col-sm-12" >


   
    <table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Nombres  de la cosecha</th>
                  <th>Fecha registro</th>
                  <th>Acciones</th>
                  
                </tr>
    </thead>
<?php 

$cosecha =CosechaControlador::getcosecha($id_usuario);
$cont=0;
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
         <a href="vista_campesino_registrosmonetarios.php?idcosecha=<?php echo $filas['id_cosecha']; ?>&nombre_cosecha=<?php echo $filas['nombre_cosecha'] ?>">Agregar registros de la cosecha</a>
   </td> 

    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>




<script src="estilos/js/jquery.min.js" ></script>
<script src="estilos/js/bootstrap.min.js"></script> 
<script src="estilos/js/alertify.js" ></script>
<script src="estilos/popper/popper.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="estilos/datatables/datatables.min.js"></script>
    
      
    <script type="text/javascript" src="estilos/js/main.js"></script>  
</body>
</html>


<script type="text/javascript">
  


$("#cosecha").click(function(){
   var nombres=$('#txtnombre').val();
   if(nombres==''){
    alertify.error("Campos vacios");
   }else{
     var id_usuario=<?php echo $id_usuario ?>;
    var datos='txtnombre='+nombres+'&txtidusuario='+id_usuario;
     $.ajax({
    type:'POST',
    url:'../funcionesLogic/crear_cosecha_logic.php',
    data:datos,
    success:function(res){
      if(res==1){
        alertify.success('Registro exitosos');
    window.location.href = '';    
      }else{
        alertify.error("Error en el registro");
      }

    }

     });



    $('#modalcosecha').modal('hide');
    $('#txtnombre').val('');
   }

});


</script>

<script type="text/javascript">
  
/*$.ajax({
      
            type:"POST",
            data:'id_usuario='+ <?php echo $id_usuario; ?>,
             url:'../componentes/tabla_cosecha_user.php',
             success:function(respuesta){
                 
               $('#listacosecha').html(respuesta);
           
             
             }


   });*/

</script>