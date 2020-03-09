<?php 
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';

$userSession = new UserSession();
$user = new UsuarioControlador();

$id_vereda=$_GET["id_vereda"];

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
 	<title>Registro</title>
    <link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
    <link rel="stylesheet" href="estilos/css/main.css">  
      <link rel="stylesheet" type="text/css" href="estilos/datatables/datatables.min.css"/>
       <link rel="stylesheet"  type="text/css" href="estilos/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
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
        <a class="nav-link" href="vistaVereda.php">Registro censo</a>
      </li>
            
    </ul>
  </div>
    <?php include_once 'confirmacion_cerrarsession.php';
 ?>
  <button class="btn btn-link" style="color: white;"  data-toggle="modal" data-target="#modalcerrarsesion">Cerrar sesion</button>
</nav>

</header>


<style type="text/css">
#register_form fieldset:not(:first-of-type) {
display: none;
}

</style>


<div>
    <!-- modal  actualizar  -->
<!-- Modal -->


<div class="modal fade" id="modalcrearPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Agregar Familia-allyu  <span class="glyphicon glyphicon-home"></span>  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

 	<div class="container">
<h2>REGISTRO</h2>

<div class="alert alert-success hide"></div>
<form id="register_form" name="register_form" novalidate  method="post" autocomplete="off">

<h2>Datos del jefe o tayta de familia</h2>
<div class="col-sm-10">
    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-king"></span>
            </div>
            <input type="input" class="form-control" placeholder="Cedula-PANKALLI" id="txtCedula">
   </div>

	<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-tree-conifer"></span>
            </div>
            <input type="input" class="form-control" placeholder="Nombres-KIKIN SHUTI" id="txtNombres">
 </div>

<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-home"></span>
            </div>
            <input type="input" class="form-control" placeholder="Apellidos-AYLLU SHUTI" id="txtApellidos">
 </div>



	 <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-time"></span>
            </div>
            <input type="date" name="txtFecha_nacimiento" class="form-control input-sm" id="txtFecha_nacimiento">
  
           

    </div>

    <div class="input-group form-group alert alert-primary" role="alert">
       
               <span id="edadCalculada"></span>
          
    </div>



   
      
    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-user"></span>
            </div>
            <select class="form-control" id="txtGenero">
            	<option value="1">Masculino-KHARI</option>
            	<option value="2">Femenino-WARMI</option>           	
            	
            </select>
    </div>


 <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-wrench"></span>
            </div>
            <select class="form-control" id="txtOcupacion">
              <option value="Artesano-MAKIRURAY">Artesano-MAKIRURAY</option>
              <option value="Musico-TAKINA">Musico-TAKINA</option>
              <option value="Medicino tradicional-HAMPI">Medico tradicional-HAMPI</option> 
              <option value="Agricultor-CHAKRAKAMAY">Agricultor-CHAKRAKAMAY</option>             
              
            </select>
    </div>

    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-envelope"></span>
            </div>
            <input type="input" class="form-control" placeholder="correo-ANTANIKIK CHASKI" id="txtCorreo">
   </div>



</div>

<div class="modal-footer">
  <input type="submit" name="submit" class="submit btn btn-success" value="Aceptar" />

</div>



</form>
</div>
   </div>    
       
    </div>
  </div>
</div>
</div>

<br>
<br>

  <button class="btn btn-warning"  data-toggle="modal" data-target="#modalcrearPersona">Crear nueva Familia-allyu</button>

 <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                      <table id="example"  class="table table-hover">
   <thead>
                <tr>
                  <th>N°</th>
                  <th>Nombres jefe o jefa</th>
                  <th>Apellidos</th>
                  <th>Parentesco</th>
                  <th>acciones</th>
                </tr>
    </thead>
<?php 

include '../controlador/FamiliaControlador.php';
 $cont=0;
$id_vereda=$_GET['id_vereda'];

