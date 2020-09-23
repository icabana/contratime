function cargar_detalles(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_plan=' + $("#plan_detalle").val(),
        ''
    );

        
}

function cargar_detalles_insertar(){

    var id_plan_detalle = $("#id_plan_detalle").val();

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_plan=' + id_plan_detalle,
        ''
    );

        
}


function cargar_detalles_editar(){

    var id_plan_detalle_editar = $("#id_plan_detalle_editar").val();
    
    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_plan=' + id_plan_detalle_editar,
        ''
    );

        
}


function cargar_detalles_eliminar(id_plan){
    
    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_plan=' + id_plan,
        ''
    );

        
}