function insertar_contratista() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

  if (!regex.test($('#correo_contratista').val().trim()) && $('#correo_contratista').val() != "") {    
      mensaje_alertas("error", "El correo registrado no tiene un formato correcto.", "center");
      return false;
  }

  var datos = $('#formContratistas').serialize();

  ejecutarAccion(
    'actores',
    'Contratistas',
    'insertar',
    datos,
    'insertar_contratista2(data)'
  );

}

function insertar_contratista2(data) {

  if (data == 'error_documento') {
    mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    return false;
  } 
  if (data == 'error_correo') {
    mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
    return false;
  } 
  
  mensaje_alertas("success", "Contratista registrado correctamente", "center");
  cargar_contratistas();

}