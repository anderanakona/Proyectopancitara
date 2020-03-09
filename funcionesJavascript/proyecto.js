function imprimirdatos(datos) {
 d=datos.split('||');  

  $('#id_proyecto').val(d[0]);
  titulo=document.getElementById("titulo");
  titulo.innerHTML = d[1];
  objetivo=document.getElementById("objetivo");
  objetivo.innerHTML = d[2];
  justificacion=document.getElementById("justificacion");
  justificacion.innerHTML = d[3];
  descripcion=document.getElementById("descripcion1");
  descripcion.innerHTML = d[4];
  console.log(d[4]);

  fecha=document.getElementById("fecha");
  fecha.innerHTML = d[5];
}

function verdetallesaprobado(datos) {
 d=datos.split('||');  

  titulo=document.getElementById("tituloapr");
  titulo.innerHTML = d[1];
  objetivo=document.getElementById("objetivoapr");
  objetivo.innerHTML = d[2];
  justificacion=document.getElementById("justificacionapr");
  justificacion.innerHTML = d[3];
  descripcion=document.getElementById("descripcionapr");
  descripcion.innerHTML = d[4];

  fechapeticion=document.getElementById("fechapeticion");
  fechapeticion.innerHTML = d[5];
  

  presupuestoapr=document.getElementById("presupuestoapr");
  presupuestoapr.innerHTML = d[9];

  fechaapr=document.getElementById("fechaapr");
  fechaapr.innerHTML = d[10];

 comentariosapr=document.getElementById("comentariosapr");
  comentariosapr.innerHTML = d[11];
  


}
