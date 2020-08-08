function cargar_modalidades(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_modalidades', 
        'administracion', 
        'Modalidades', 
        'index', 
        ''
    );    
        
}