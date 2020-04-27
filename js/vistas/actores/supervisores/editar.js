function editar_info_supervisor() {

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
    'guardar',
    datos,
    'editar_supervisor2(data)'
  );

}

function editar_supervisor2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Supervisore Editado Exitosamente", "center");
    cargar_supervisores();
  } else {
    mensaje_alertas("error", "El Documento o Correo ya se encuentra registrado", "center");
  }

}
