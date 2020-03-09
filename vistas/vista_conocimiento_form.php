

<!DOCTYPE html>
<html>
<head>
	<title>Vista conocimientos</title>
		<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>
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
        <a class="nav-link" style="color:white" href="#">Conocimientos y saberes</a>
      </li>
    
    </ul>
  </div>
  <a href="perfil.php" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
  <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>


 <div class="row">
 	<div class="col-2"></div>
<div class="card col-8" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Comprar un carro</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="col-2"></div>
</div>	





   <script src="estilos/js/jquery.min.js" ></script>
      <script src="estilos/popper/popper.min.js"></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>
</body>
</html>