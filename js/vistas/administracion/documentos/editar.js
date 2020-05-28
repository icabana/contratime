function editar_info_modalidad() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_modalidades').serialize();
    
    ejecutarAccion(
      'administracion',
      'Modalidades',
      'guardar',
      datos,
      'editar_modalidad2(data)'
    );

  }

  function editar_modalidad2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Editado Exitosamente", "center");
      cargar_modalidades();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }