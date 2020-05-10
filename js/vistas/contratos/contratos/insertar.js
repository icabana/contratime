function insertar_contrato() {

    if(!validar_requeridos()){
        return 0;
    }
    
    var datos = $('#formContratos').serialize();
  
    ejecutarAccion(
      'contratos',
      'Contratos',
      'insertar',
      datos,
      'insertar_contrato2(data)'
    );

}

function insertar_contrato2(data) {

    if (data == 'error_documento') {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
      return false;
    } 
    if (data == 'error_correo') {
      mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
      return false;
    } 
    
    mensaje_alertas("success", "Contrato registrado correctamente", "center");
    cargar_contratos();

}