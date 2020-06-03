function editar_info_encargado() {

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
    'guardar',
    datos,
    'editar_encargado2(data)'
  );

}

function editar_encargado2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Encargado Editado Exitosamente", "center");
    cargar_encargados();
  } else {
    mensaje_alertas("error", "El Documento o Correo ya se encuentra registrado", "center");
  }

}
