
function insertar_plan() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_planes').serialize();

    ejecutarAccion(
      'administracion',
      'Planes',
      'insertar',
      datos,
      'insertar_plan2(data)'
    );

}

function insertar_plan2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Plan Registrado Exitosamente", "center");
      cargar_planes();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}