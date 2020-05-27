function editar_info_tipocontrato() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_tiposcontrato').serialize();
    
    ejecutarAccion(
      'administracion',
      'Tiposcontrato',
      'guardar',
      datos,
      'editar_tipocontrato2(data)'
    );

  }

  function editar_tipocontrato2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Editado Exitosamente", "center");
      cargar_tiposcontrato();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }