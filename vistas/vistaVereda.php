<?php
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';
include_once '../controlador/VeredaControlador.php';



$listaVereda=VeredaControlador::getVereda();

//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();


if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());


}else{
header('Location: home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>veredas</title>
  <meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>

	 <header>

      
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="vistaprincipal.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="vistaVereda.php">registro censo</a>
      </li>
           
    </ul>
  </div>
    <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>

<style type="text/css">
  .dot {
  height: 65px;
  width: 65px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
html, body{
  background-image: url(estilos/imagenes/escudopancitara.png);
    background-size: cover;
      background-repeat: no-repeat;
    }
</style>

<br><br><br>
<center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
  Ayuda
</button></center>
<br>

<div class="d-flex justify-content-center h-100">

  <div class="row">


  <ul class="list-group list-group-horizontal">

    <?php 
     foreach ($listaVereda as $filas){
    ?>

  
    <li  class="list-group-item">
      <span class="dot"  style="background-color: <?php echo $filas['color']; ?>" ></span>
      <br>
        <a href="vistaFamilia.php?id_vereda=<?php echo $filas["id_vereda"] ?>&nombre_vereda=<?php echo $filas["nombre_vereda"] ?>"><?php echo $filas["nombre_vereda"] ?></a> </li>

    <?php } ?>
  </ul>
  </div>
</div>

<!-- Button trigger modal -->
>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Censo Indigena</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>1. El censo se realiza por vereda.</p>
        <p>2. El censo se realiza por familia.</p>
        <p>3. La familia tiene que estar conformada por una cabeza familiar o jefe familiar.</p>
        <p>4. Las demas personas que conforman la familia se debe saber que parentesco tiene con el jefe familiar.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>

  
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>

 


</body>
</html>



