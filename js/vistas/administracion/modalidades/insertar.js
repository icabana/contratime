
function insertar_modalidad() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_modalidades').serialize();

    ejecutarAccion(
      'administracion',
      'Modalidades',
      'insertar',
      datos,
      'insertar_modalidad2(data)'
    );

}

function insertar_modalidad2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Registrado Exitosamente", "center");
      cargar_modalidades();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}