function cargar_tiposcontrato(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_tiposcontrato', 
        'administracion', 
        'Tiposcontrato', 
        'index', 
        ''
    );    
        
}