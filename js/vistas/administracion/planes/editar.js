function editar_info_plan() {

    if(!validar_requeridos()){
        return 0;   
    }
    
    var datos = $('#form_planes').serialize();
    
    ejecutarAccion(
      'administracion',
      'Planes',
      'guardar',
      datos,
      'editar_plan2(data)'
    );

  }

  function editar_plan2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Plan Editado Exitosamente", "center");
      cargar_planes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }