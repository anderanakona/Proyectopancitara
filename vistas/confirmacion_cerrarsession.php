<div class="modal fade" id="modalcerrarsesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel">Cerrar sesion </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

 	<h5>¿Desea cerrar la sesion?</h5>

      </div>

<div class="modal-footer">
  <input type="button" class="btn btn-primary" value="Cancelarr" onclick="cerrar();" />

  <a  href="logout.php" class="btn btn-danger">cerrar</a>
 

</div>

</div>

             

        </div>    
       
    </div>
   <script type="text/javascript">
   function cerrar(){
        $('#modalcerrarsesion').modal('hide');
   }
   </script>