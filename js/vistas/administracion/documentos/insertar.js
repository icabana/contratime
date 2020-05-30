
function insertar_documento() {

    if(!validar_requeridos()){
        return 0;   
    }

    var datos = $('#form_documentos').serialize();

    ejecutarAccion(
      'administracion',
      'Documentos',
      'insertar',
      datos,
      'insertar_documento2(data)'
    );

}

function insertar_documento2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Modalidad Registrado Exitosamente", "center");
      documentos_modalidad($("#modalidad_documento_insertar").val());
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

}