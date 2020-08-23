
function insertar_detalle() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_detalles').serialize();

    ejecutarAccion(
      'administracion',
      'Detalles',
      'insertar',
      datos,
      'insertar_detalle2(data)'
    );

}

function insertar_detalle2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Detalle Registrado Exitosamente", "center");
      cargar_detalles();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}