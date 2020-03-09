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
	<title>Musica</title>
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
         <a class="nav-link" href="#">Conocimientos y saberes</a>
      </li>
    
    
    </ul>
  </div>
    <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
  <a href="logout.php" style="color: white;">Cerrar sesion</a>
</nav>

</header>



	         <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-21by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8YkPOsJfNTk" allow='autoplay' allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Musica</h4>
                                    <p class="card-text">Mi pueblito la Vega Cauca</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tiVoYCUq564" allowfullscreen></iframe>

                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria:Musica del macizo</h4>
                                    <p class="card-text">Himno del macizo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HcA4edgdPdk" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Musica del Cauca</h4>
                                    <p class="card-text">Los hermanos medina.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/K5sE8jhD8Gw" allowfullscreen></iframe>

                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Musica del Cauca</h4>
                                    <p class="card-text">Samyos brothers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t1bS4sGNNx4" allowfullscreen></iframe>

                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Musica del Cauca</h4>
                                    <p class="card-text">Nectar de Colombia.</p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iXTjorMQugQ" allowfullscreen></iframe>

                                </div>

                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Musica de cuerda</h4>
                                    <p class="card-text">Musica de cuerda la Vega Cauca</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8DOOPFVZsEw" allowfullscreen></iframe>

                                </div>

                                <div class="card-body">
                                    <h4 class="card-title mb-3">Categoria: Danza el sanjuanero</h4>
                                    <p class="card-text">SSanjuanero huilense.</p>
                                </div>
                            </div>
                        </div>


                    </div><!-- .row -->
                </div><!-- .animated -->
            </div><!-- .content -->


            

</body>
</html>