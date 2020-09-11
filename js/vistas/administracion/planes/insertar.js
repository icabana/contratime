
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

    var ano = $("#ano_plan").val();

    if (data == 1) {
      mensaje_alertas("success", "Plan Registrado Exitosamente", "center");
      cargar_planes();
    } else {
      mensaje_alertas("error", "La Vigencia "+ano+" ya fue Registrada", "center");
    }

}