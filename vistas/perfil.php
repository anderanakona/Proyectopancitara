<?php
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';

 include_once 'confirmacion_cerrarsession.php';


//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();


if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$filas=$user->setUser($userSession->getCurrentUser());

$tipo=$filas["tipo"];
$id_usuario=$filas["id_usuario"];
$nombre_usuario=$filas["nombre_usuario"];
$apellido=$filas["apellido"];
$nombre_persona=$filas["nombre"];
$genero=$filas["genero"];



}else{
header('Location: home.php');
}




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
  require "lang/es.php";
}

if($tipo!=2) {

   require "lang/es.php";
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo $nombre_persona.' '.$apellido ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/css/main.css">  
     
   <link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
  <!-- Custom fonts for this template-->
  <link href="estilos/paginamaestra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="estilos/paginamaestra/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">



  
     <script src="estilos/js/jquery.min.js" ></script>
      <script src="estilos/popper/popper.min.js"></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>






</head>
<body>
<?php if ($tipo!=4): ?>

  
  <header> 

<nav class="navbar navbar-expand-lg
<?php if($tipo==3||$tipo==1){
  echo "navbar-dark bg-primary";
}else{
  echo "navbar-light bg-success";
} ?>

 ">
  <a class="navbar-brand" href="vista_campesino_form.php"><?php echo $lang["inicio"] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <?php if($tipo==2) { ?>
     <ul class="navbar-nav">
       <li class="nav-item"> 
        <form method="POST">
  <select name="lang" class="mdb-select md-form">
    <option value="" selected="selected"><?php echo $lang["menu_lenguaje"]; ?></option>
    <option value="es" >español</option> 
    <option value="ki">kichwa</option> 
  </select>

  <button type="submit"><?php echo $lang["boton_cambio_idioma"] ?></button>  

  </form>
   </li>

  <li class="nav-item">
        <a class="nav-link" style="color:white" href="VistaGeografia.php">Geografia la vega cauca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="musica_campesina.php">Musica</a>
      </li>

     </ul>

   <?php }else{
     require "lang/es.php";
   } ?>
  </div>
   <a href="perfil.php?id_usuario=<?php echo $id_usuario ?>&nombre_usuario=<?php echo $nombre_usuario ?>" class="navbar-brand">
  <?php echo $lang["boton_actualizar_usuario"] ?>
    <span class="glyphicon glyphicon-user"></span></a> 
    <a href="logout.php" style="color: white;"><?php echo $lang["cerrar_sesion"] ?></a>
</nav>

</header>
<?php endif ?>



  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <ul <?php if($tipo!=4){ echo "hidden";} ?>  class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        <span class="input-group-text"><img src="estilos/imagenes/escudovega.png" width="30px"></span>
        </div>
        <div class="sidebar-brand-text mx-3">Union, trabajo y servicio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="vista_urbano_form.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pagina de inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="vista_urbano_form.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Proyectos</span>
        </a>
       
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" >
          <i class="fas fa-laugh-wink"></i>
          <span>Eventos</span>
        </a>
      
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

   

    

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav <?php  if($tipo!=4){ echo "hidden";} ?> class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

                  

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre_persona ?> &nbsp;<?php echo $apellido ?></span>
               <span class=" glyphicon glyphicon-user rounded-circle"></span>
 

               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="perfil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" href="#" data-toggle="modal" data-target="#modalcerrarsesion">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesion

                </button>
              </div>
            </li>

          </ul>

        </nav>

      </div>
      <!-- End of Main Content -->
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" <?php  if($tipo!=4){ echo "hidden";} ?> >
            <h1 class="h3 mb-0 text-gray-800" <?php  if($tipo!=4){ echo "hidden";} ?> >Alcaldia de la vega Cauca</h1>
          </div>

        

         

          <!-- Content Row -->
          <div class="row">

            

            <div class="col-lg-10 mb-4">

              
                  <h1 class="m-0 font-weight-bold text-primary">Perfil</h1>
                
<div class="container">
  <h2><?php echo $lang["boton_actualizar_usuario"] ?></h2>
 
  <form onsubmit="return actualizar_cuenta();" role="form" class="needs-validation" method="POST"  novalidate>
    <div class="form-group">
      <label for="txtcedula"><?php echo $lang["cedula"] ?>:</label> 
      <input type="text" class="form-control" id="txtcedula" placeholder="Cedula" value="<?php echo $filas["cedula"] ?>" disabled name="txtcedula" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>    
    <div class="form-group">
      <label for="txtnombre"><?php echo $lang["nombre"] ?>:</label>
      <input type="input" class="form-control" id="txtnombre" placeholder="<?php echo $lang["nombre"] ?>" value="<?php echo $filas["nombre"] ?>" name="txtnombre" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
    <div class="form-group">
      <label for="txtapellido"><?php echo $lang["apellido"] ?>:</label>
      <input type="input" class="form-control" id="txtapellido" placeholder="<?php echo $lang["apellido"] ?>" value="<?php echo $filas["apellido"] ?>" name="txtapellido" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
    <div class="form-group">
      
       <label for="txtgenero"><?php echo $lang["genero"] ?>:</label>  
           <select class="form-control" name="txtgenero" id="txtgenero"   required>

              
              <option value="1" <?php if($genero==1){
                echo "selected";
              }  ?>  ><?php echo $lang["masculino"] ?></option>
              <option value="2"    <?php if($genero==2){
                echo "selected";
              }  ?>  ><?php echo $lang["femenino"] ?></option>
            
        </select>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

     
    
    <div class="form-group">
      <label for="txtusuario"><?php echo $lang["nombre_usuario"] ?>:</label>
      <input type="input" class="form-control" id="txtusuario" disabled placeholder="Nombre usuario" value="<?php echo $filas["nombre_usuario"] ?>" name="txtusuario" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

    <div class="form-group">
      <label for="txtusuario"><?php echo $lang["telefono"] ?>:</label>
      <input type="input" class="form-control" id="txttelefono"  placeholder="<?php echo $lang["telefono"] ?>" value="<?php echo $filas["telefono"] ?>" name="txttelefono" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>



    <div class="form-group">
      <label for="txtcontrasena"><?php echo $lang["contrasena"] ?>:</label>
      <input type="password" class="form-control" id="txtcontrasena" placeholder="<?php echo $lang["contrasena"] ?>" name="txtcontrasena" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
     <div class="form-group">
      <label for="txtcontrasena1"><?php echo $lang["contrasena1"] ?>:</label>
      <input type="password" class="form-control" id="txtcontrasena1" placeholder="<?php echo $lang["contrasena1"] ?>" name="txtcontrasena1" required>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

     
   
    <button type="submit" class="btn btn-primary" id="envio_cuenta"><?php echo $lang["boton_registro"] ?></button>
  </form>
</div>

              <!-- Approach -->
              

            </div>
          </div>

        </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>

           
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>




</body>
</html>





<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');    
       
      }, false);
    });
  }, false);
})();
</script>




