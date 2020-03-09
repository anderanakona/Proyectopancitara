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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Geografia</title>
	<style>
	*{box-sizing:border-box;}
	.faq{
		width:500px;
		border:1px solid #0000ff;
	}
	

	.title-tab i{
		margin:8px;
	}

	.content-tab{
		padding:32px 8px;
	}

	.d-none{
		display:none;
	}



	</style>
	<link href="estilos/css/fontacordeon.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
		<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">

</head>
<body>

<style type="text/css">
	html,body{
    background-image: url('estilos/imagenes/vega.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 90%;
    font-family: 'Numans', sans-serif;
 }
 .card{
 	background-color: transparent;
 	color: white;
 }
 .colorboton{
 color: orange;
 }


</style>
	<header>    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="vista_campesino_form.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" href="">Geografia la vega cauca</a>
      </li>
    
    
    </ul>
  </div>
    <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand">Actualizar perfil<span class="glyphicon glyphicon-user"></span></a> 
  <a href="logout.php" style="color: white;">Cerrar sesion</a>
</nav>

</header>
<br>

	<div class="container">
		<div class="title-tab"><span class="glyphicon glyphicon-eye-open"></span><button class="btn btn-link colorboton">Reseña historica</button></div>
		<div class="content-tab card" >En el año de 1535, cuando ingresaron los españoles provenientes del Ecuador, comandados por Juana De Ampudia y enviados por sebastian de belalcazar tomaron esta ruta construyendo un camino para evitar el encuentro con el temible grupo Los Patianos, este camino es el que hoy constituye La Cruz, San Pablo, San Lorenzo, Bolivar, Almaguer, La Vega, La Sierra, Rosas, Timbio y Popayán. posteriormente, se procedio a dar vida oficial a una entidad politica, administrativa y encabezada por ANTONIO MATIAZ CABRAL DE MELO Y PINZON aquien se le considera el fundador de la vega en el año de 1.777 y finalmente se establecio el municipio de La Vega, mediante ordenanza de 1.874, con los caserios de Pancitara, Santa Barbara y Santa Juana.</div>
		<div class="title-tab"><span class="glyphicon glyphicon-eye-open"></span><button class="btn btn-link colorboton">Economia</button></div>
		<div class="content-tab card">MUNICIPIO DE LA VEGA El sector agropecuario constituye el sector dinámico sobre el que recae el peso de la economía del Municipio, aún en las actuales condiciones de profunda crisis de la economía campesina y de la pequeña producción, ha permitido la subsistencia de cientos de familias del Campo, que representan mas del 90% de la población, si tenemos en cuenta que la población total de la Vega se estima en treinta y tres mil ciento treinta y tres( 33.133) habitantes para el censo del año 2005, el cual fue publicado y ajustado en abril de 2008. <br> El café es el único producto que tiene un mercado asegurado, el Municipio de La Vega tiene una producción agropecuaria en ascenso, los productos que sobresalen son: El café posesionado en un 70%, la panela en 55% y el maíz en el 37%.</div>
		<div class="title-tab"><span class="glyphicon glyphicon-eye-open"></span><button class="btn btn-link colorboton">Limites</button></div>
		<div class="content-tab card">
			
NORTE - MUNICIPIO DE LA SIERRA <br>


SUR - MUNICIPIOS DE SAN SEBASTIAN Y ALMAGUER<br>


ESTE - MUNICPIO DE SOTARA<br>


OESTE - MUNICIPIO DE SUCRE Y PATIA<br>


Extensión total: 492 Km2<br>


Extensión área urbana:<br>


Extensión área rural:<br>


Altitud de la cabecera municipal (metros sobre el nivel del mar): 2.272<br>


Temperatura media:<br>

16º C<br>


Distancia de referencia:<br>

104 KM

 


		</div>
		<div class="title-tab"><span class="glyphicon glyphicon-eye-open"></span><button class="btn btn-link colorboton">Escudo</button></div>
		<div class="content-tab card">Representa las dos clases de climas que hay en el municipio, frío y cálido. El clima frío se representa con las dos espigas de trigo ya que es uno de los típicos productos de esta zona. El clima cálido: el café que ayuda a la economía de los campesinos del sector cálido. El cóndor: unos años atrás, por las montañas del municipio de La Vega, existían dichas aves. Planta de la Normal Antigua=La cual representa un valor muy importante para la población Vegueña, ya que fue la primera Institución Educativa la cual tiene unos 51 años.</div>
	</div>

 <script src="estilos/js/bootstrap.min.js"></script>
 <script src="estilos/js/jquery.min.js" ></script>
	<script>
		$(document).ready(function(){
			$(".content-tab:not(:eq(0))").toggle();
			$(".title-tab i").toggleClass("fa-plus");

			$(".title-tab").click(function(){
				$(".content-tab").hide();
				$(".title-tab i").removeClass("fa-minus");
				$(".title-tab i").addClass("glyphicon glyphicon-eye-open");
				$(this).next().show();
								
			})
		})

	</script>

Referencia de 	<a href="https://es.wikipedia.org/wiki/La_Vega_(Cauca)">http://www.wikipedia.org</a>

</body>
</html>