$familia = FamiliaControlador::getFamiliajefe($id_vereda);
foreach ($familia as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];

              $cont++;
 ?>

    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['nombre_persona'] ?></td>
    <td><?php echo $filas['apellido_persona'] ?></td>
    <td><?php echo $filas['parentesco'] ?></td>  

    <td> 
   <a href="registroPersona.php?id_familia=<?php echo $filas['id_familia'] ?>&nombre_vereda=<?php echo $filas['nombre_vereda'] ?>" >agregar personas al nucleo familiar</a>
   </td> 





    </tr>
     <?php } ?>
    </tbody>
   </table>                 
                    
  </div>   





<script src="estilos/js/jquery.min.js" ></script>
<script src="estilos/js/bootstrap.min.js"></script> 
<script src="estilos/js/alertify.js" ></script>

      <script src="estilos/popper/popper.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="estilos/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="estilos/js/main.js"></script>  


 <script type="text/javascript">
  var edad=0;
  $(document).ready(function(){
    

    $('#txtFecha_nacimiento').change(function(){
      $.ajax({
        type:"POST",
        data:"fecha=" + $('#txtFecha_nacimiento').val(),
        url:"../funcionesLogic/funcioncalcular_edad.php",
        success:function(r){
          edad=r;
          $('#edadCalculada').text(r + " años");
        }
      });
    });
  });
</script>




<script type="text/javascript">
    
$(".close").click(function(){
  setTimeout(function(){window.location.href = '';}, 2000);

});



// Handle form submit and validation
$( "#register_form" ).submit(function(event) {
var error_messages = 'faltan datos por seleccionar';
 var cedula=$('#txtCedula').val();
var nombres=$('#txtNombres').val();
var apellidos=$('#txtApellidos').val();
var genero=$('#txtGenero').val();
var fecha_nacimiento=$('#txtFecha_nacimiento').val();
var correo=$('#txtCorreo').val();



 if (cedula=='' || nombres=='' || apellidos=='' || genero=='' || fecha_nacimiento=='') {
  error_messages='faltan datos personales por rellenar';
  $('.alert-success').removeClass('hide').html(error_messages);
  return false;
}else{

 crearPersona();
  return false;

}
});




 function crearPersona(){
var cedula=$('#txtCedula').val();
var nombres=$('#txtNombres').val();
var apellidos=$('#txtApellidos').val();
var genero=$('#txtGenero').val();
var fecha_nacimiento=$('#txtFecha_nacimiento').val();
var correo=$('#txtCorreo').val();
var ocupacion=$('#txtOcupacion').val();

   
var id_vereda= <?php echo $id_vereda; ?>;




  var datos='txtCedula='+cedula+'&txtNombres='+nombres+'&txtApellidos='+apellidos+'&txtGenero='+genero+'&txtFecha_nacimiento='+fecha_nacimiento+'&txtCorreo='+correo+'&txtid_vereda='+id_vereda+'&txt_edad='+edad+'&txtOcupacion='+ocupacion;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_familia_logic.php',
    data:datos,
    success:function(res){
      
       if(res==2){
        alertify.error("error al agregar");
       }  
        if(res==1){
   
           alertify.confirm('Registro Usuario', 'Registro exitoso', function(){ 

            alertify.success('exitoso');
            setTimeout(function(){ window.location.href = '';                    
                       }, 2000);


            }
                , function(){ alertify.error('Cerrar');
                setTimeout(function(){
              window.location.href = '';                           
                       }, 2000);


              });
             $('#modalcrearPersona').modal('hide');
             

       
       }else{
        alertify.confirm('Registro Usuario', 'Usuario ya existe', function(){ alert('Cedula ya existe'+res) }
                , function(){ alertify.error('Cerrar')});
       }
    }


  });
     return false;

}




/*$.ajax({
      
            type:"POST",
            data:'id_vereda='+ <?php echo $id_vereda; ?>,
             url:'../componentes/tablaFamilia.php',
             success:function(respuesta){
                 
               $('#listafamilia').html(respuesta);
           
             
             }


   });*/



 </script>


 
 </body>
 </html>


