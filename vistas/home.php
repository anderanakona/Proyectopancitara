
<?php 


include '../controlador/user_session.php';
include '../controlador/UsuarioControlador.php';
$userSession = new UserSession();
$user = new UsuarioControlador();

if(isset($_SESSION['user'])){

 $user->setUser($userSession->getCurrentUser());
   $filas=$user->setUser($userSession->getCurrentUser());
    header('Location: vistaprincipal.php');

   
}

 if(isset($_POST['username']) && isset($_POST['password'])){

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new UsuarioControlador();
    if($user->userExist($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        //para hacer el llamado delas demas ventanas de los usuarios
        $user->setUser($userForm);
       $filas=$user->setUser($userForm);

       $tipo=$filas["tipo"];

       if($tipo==1){
         header('Location: vistaprincipal.php');
       }else if($tipo==3){
          header('Location: vista_campesino_form.php');
       }
       else if($tipo==2){
        header('Location: vista_indigena_form.php');
       }else if($tipo==4){
        header('Location: vista_urbano_form.php');
}

    }else{ 
        //echos "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        
    }

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/css/main.css">  
      <link rel="stylesheet" type="text/css" href="estilos/datatables/datatables.min.css"/>
       <link rel="stylesheet"  type="text/css" href="estilos/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">


    <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
   

</head>
<body>
	<style type="text/css">/* Made with love by Mutiullah Samim*/



html,body{
background-image: url('estilos/imagenes/foto1.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 90%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}


div.absolute {
  position: absolute;
  top: 500px;
  right: 500;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
div.absolute2 {
  position: absolute;
  top: 200px;  
   left:10;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}

</style>


<header>      
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="home.php">Iniciar sesion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
   
  </div>

  <a href="vista_crear_cuenta.php" style="color: white;">Crear cuenta</a>
 
</nav>

</header>


<div class="container">
  <center> <img src="estilos/imagenes/imageneslogin/tawachacana.jpg" style="max-width:80px; max-height: 40px">
  chakanaSoft</center>


  <div class="d-flex justify-content-center h-100">

    <div class="justify-content-center"></div>
       <div class="card">
      <div class="card-header">
        <h3>Iniciar sesion</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form  method="POST" action="home.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="estilos/imagenes/imageneslogin/arbol.PNG" width="30px"></span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="nombre de usuario">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="estilos/imagenes/imageneslogin/contrasena.jpg" width="30px"></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="contrasena">
          </div>
          <div class="form-group">
          <button class="btn float-right btn-success">ingresar</button>  
           </form>
      
 

      </div>
      <div class="card-footer">      
        <div class="d-flex justify-content-center">
      

          <?php

                if(isset($errorLogin)){
                    
                       echo '<div style="color: red" >'.$errorLogin.'</div>'; 
                   
                   }
                ?>
        </div>
     

   
      </div>

        <a href="vista_crear_cuenta.php" class="btn btn-info">Crear cuenta</a>
       <p style="color: white;">Una vez te registres, tendras acceso a chakanaSoft y podras usar tu cuenta segun tu necesidad</p>
    </div>
  </div>
</div>













<footer><a href="https://www.freepik.es/fotos-vectores-gratis/patron">Vector de Patrón creado por macrovector - www.freepik.es</a></footer>
<div hidden class="absolute"><img src="estilos/imagenes/imagenalcaldia.PNG" width="200px"></div>
<div hidden class="absolute2"><img src="estilos/imagenes/imagencafe.PNG" width="200px"></div>

  <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/jquery.min.js" ></script> 

</body>
</html>

