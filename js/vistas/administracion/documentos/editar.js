function editar_info_documento() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_documentos').serialize();
    
    ejecutarAccion(
      'administracion',
      'Documentos',
      'guardar',
      datos,
      'editar_documento2(data)'
    );

  }

  function editar_documento2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Editado Exitosamente", "center");
      documentos_modalidad($("#modalidad_documento_editar").val());
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }