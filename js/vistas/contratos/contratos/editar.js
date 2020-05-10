function editar_info_contratista() {

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
    'guardar',
    datos,
    'editar_contratista2(data)'
  );

}

function editar_contratista2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contratista Editado Exitosamente", "center");
    cargar_contratistas();
  } else {
    mensaje_alertas("error", "El Documento o Correo ya se encuentra registrado", "center");
  }

}
