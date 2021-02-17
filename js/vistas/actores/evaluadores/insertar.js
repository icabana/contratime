function insertar_evaluador() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

  if (!regex.test($('#correo_evaluador').val().trim()) && $('#correo_evaluador').val() != "") {    
      mensaje_alertas("error", "El correo registrado no tiene un formato correcto.", "center");
      return false;
  }

  var datos = $('#formEvaluadores').serialize();

  ejecutarAccion(
    'actores',
    'Evaluadores',
    'insertar',
    datos,
    'insertar_evaluador2(data)'
  );

}

function insertar_evaluador2(data) {

  if (data == 'error_documento') {
    mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    return false;
  } 
  if (data == 'error_correo') {
    mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
    return false;
  } 
  
  mensaje_alertas("success", "Evaluador registrado correctamente", "center");
  cargar_evaluadores();

}