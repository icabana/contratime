
function insertar_soporte() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_soportes').serialize();

    ejecutarAccion(
      'actores',
      'Soportes',
      'insertar',
      datos,
      'insertar_soporte2(data)'
    );

}

function insertar_soporte2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Soporte Registrado Exitosamente", "center");
      cargar_soportes();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}