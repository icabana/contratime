function editar_info_actor_evaluador() {

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
    'guardar',
    datos,
    'editar_evaluador2(data)'
  );

}

function editar_evaluador2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Evaluador Editado Exitosamente", "center");
    cargar_evaluadores();
  } else {
    mensaje_alertas("error", "El Documento o Correo ya se encuentra registrado", "center");
  }

}
