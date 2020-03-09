<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="estilos/css/poligono.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
     <script src="estilos/js/jquery.min.js" ></script>
      <script src="estilos/popper/popper.min.js"></script>
  <script src="estilos/js/bootstrap.min.js"></script>
   <script src="estilos/js/alertify.js" ></script>

</head>
<body>

  <header>      
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="home.php">Iniciar sesion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
 
</nav>

</header>

<div class="container">
  <h2>Formulario de registro</h2>
 
  <form onsubmit="return crear_cuenta();"  role="form" class="needs-validation" method="POST"  novalidate>
    <div class="form-group">
      <label for="txtcedula">Cedula:</label>
      <input type="text" class="form-control" id="txtcedula" placeholder="Cedula" name="txtcedula" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>    
    <div class="form-group">
      <label for="txtnombre">Nombres:</label>
      <input type="input" class="form-control" id="txtnombre" placeholder="Nombres" name="txtnombre" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
    <div class="form-group">
      <label for="txtapellido">Apellidos:</label>
      <input type="input" class="form-control" id="txtapellido" placeholder="Apellidos" name="txtapellido" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
    <div class="form-group">
      
       <label for="txtgenero">ingrese Genero</label>  
           <select class="form-control" name="txtgenero"  id="txtgenero"  required>
             <option value="1">Masculino</option>
              <option value="2">Femenino</option>
        </select>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

     <div class="form-group">
      
       <label for="txttipo">tipo usuario</label>  
           <select class="form-control" name="txttipo"  id="txttipo"  required>
            <option  value="1">Indigena</option>
            <option  value="3">Campesino</option>
            <option  value="4">Sociedad urbana</option>

        </select>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
    
    <div class="form-group">
      <label for="txtusuario">Nombre usuario:</label>
      <input type="input" class="form-control" id="txtusuario" placeholder="Nombre usuario" name="txtusuario" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

     <div class="form-group">
      <label for="txtusuario">Telefono:</label>
      <input type="input" class="form-control" id="txttelefono" placeholder="Telefono celular" name="txttelefono" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>



    <div class="form-group">
      <label for="txtcontrasena">Contraseña:</label>
      <input type="password" class="form-control" id="txtcontrasena" placeholder="contraseña" name="txtcontrasena" required>
      <div class="valid-feedback">Datos correctos</div>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>
     <div class="form-group">
      <label for="txtcontrasena1">confirmar contraseña:</label>
      <input type="password" class="form-control" id="txtcontrasena1" placeholder="contraseña" name="txtcontrasena1" required>
      <div class="invalid-feedback">Por favor rellenar campo de texto.</div>
    </div>

     
   
    <button type="submit" class="btn btn-primary" id="envio_cuenta">Registrar</button>
  </form>
</div>

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
  
  function crear_cuenta(){
    var cedula= $('#txtcedula').val();
    var nombre=$('#txtnombre').val();
    var apellido=$('#txtapellido').val();
    var  genero=$('#txtgenero').val();
    var tipo=$('#txttipo').val();
    var telefono=$('#txttelefono').val();
    var usuario=$('#txtusuario').val();
    var contrasena=$('#txtcontrasena1').val();


     var datos='txtcedula='+cedula+'&txtnombre='+nombre+'&txtapellido='+apellido+'&txtgenero='+genero+'&txttipo='+tipo+'&txtusuario='+usuario+'&txttelefono='+telefono+'&txtcontrasena1='+contrasena;

     $.ajax({

    type:'POST',
    url:'../funcionesLogic/crear_usuario_logic.php',
    data:datos,
    success:function(res){
 


   if(res==-1){
   alertify.error("faltan campos por llenar")
   }else if(res==1){
        alertify.success("Registro exitoso");
          setTimeout(function(){
              window.location.href = 'home.php';                           
          }, 3000);



      }else{
        alertify.error("cedula y/o nombre Usuario ya existe"+res);
        console.log(res);
      }
         
        
    }


  });
     return false;
  }
</script>

