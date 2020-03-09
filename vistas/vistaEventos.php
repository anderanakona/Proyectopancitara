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
}
?>
 <!DOCTYPE html>
 <html>
 <head>
  
 	<title>Registro</title>
  <meta charset="UTF-8">
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

  <style type="text/css">
      

    .card{     
     background-color: rgba(0,0,0,0.5) !important;
     color:white;
    }
  </style>
<?php if ($tipo!=4) {
  # code...
 ?>
  <header>


    
      
<nav class="navbar navbar-expand-lg 
<?php if($tipo==3){
  echo
  "navbar-dark bg-primary" ;
}else{
  echo "navbar-light bg-success";
} ?>
">
  <a class="navbar-brand" href="vistaprincipal.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
   
  </div>
  <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>


<?php include '../componentes/evento.php' ?>
<div id="listainf_evento" class="row"></div>

<?php } ?>
<?php 

include_once 'confirmacion_cerrarsession.php';

 ?>



<?php if ($tipo==4): ?>
  

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
        <a class="nav-link collapsed" href="vista_urbano_form.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Proyectos</span>
        </a>
        
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
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

          


           
           <?php include '../componentes/evento.php' ?>
           <div id="listainf_evento" class="row"></div>

          

            
      


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

<?php endif ?>







<script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
 <script src="estilos/js/alertify.js" ></script>


 
 </body>
 </html>


 <script type="text/javascript">
  


// Handle form submit and validation
$( "#register_form" ).submit(function(event) {

 var nombre_anecdota=$('#nombre').val();
var comment=$('#comment').val();
var imagen=$('#imagen').val();


 if (nombre_anecdota=='' || comment=='') {
  alertify.error("Algunos campos Vacios");
  return false;
}else{

 crearEvento();
  return false;

}
});




   

 function crearEvento(){
var nombre=$('#nombre').val();
var comment=$('#comment').val();
var fecha=$('fecha').val();
var imagen = $('#imagen')[0].files[0];
var id_usuario=$('#txtid_usuario').val();;

 var form = $('#register_form')[0];
 var data = new FormData(form);

  var datos=data;

   $.ajax({

    type:'POST',
    enctype: 'multipart/form-data',
    url:'../funcionesLogic/crear_evento_logic.php',    
    data:datos,
    processData: false,
    contentType: false,


    success:function(res){
      
      
   
            alertify.success('Exitoso');
           
           setTimeout(function(){       window.location.href = '';  
                      
                       }, 2000);
            
             

       
    }


  });
     return false;

}

 </script>

 <script type="text/javascript">
 var sel=4;
verinfo();
    $(document).ready(function (){

        var sel=0;
       $('#txt_tiposel').change(function(){
         
            //  alertify.success(id_vereda);
           verinfo();
             
       });

       

     
      
  });


      function verinfo(){

         sel=$('#txt_tiposel').val();
      $.ajax({

            type:"POST",
            data:'sel='+ sel,
             url:'../componentes/tabla_evento.php',
             success:function(respuesta){
                 
               $('#listainf_evento').html(respuesta);
           
             
             }


           });
  }
</script>