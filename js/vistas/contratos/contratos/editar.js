function editar_info_contrato() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();
alert("dfeffwef");
  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardar',
    datos,
    'editar_contrato2(data)'
  );

}

function editar_contrato2(data) {
alert(data);
  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos();
  } else {
    mensaje_alertas("error", "El Documento o Correo ya se encuentra registrado", "center");
  }

}
