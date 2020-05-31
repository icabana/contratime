function cargar_contratos(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'index', 
        ''
    );    
        
}

function cargar_contratos_x_estado(estado){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'index_x_estado', 
        'estado='+estado
    );    
        
}

function cargar_fila_contratos(id_contrato){

    ejecutarAccion(
        'contratos', 
        'Contratos', 
        'index_fila', 
        'id_contrato='+id_contrato,
        '$("#fila_contrato_'+id_contrato+'").html(data);'
    );    
        
}


function busqueda_avanzada(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'busquedaAvanzada', 
        ''
    );    
        
}

