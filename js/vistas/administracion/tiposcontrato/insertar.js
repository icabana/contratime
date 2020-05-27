
function insertar_tipocontrato() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_tiposcontrato').serialize();

    ejecutarAccion(
      'administracion',
      'Tiposcontrato',
      'insertar',
      datos,
      'insertar_tipocontrato2(data)'
    );

}

function insertar_tipocontrato2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Registrado Exitosamente", "center");
      cargar_tiposcontrato();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}