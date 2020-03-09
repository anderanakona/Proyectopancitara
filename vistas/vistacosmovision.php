

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


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang["cosmovision_yanacona"] ?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>
<header>      
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="home.php"><?php echo $lang["inicio"] ?></a>
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
 
</nav>

</header>

<div class="row">
   <div class="list-group col-md-5" id="myList" role="tablist">
   	<h3 class="nav-link" ><?php echo $lang["cosmovision_yanacona"] ?></h3>
    <nav class="nav nav-pills flex-column">
   <a class="list-group-item list-group-item-action active" data-toggle="list" href="#cosmovision" role="tab"><?php echo $lang["significado_cosmovision"] ?></a>
   <a class="list-group-item list-group-item-action" data-toggle="list" href="#chirimia" role="tab"><?php echo $lang["chirimia"] ?></a>
   
    </nav>

   
 

</div>

<div class="tab-content  col-md-7">
 

 <div class="tab-pane active" id="cosmovision" role="tabpanel"> 
  	<img src="estilos/imagenes/imageneslogin/escudopancitara.jpg" width="100pxs">

  	<p><?php echo $lang["descripcion_cosmovision"]; ?>

</p>
  </div>


  <div class="tab-pane" id="chirimia" role="tabpanel"> 
  	<img src="estilos/imagenes/imageneslogin/arbol.png">

  	<p><?php echo $lang["descripcion_chirimia"] ?></p>
  </div>

   
</div>
</div>

<script>
  $(function () {
    $('#myList a:last-child').tab('show')
  })
</script>

 <script src="estilos/js/jquery.min.js" ></script>
  <script src="estilos/js/bootstrap.min.js"></script>
</body>
</html>

