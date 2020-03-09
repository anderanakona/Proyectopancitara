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
$apellido_usuario=$filas["apellido"];
#echo $id_usuario;
 if($tipo==1){
        header('Location: vistaprincipal.php');
}else if($tipo==0){
    header('Location: vistagobernador_home.php');
}

}else{
header('Location: home.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ciudad</title>
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/css/main.css">  
      <link rel="stylesheet" type="text/css" href="estilos/datatables/datatables.min.css"/>
       <link rel="stylesheet"  type="text/css" href="estilos/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
  <!-- Custom fonts for this template-->
  <link href="estilos/paginamaestra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="estilos/paginamaestra/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body id="page-top">


<?php 

include_once 'confirmacion_cerrarsession.php';

 ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Proyectos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Proyectos:</h6>


        <div class="list-group" id="list-tab" role="tablist">
        <a class="collapse-item"  data-toggle="list" href="#list-pendiente" role="tab" aria-controls="home">Pendientes</a>
            <a class="collapse-item" data-toggle="list" href="#list-aprobado" role="tab" aria-controls="profile">Aprobados</a>
      <a class="collapse-item" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Proyectos rechazados</a>
      
           </div>

          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="vistaEventos.php">
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre_usuario ?> &nbsp;<?php echo $apellido_usuario ?></span>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alcaldia de la vega Cauca</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                   Promover los procesos colectivos de la economía colectiva.
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md- mb-4" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="card border-left-primary shadow h-50 py-2">
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Ayuda</a>
              </div>
            </div>

          

            
          </div>

         

          <!-- Content Row -->
          <div class="row">

            

            <div class="col-lg-10 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Proyectos</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                   
                  </div>
                  <div id="listaproyectos"></div>
                </div>
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









<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Revision Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="id_proyecto" id="id_proyecto" style="display: none;">
        

     <div class="form-group row">
    <h3 for="titulo" class="col-sm-4 col-form-label">Titulo proyecto:</h3>
    <div class="col-sm-8">
      <p  id="titulo"></p>
    </div>
      </div>
   <div class="form-group row">
    <h3 for="objetivo" class="col-sm-4 col-form-label">Objetivo general:</h3>
    <div class="col-sm-8">
      <p  id="objetivo"></p>
    </div>
      </div>

      <div class="form-group row">
    <h3 for="justificacion" class="col-sm-4 col-form-label">Justificacion:</h3>
    <div class="col-sm-8">
      <p  id="justificacion"></p>
    </div>
      </div>

        <div class="form-group row">
    <h3 for="descripcion1" class="col-sm-4 col-form-label">Descripcion:</h3>
    <div class="col-sm-8">
      <p  id="descripcion1"></p>
    </div>
      </div>

       <div class="form-group row">
    <h3 for="fecha" class="col-sm-4 col-form-label">Fecha de peticion:</h3>
    <div class="col-sm-8">
      <p  id="fecha"></p>
    </div>
      </div>

<h2>Revisar Proyecto </h2>
 <div class="form-group row">
    <label for="estado" class="col-sm-4 col-form-label">Estado</label>
    <div class="col-sm-8">
       <select class="form-control" id="estado">
              <option value="0">Rechazado</option>
              <option value="1">Aprobado</option>           
              
        </select>
    </div>
  </div>

<div class="form-group row">
    <label for="presupuesto" class="col-sm-4 col-form-label">presupuesto</label>
    <div class="col-sm-8">
      <input type="number"  class="form-control" id="presupuesto">

    </div>
  </div>




    <div class="form-group row">
    <label for="comentarios" class="col-sm-4 col-form-label">comentarios</label>
    <div class="col-sm-8">
      <textarea type="text"  class="form-control" id="comentarios"></textarea>
    </div>
  </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="crearrevision();">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>



<!----modal de aprobados----->


<!-- Modal -->
<div class="modal fade" id="modalaprobados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Revision Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
     <div class="form-group row">
    <h3 for="tituloapr" class="col-sm-4 col-form-label">Titulo proyecto:</h3>
    <div class="col-sm-8">
      <p  id="tituloapr"></p>
    </div>
      </div>
   <div class="form-group row">
    <h3 for="objetivoapr" class="col-sm-4 col-form-label">Objetivo general:</h3>
    <div class="col-sm-8">
      <p  id="objetivoapr"></p>
    </div>
      </div>

      <div class="form-group row">
    <h3 for="justificacionapr" class="col-sm-4 col-form-label">Justificacion:</h3>
    <div class="col-sm-8">
      <p  id="justificacionapr"></p>
    </div>
      </div>

        <div class="form-group row">
    <h3 for="descripcionapr" class="col-sm-4 col-form-label">Descripcion:</h3>
    <div class="col-sm-8">
      <p  id="descripcionapr"></p>
    </div>
      </div>

       <div class="form-group row">
    <h3 for="fechapeticion" class="col-sm-4 col-form-label">Fecha de peticion:</h3>
    <div class="col-sm-8">
      <p  id="fechapeticion"></p>
    </div>
      </div>

       <div class="form-group row">
    <h3 for="fechaapr" class="col-sm-4 col-form-label">Fecha de aprobacion:</h3>
    <div class="col-sm-8">
      <p  id="fechaapr"></p>
    </div>
      </div>

 

<div class="form-group row">
    <label for="presupuestoapr" class="col-sm-4 col-form-label">presupuesto</label>
    <div class="col-sm-8">
      <p id="presupuestoapr"></p>

    </div>
  </div>




    <div class="form-group row">
    <label for="comentariosapr" class="col-sm-4 col-form-label">comentarios</label>
    <div class="col-sm-8">
      <p   class="form-control" id="comentariosapr"></p>
    </div>
  </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ayuda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p> 1. podras tener acceso de los proyectos de los indigenas</p> 
    <p>2. revisar proyectos y darle sus propios comentarios.</p>
    <p>3. Aprobar y rechazar proyectos.</p>
      
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>













<!--los scripts-->
<script src="estilos/js/jquery.min.js" ></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>
    <script src="../funcionesJavascript/proyecto.js"></script>

      <script src="estilos/popper/popper.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="estilos/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="estilos/js/main.js"></script> 
</body>
</html>


<script type="text/javascript">


          
  
    $(document).ready(function (){

     
               $.ajax({

             url:'../componentes/tabla_proyecto_revision.php',
             success:function(respuesta){
                 
               $('#listaproyectos').html(respuesta);
           
             
             }


           });
       });


function crearrevision(){
  var mensaje = confirm("¿Desea guardar los cambios la revision del proyecto?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
var estado=$('#estado').val();
var comentarios=$('#comentarios').val();
var id_proyecto=$('#id_proyecto').val();
var presupuesto=$('#presupuesto').val();
var id_usuario=<?php echo $id_usuario ?>;

 
  
   if(estado==0 && comentarios==''){
 
      alertify.error("debes rellenar la casilla de comentario");

    
   }else if(presupuesto=='' && estado==1){
    alertify.error('debes rellenar presupuesto');
   }else{

  var datos='txtestado='+estado+'&txtcomentarios='+comentarios+'&txtid_proyecto='+id_proyecto+'&txt_idusuario='+id_usuario+'&txt_presupuesto='+presupuesto;


               $.ajax({

             type:'POST',
            url:'../funcionesLogic/crear_proyectoaceptacion_logic.php',
               data:datos,             
             success:function(respuesta){
                 
             if(respuesta==1){
              alertify.success("Excelente");
              setTimeout(function(){
              window.location.href = '';                           
                       }, 2000);

             }else{
alertify.error("muy mal"+ respuesta);
console.log(respuesta);
             }
           
             
             }


           });

   }
   
}
//Detectamos si el usuario denegó el mensaje
else {
alert("¡Haz denegado el mensaje!");
}

}
       

</script>






<script type="text/javascript">

  vervisible();
   $('#estado').change(function(){

vervisible();

 });


   function vervisible(){
var estado=$('#estado').val();
  if(estado==0){
    document.getElementById("presupuesto").disabled = true;
  }else{
    document.getElementById("presupuesto").disabled = false;
   }
  }
     
</script>


