  function obteneridpersona (datos) {
        
           d=datos.split('||');   
          $('#txttipodocumento_a').val(d[1]);   
          $('#txtCedula_a').val(d[2]);
          $('#txtNombres_a').val(d[3]);
          $('#txtApellidos_a').val(d[4]);
          $('#txtFecha_nacimiento_a').val(d[5]);
          $('#edadCalculada_a').text(d[6] + " años");
          $('#txtGenero_a').val(d[7]);
          $('#txtCorreo_a').val(d[8]);
          $('#txtParentesco_a').val(d[9]);
          $('#txtOcupacion_a').val(d[10]);
          $('#txtid_a').val(d[0]);
 
      $.ajax({
        type:"POST",
        data:"fecha=" + $('#txtFecha_nacimiento_a').val(),
        url:"../funcionesLogic/funcioncalcular_edad.php",
        success:function(r){
        edad_a=r;
          $('#edadCalculada_a').text(r + " años");
        }
      });
     

          if(d[9]=="Jefe" || d[9]=="Jefa"){
            
           document.getElementById("txtParentesco_a").disabled = true; 
          }else{
           document.getElementById("txtParentesco_a").disabled = false; 
         //  alert(0);
          
           }
          }




