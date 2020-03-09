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


if($tipo==3){
  header('Location: vista_campesino_form.php');
}else if($tipo==2){
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
	<title>veredas</title>
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>


  <style type="text/css">
    html,body{
      background-image: url('estilos/imagenes/imageneslogin/espirales.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
.card{
  background-color: rgba(0,0,0,0.5) !important; 
}
h1, p{
  color: white;
}
  </style>


	<header>

			
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
     <?php if($tipo==1){ 
     ?>
    <li class="nav-item">
        <a class="nav-link" href="vistaproyectos_home.php">Proyectos</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="vistaVereda.php">registro censo</a>
     </li>
     <?php }  ?>
      
      
    </ul>
  </div>
  <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>

  


 <div class="jumbotron card">
        <div class="container">
          <h1 class="display-3">Hola, bienvenido!</h1>
          <p>"la tierra es nuestra madre, nuestra vida y nuestra libertad" sabiduria guarani.</p>
         
        </div>
      </div>


 <script src="estilos/js/jquery.min.js" ></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>

</body>
</html>