function insertar_encargado() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

  if (!regex.test($('#correo_encargado').val().trim()) && $('#correo_encargado').val() != "") {    
      mensaje_alertas("error", "El correo registrado no tiene un formato correcto.", "center");
      return false;
  }

  var datos = $('#formEncargados').serialize();

  ejecutarAccion(
    'actores',
    'Encargados',
    'insertar',
    datos,
    'insertar_encargado2(data)'
  );

}

function insertar_encargado2(data) {

  if (data == 'error_documento') {
    mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    return false;
  } 
  if (data == 'error_correo') {
    mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
    return false;
  } 
  
  mensaje_alertas("success", "Encargado registrado correctamente", "center");
  cargar_encargados();

}