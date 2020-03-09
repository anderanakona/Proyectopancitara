


<?php
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';
include_once '../controlador/EventoControlador.php';   


//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();


if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$filas=$user->setUser($userSession->getCurrentUser());

$tipo=$filas["tipo"];
$id_usuario=$filas["id_usuario"];
$nombre_usuario=$filas["nombre_usuario"];

if($tipo==4){
        header('Location: vista_urbano_form.php');
}else if($tipo==1){
  header('Location: vista_principal');
}

}else{
header('Location: home.php');
}


//codigo para cambiar de idioma




if(isset($_POST["lang"])){
  $lang=$_POST["lang"];
  if(!empty($lang)){
    $_SESSION["lang"]=$lang;
  }
}

if(isset($_SESSION["lang"])){
  $lang=$_SESSION["lang"];

  require "lang/".$lang.".php";
}else{
  require "lang/ki.php";
}


$tipo_usuario=1;

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang["titulo_pagina"]; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>

  <style type="text/css">
    body, html{
      background-image: url('estilos/imagenes/arcoiris.gif');
      background-size: cover;
      background-repeat: no-repeat;
     height: 90%;
     font-family: 'Numans', sans-serif;
    }

    .card{     
     background-color: rgba(0,0,0,0.5) !important;
     color:white;
    }
  </style>
<header>    
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#minga"><?php echo $lang["inicio"] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <ul class="navbar-nav">
       <li class="nav-item"> 
        <form method="POST" hidden>
  <select name="lang" class="mdb-select md-form">
    <option value="" selected="selected"><?php echo $lang["menu_lenguaje"]; ?></option>
    <option value="es" >español</option> 
    <option value="ki">kichwa</option> 
  </select>

  <button type="submit"><?php echo $lang["boton_cambio_idioma"] ?></button>  

</form></li>
     </ul>
  </div>
   <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand"><?php echo $lang["boton_actualizar_usuario"] ?><span class="glyphicon glyphicon-user"></span></a> 
  
  <a href="logout.php" style="color: white;"><?php echo $lang["cerrar_sesion"] ?></a>
</nav>

</header>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    
<div class="container" style="max-width:600px; max-height: 400px;" >
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000" >
      
      <a class="navbar-brand" rel="home" href="vistasimbologia.php">
     <img style="max-width:600px; max-height: 640px;" src="estilos/imagenes/simbologiayana.jpg">

       <div class="carousel-caption">
        <h3><?php echo $lang["simbologia_yanacona"]; ?></h3>
      </div>
    </a>
    </div>
    <div class="carousel-item" data-interval="2000">
      
     <a class="navbar-brand" rel="home" href="vistacosmovision.php">
     <img style="max-width:600px; max-height: 640px;" src="estilos/imagenes/cosmovision.jpg">

       <div class="carousel-caption">
        <h3><?php echo $lang["cosmovision_yanacona"]; ?></h3>
       
      </div>
     </a>
    </div>
    <div class="carousel-item" data-interval="2000">
      
     <a class="navbar-brand" rel="home" href="vistacosmovision.php">
     <img  src="estilos/imagenes/plantamedicinal.jpg" width="600" height="450">

       <div class="carousel-caption">
        <h3><?php echo $lang["medicina_tradicional"]; ?></h3>
       
      </div>
     </a>
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</div> 

  </div>
<script type="text/javascript">
  
  var id_evento=0;
</script>
  


<?php 
$filas_eventos=EventoControlador::getEvento($tipo_usuario);
  

 ?>

 <?php foreach ($filas_eventos as $filas):
  $id_evento=$filas["id_evento"];
  $imagenscr='data:image/jpeg;base64,'.base64_encode($filas["imagen"]);
  $descripcion=$filas["descripcion"];


    $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $imagenscr;
  ?>

     

  <div class="col-md-3">
      <div class="card" >

                  
            <div class="card-body"  data-toggle="modal" data-target="#exampleModal" onclick="ver('<?php echo  $id; ?>')">

              <img src="<?php echo $imagenscr; ?>" width="200">
               <h4 class="card-title mb-3"><?php echo $filas["nombre_evento"] ?></h4>
             </div>
            
      </div>
  </div>



   <?php endforeach ?>

</div>
<?php 


 ?>


<script type="text/javascript">
  
  function ver(datos){
  
   titulo=document.getElementById("titulo");
   descripcion=document.getElementById("descripcion");

   d=datos.split('||');          
   titulo.innerHTML=(d[1]);
   descripcion.innerHTML=(d[2]);
    document.getElementById("imagen").src=(d[3]);;


  }

</script>



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
        <img src="" id="imagen" width="200">
        <p id="descripcion"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" hidden>Close</button>        
      </div>
    </div>
  </div>
</div>


      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
 <script src="estilos/js/alertify.js" ></script>

</body>
</html>