<script type="text/javascript">
  $(document).ready(function() {

    document.getElementById("envio_cuenta").disabled = true;
  //variables
  var pass1 = $('[name=txtcontrasena]');
  var pass2 = $('[name=txtcontrasena1]');
  var confirmacion = "Las contraseñas si coinciden";
  var negacion = "No coinciden las contraseñas";
  var vacio = "La contraseña no puede estar vacía";
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  //función que comprueba las dos contraseñas
  function coincidePassword(){
  var valor1 = pass1.val();
  var valor2 = pass2.val();
  //muestro el span
  span.show().removeClass();
  //condiciones dentro de la función

  //la condicion para cuando no coinciden las 
  if(valor1 != valor2){
  span.text(negacion).addClass('negacion'); 
   document.getElementById("envio_cuenta").disabled = true; 
  document.getElementById("txtcontrasena1").style.background="red";
  }
  if(valor1.length==0 || valor1==""){
  span.text(vacio).addClass('negacion'); 
  document.getElementById("envio_cuenta").disabled = true; 
  

  }
 
  if(valor1.length!=0 && valor1==valor2){
  span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
  document.getElementById("envio_cuenta").disabled = false; 
  document.getElementById("txtcontrasena1").style.background="";
  }
  }
  //ejecuto la función al soltar la tecla
  pass2.keyup(function(){
  coincidePassword();
  });
});
</script>



<script type="text/javascript">
   function actualizar_cuenta(){
    var nombre=$('#txtnombre').val();
    var apellido=$('#txtapellido').val();
    var  genero=$('#txtgenero').val();
    var contrasena=$('#txtcontrasena1').val();
    var telefono=$('#txttelefono').val();
    var id_usuario=<?php echo $id_usuario; ?>;




     var datos='txtnombre='+nombre+'&txtapellido='+apellido+'&txtgenero='+genero+'&txtcontrasena1='+contrasena+'&txtid_usuario='+id_usuario+'&txttelefono='+telefono;



     $.ajax({

    type:'POST',
    url:'../funcionesLogic/actualizar_usuario_logic.php',
    data:datos,
    success:function(res){
 


   if(res==-1){
   alertify.error("faltan campos por llenar")
   }else if(res==1){
        alertify.success("Actualizacion exitosa");
        console.log(genero);
          
 }
         
        
 }


  });
     return false;
  }



</script>