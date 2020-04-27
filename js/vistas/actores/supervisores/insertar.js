function insertar_supervisor() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

  if (!regex.test($('#correo_supervisor').val().trim()) && $('#correo_supervisor').val() != "") {    
      mensaje_alertas("error", "El correo registrado no tiene un formato correcto.", "center");
      return false;
  }

  var datos = $('#formSupervisores').serialize();

  ejecutarAccion(
    'actores',
    'Supervisores',
    'insertar',
    datos,
    'insertar_supervisor2(data)'
  );

}

function insertar_supervisor2(data) {

  if (data == 'error_documento') {
    mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    return false;
  } 
  if (data == 'error_correo') {
    mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
    return false;
  } 
  
  mensaje_alertas("success", "Supervisore registrado correctamente", "center");
  cargar_supervisores();

}