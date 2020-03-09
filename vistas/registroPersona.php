<?php 
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';
include_once '../controlador/FamiliaControlador.php';

$userSession = new UserSession();
$user = new UsuarioControlador();
$id_familia=$_GET["id_familia"];
$cont=0;


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
  <meta charset="UTF-8">
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
        <a class="nav-link" href="vistaVereda.php">registro censo</a>
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
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modalcrearPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Crear persona-Runa  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

 	<div class="container">
<h2>REGISTRO</h2>

<div class="alert alert-success hide"></div>
<form id="register_form" name="register_form" novalidate  method="post" autocomplete="off">

<h2> Persona-Runa informacion</h2>
<div class="col-sm-10">

  <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-user"></span>
            </div>
            <select class="form-control" id="txttipodocumento">
              <option value="RC">Registro civil-RC</option>
              <option value="TI">Tarjeta de identidad-TI</option>
              <option value="CC">Cedula Ciudadania-CC</option>             
              
            </select>
</div>


    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-king"></span>
            </div>
            <input type="input" class="form-control" placeholder="Numero documento-PANKALLI" id="txtCedula">
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
            <input type="date" name="txtFecha_nacimiento" class="form-control" id="txtFecha_nacimiento">
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
              <span class="input-group-text  glyphicon glyphicon-pencil"></span>
            </div>
            <input type="input" class="form-control" placeholder="Parentesco con el jefe o jefa" id="txtParentesco">
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

  <button class="btn btn-warning" id="Crear persona"  data-toggle="modal" data-target="#modalcrearPersona">Crear nueva persona-Runa</button>
<div class="col-sm-12" id="tablanucleofamiliar">


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

$familia = FamiliaControlador::getFamiliaId($id_familia);
foreach ($familia as $filas){ 
        $id = $filas[6]."||".
              $filas[7]."||".
              $filas[8]."||".
              $filas[9]."||".
              $filas[10]."||".
              $filas[11]."||".
              $filas[12]."||".
              $filas[13]."||".
              $filas[14]."||".
              $filas[15]."||".
              $filas[16];

              $cont++;


 ?>

    <tr>
    <td><?php echo $cont; ?></td>
    <td><?php echo $filas['nombre_persona'] ?></td>
    <td><?php echo $filas['apellido_persona'] ?></td>
    <td><?php echo $filas['parentesco'] ?></td>  

    <td> 
         <button class="btn btn-link" data-toggle="modal" data-target="#modalactualizarPersona" onclick="obteneridpersona('<?php echo $id ?>');">Actualizar Runa</button>
   </td> 





    </tr>
     <?php } ?>
    </tbody>

   
   </table>

</div>
<?php foreach (FamiliaControlador::getGeneroMasculino($id_familia) as $filas): ?>
  <label>Numero de Hombres:</label> <?php echo $filas["nm"] ?>

<?php endforeach ?>
<br>

<?php foreach (FamiliaControlador::getGeneroFemenino($id_familia) as $filas): ?>
   <label>Numero de Mujeres:</label> <?php echo $filas["nf"] ?>
<?php endforeach ?>



<div>
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modalactualizarPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar persona-Runa  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <div class="container">
<h2>Actualizar</h2>

<div class="alert alert-success hide"></div>
<form id="update_form" name="update_form" novalidate  method="post">

<h2> Informacion</h2>
<div class="col-sm-10">

   <div class="input-group form-group">
           
            <input type="input" class="form-control"  id="txtid_a" hidden>
 </div>




   <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-user"></span>
            </div>
            <select class="form-control" id="txttipodocumento_a">
              <option value="RC">Registro civil-RC</option>
              <option value="TI">Tarjeta de identidad-TI</option>
              <option value="CC">Cedula Ciudadania-CC</option>             
              
            </select>
</div>
    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-king"></span>
            </div>
            <input type="input" class="form-control" placeholder="Numero documento-PANKALLI" id="txtCedula_a">
   </div>

    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-tree-conifer"></span>
            </div>
            <input type="input" class="form-control" placeholder="Nombres" id="txtNombres_a">
 </div>

<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-home"></span>
            </div>
            <input type="input" class="form-control" placeholder="Apellidos" id="txtApellidos_a">
 </div>


 <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-time"></span>
            </div>
            <input type="date" name="txtFecha_nacimiento" class="form-control" id="txtFecha_nacimiento_a">
 </div>

  <div class="input-group form-group alert alert-primary" role="alert">
       
               <span id="edadCalculada_a"></span>
          
    </div>

      
 <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-user"></span>
            </div>
            <select class="form-control" id="txtGenero_a">
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
              
              
            </select>
