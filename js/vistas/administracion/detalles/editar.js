function editar_info_detalle() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_detalles').serialize();
    
    ejecutarAccion(
      'administracion',
      'Detalles',
      'guardar',
      datos,
      'editar_detalle2(data)'
    );

  }

  function editar_detalle2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Detalle Editado Exitosamente", "center");
      cargar_detalles();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }