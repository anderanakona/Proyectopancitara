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
 if($tipo!=1){
        header('Location: home.php');
}

}else{
header('Location: home.php');
}
?> 


<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
  <style type="text/css">
    
    html,body{
background-image: url('estilos/imagenes/canto.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 90%;
font-family: 'Numans', sans-serif;
}
  </style>

	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/css/main.css">  
      <link rel="stylesheet" type="text/css" href="estilos/datatables/datatables.min.css"/>
       <link rel="stylesheet"  type="text/css" href="estilos/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">


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
        <a class="nav-link" href="#">Proyectos</a>
     </li>
     
      
      
    </ul>
  </div>
  <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
 
</nav>

</header>
<br>
<div class="row">
<div class="col-sm-10">
	

     <div class="input-group form-group">
            <label for="txtVereda_resguardo">Elija opcion</label>
            <select class="form-control" id="txtVereda_resguardo">
               <option value="0">Resguardo en general</option>
              <option value="1">Vereda Chaopiloma</option>
              <option value="2">Vereda El Higueron</option>
              <option value="3">Vereda El Potrero</option>
              <option value="4">Vereda Julian</option>
              <option value="5">Vereda La Bajada</option>
              <option value="6">Vereda La Candelaria</option>
              <option value="7">Vereda La Pradera</option>
              <option value="8">Vereda La Zanja</option>
              <option value="9">Vereda Ledezma</option>
              <option value="10">Vereda Los Ciruelos</option>
              <option value="11">Vereda Rodrigos</option>
                          
              
            </select>
    </div> 
   
</div>
 <button class="btn btn-link"  data-toggle="modal" data-target="#gestionproyecto">Gestionar proyecto</button>

</div>

<div id="listainf_resguardo"></div>



 <script src="estilos/js/jquery.min.js" ></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>
    <script src="../funcionesJavascript/persona.js"></script>

      <script src="estilos/popper/popper.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="estilos/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="estilos/js/main.js"></script> 
</body>
</html>

<script type="text/javascript">

	  $(document).ready(function (){

        var id_vereda=0;
       $('#txtVereda_resguardo').change(function(){
          id_vereda=$('#txtVereda_resguardo').val();
            //  alertify.success(id_vereda);

               $.ajax({

            type:"POST",
            data:'id_vereda='+ id_vereda,
             url:'../componentes/tabla_vereda_inf.php',
             success:function(respuesta){
                 
               $('#listainf_resguardo').html(respuesta);
           
             
             }


           });
       });

       

     
      
  });
</script>

<script type="text/javascript">
  


</script>