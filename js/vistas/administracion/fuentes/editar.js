function editar_info_fuente() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_fuentes').serialize();
    
    ejecutarAccion(
      'administracion',
      'Fuentes',
      'guardar',
      datos,
      'editar_fuente2(data)'
    );

  }

  function editar_fuente2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Fuente Editado Exitosamente", "center");
      cargar_fuentes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }