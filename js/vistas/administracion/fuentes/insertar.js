
function insertar_fuente() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_fuentes').serialize();

    ejecutarAccion(
      'administracion',
      'Fuentes',
      'insertar',
      datos,
      'insertar_fuente2(data)'
    );

}

function insertar_fuente2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Fuente Registrado Exitosamente", "center");
      cargar_fuentes();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}