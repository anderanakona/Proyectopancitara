
<style type="text/css">
#register_form fieldset:not(:first-of-type) {
display: none;
}

</style>

<div>
    <!-- modal  crear  -->
<!-- Modal -->


<div class="modal fade" id="modalcrearanecdota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Crear Evento  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">




<form id="register_form" name="register_form" novalidate  action="../funcionesLogic/crear_evento_logic.php" enctype= "multipart/form-data" method="post">


<div class="col-sm-12">
   <div class="input-group form-group">
      <label for="nombre" class="col-sm-3">Nombre</label>
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-comment"></span>
            </div>
           <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre  Evento"> 
   </div>

  <input type="text" id="txtid_usuario" name="txtid_usuario" value="<?php echo $id_usuario ?>" hidden>


    <div class="input-group form-group">
      <label for="imagen" class="col-sm-3">Imagen</label>
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-comment"></span>
            </div>
           <input type="file" name="imagen" id="imagen" class="form-control" accept="image/x-png,image/gif,image/jpeg" > 
   </div>

    <div class="input-group form-group">
      <label for="comment" class="col-sm-3">Descripcion</label>
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-comment"></span>
            </div>
           <textarea name="comment" id="comment" class="form-control" placeholder="Descripcion anecdota"></textarea>
   </div>


 <div class="input-group form-group">
   <label for="comment" class="col-sm-3">Fecha de evento</label>
            <div class="input-group-prepend">
              <span class="input-group-text  glyphicon glyphicon-comment"></span>
            </div>
   <input type="date" name="fecha" id="fecha" class="form-control"  value="<?php echo date("Y-m-d");?>">

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

<br>
<br>


<div class="row">
<div class="col-sm-10">
  

     <div class="input-group form-group">
            <label for="txtVereda_resguardo">Elija opcion</label>
            <select class="form-control" id="txt_tiposel">
               <option value="4">todo</option>
              <option value="1">Indigena</option>
              <option value="2">Campesino</option>
              <option value="3">Urbano</option>
             
                          
              
            </select>
    </div> 
   
</div>
<div class="col-sm-2">
  
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">?</button>
   
</div>


</div>




  <button class="btn btn-warning" id="crear_anecdota"  data-toggle="modal" data-target="#modalcrearanecdota">crear nuevo</button>




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
    <p> 1. podras tener acceso a los eventos que crean los demas usuarios</p> 
    <p>2. podrar crear tu evento y publicarlo para la comunidad.</p>
      
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>