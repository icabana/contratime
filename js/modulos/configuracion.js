function cargar_usuarios(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'configuracion', 'Usuarios', 'index', '');    
        
}

function cargar_roles(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'configuracion', 'Roles', 'index', '');    
        
}


function cargar_parametros(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'configuracion', 'Parametros', 'index', '');    
        
}


function seleccionar_perfil(id_rol){
    
    ejecutarAccion(
        'configuracion', 
        'Usuarios', 
        'seleccionarPerfil', 
        'id_rol='+id_rol,
        'location.reload();'
    );    
        
}