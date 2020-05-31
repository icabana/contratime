function realizar_busqueda_avanzada() {
  
    var datos = $('#formBusquedaAvanzada').serialize();
  
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
  
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'realizarBusquedaAvanzada', 
        datos,
        ''
    );    

}