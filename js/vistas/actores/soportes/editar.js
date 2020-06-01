function editar_info_soporte() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_soportes').serialize();
    
    ejecutarAccion(
      'actores',
      'Soportes',
      'guardar',
      datos,
      'editar_soporte2(data)'
    );

  }

  function editar_soporte2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Soporte Editado Exitosamente", "center");
      cargar_soportes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }