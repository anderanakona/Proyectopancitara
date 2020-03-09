<?php
include_once '../controlador/UsuarioControlador.php';
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
	<title>Asociacion de campesinos</title>
	<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body style="background-color: rgb(239, 244, 247 );">
<header>    
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
  <a class="navbar-brand" href="vista_campesino_form.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" style="color:white" href="vista_cosecha_form.php">Federacion de cafeteros la vega</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white" href="vista_conocimiento_form.php">Conocimientos y saberes</a>
      </li>
    
    </ul>
  </div>
  <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
  <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>
<br><br>
  <div class="content">
                <div class="animated fadeIn">
                    <div class="row">


                         <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <a href="vistaEventos.php" class="navbar-brand" style="color: black;"><img class="embed-responsive-item" src="estilos/imagenes/eventos.png" allowfullscreen></img></a>

                                </div>
                                <div class="card-body">
                                    <a href="vistaEventos.php" class="navbar-brand" style="color: black;"> <h4 class="card-title mb-3">Eventos y noticias</h4>
                                    <p class="card-text">Lugares: la Vega, Cauca y colombia</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <a href="vista_cosecha_form.php" class="navbar-brand" style="color: black;"> 
                                    <img class="embed-responsive-item" src="estilos/imagenes/cafe.jpg" allowfullscreen></img></a>

                                </div>
                                <div class="card-body">
                                 <a href="vista_cosecha_form.php" class="navbar-brand" style="color: black;">    <h4 class="card-title mb-3">La Federación  Cafeteros  la vega</h4>
                                    <p class="card-text">se une a la campaña para la prevención...</p></a>
                             
                                </div>
                            </div> 
                        </div>


                         <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <a href="vista_conocimiento_form.php" class="navbar-brand" style="color: black;"> 
                                    <img class="embed-responsive-item" src="estilos/imagenes/mayor.png" allowfullscreen></img></a>

                                </div>
                                <div class="card-body">
                                 <a href="vista_conocimiento_form.php" class="navbar-brand" style="color: black;">    <h4 class="card-title mb-3">Conocimientos y saberes</h4>
                                    <p class="card-text">saberes ancestrales de la personas mayores...</p></a>
                             
                                </div>
                            </div> 
                        </div>
                        

                         <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <a href="vistaGeografia.php" class="navbar-brand" style="color: black;"> 
                                    <img class="embed-responsive-item" src="estilos/imagenes/pancitara.jpg" allowfullscreen></img></a>

                                </div>
                                <div class="card-body">
                                 <a href="vistaGeografia.php" class="navbar-brand" style="color: black;">    <h4 class="card-title mb-3">Geografia la vega</h4>
                                    <p class="card-text"></p></a>
                             
                                </div>
                            </div> 
                        </div>

                         <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <a href="musica_campesina.php" class="navbar-brand" style="color: black;"> 
                                    <img class="embed-responsive-item" src="estilos/imagenes/musico.png" allowfullscreen></img></a>

                                </div>
                                <div class="card-body">
                                 <a href="musica_campesina.php" class="navbar-brand" style="color: black;">    <h4 class="card-title mb-3">musica de la region</h4>
                                    <p class="card-text"></p></a>
                             
                                </div>
                            </div> 
                        </div>
                    

                       
                   

                    </div><!-- .row -->
                </div><!-- .animated -->
            </div><!-- .content -->





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
     <center> <img src="" id="imagen" width="100" height="100"></center>         
      </div>
      <div class="modal-footer">
        <p id="descripcion"></p>


      </div>
    </div>
  </div>
</div>

 
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
</body>
</html>