</div>

 <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-wrench"></span>
            </div>
            <select class="form-control" id="txtOcupacion_a">
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
            <input type="input" class="form-control" placeholder="correo" id="txtCorreo_a">
</div>

<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text glyphicon glyphicon-pencil"></span>
            </div>
            <input type="input" class="form-control" placeholder="Parentesco con el jefe o jefa" id="txtParentesco_a">
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
var parentesco=$('#txtParentesco').val();
var correo=$('#txtCorreo').val();


 if (cedula=='' || nombres=='' || apellidos=='' || genero=='' || fecha_nacimiento=='' || parentesco=='') {
	error_messages='faltan datos personales por rellenar';
  alertify.error(error_messages);
  $('.alert-success').removeClass('hide').html(error_messages);
  return false;
}else{

 crearPersona();
  return false;

}
});

// Handle form submit and validation
$( "#update_form" ).submit(function(event) {
var error_messages = 'faltan datos por seleccionar';
 var cedula=$('#txtCedula_a').val();
var nombres=$('#txtNombres_a').val();
var apellidos=$('#txtApellidos_a').val();
var genero=$('#txtGenero_a').val();
var fecha_nacimiento=$('#txtFecha_nacimiento_a').val();
var parentesco=$('#txtParentesco_a').val();
var correo=$('#txtCorreo_a').val();


 if (cedula=='' || nombres=='' || apellidos=='' || genero=='' || fecha_nacimiento=='' || parentesco=='') {
  error_messages='faltan datos personales por rellenar';
  alertify.error(error_messages);
  $('.alert-success').removeClass('hide').html(error_messages);
  return false;
}else{

 actualizarPersona();
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
var parentesco=$('#txtParentesco').val();
var id_familia= <?php echo $id_familia; ?>;
var ocupacion=$('#txtOcupacion').val();
var tipodocumento=$('#txttipodocumento').val();




  var datos='txtCedula='+cedula+'&txtNombres='+nombres+'&txtApellidos='+apellidos+'&txtGenero='+genero+'&txtFecha_nacimiento='+fecha_nacimiento+'&txtCorreo='+correo+'&txtid_familia='+id_familia+'&txtParentesco='+parentesco+'&txtOcupacion='+ocupacion+'&txt_edad='+edad+'&txttipodocumento='+tipodocumento;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_persona_logic.php',
    data:datos,
    success:function(res){
      
         
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



 var edad_a=0;
  $(document).ready(function(){
    

    $('#txtFecha_nacimiento_a').change(function(){
      $.ajax({
        type:"POST",
        data:"fecha=" + $('#txtFecha_nacimiento_a').val(),
        url:"../funcionesLogic/funcioncalcular_edad.php",
        success:function(r){
         edad_a=r;
          $('#edadCalculada_a').text(r + " años");
        }
      });
    });
  });







//metodo para actualizar personas del censo
 function actualizarPersona(){
 var cedula=$('#txtCedula_a').val();
var nombres=$('#txtNombres_a').val();
var apellidos=$('#txtApellidos_a').val();
var genero=$('#txtGenero_a').val();
var fecha_nacimiento=$('#txtFecha_nacimiento_a').val();
var correo=$('#txtCorreo_a').val();
var parentesco=$('#txtParentesco_a').val();
var id_persona=$('#txtid_a').val();
var ocupacion=$('#txtOcupacion_a').val();
var tipodocumento=$('#txttipodocumento_a').val();




  var datos='txtCedula_a='+cedula+'&txtNombres_a='+nombres+'&txtApellidos_a='+apellidos+'&txtGenero_a='+genero+'&txtFecha_nacimiento_a='+fecha_nacimiento+'&txtCorreo_a='+correo+'&txtParentesco_a='+parentesco+
  '&txtOcupacion_a='+ocupacion+'&txt_edad='+edad_a+'&txttipodocumento_a='+tipodocumento+'&txtid_a='+id_persona;

   $.ajax({

    type:'POST',
    url:'../funcionesLogic/actualizar_persona_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
   
           alertify.confirm('Actualizo Usuario', 'Exitoso', function(){ 

            alertify.success('Exitoso');
            setTimeout(function(){ window.location.href = '';                           
                       }, 2000);


            }
                , function(){ alertify.error('Cerrar');
                setTimeout(function(){
              window.location.href = '';                           
                       }, 2000);


              });
             $('#modalactualizarPersona').modal('hide');
             

       
       }else{
        alertify.confirm('Registro Usuario', 'Usuario ya existe', function(){ alert('Cedula ya existe'+res) }
                , function(){ alertify.error('Cerrar')});
       }
    }


  });
     return false;

}



</script>


