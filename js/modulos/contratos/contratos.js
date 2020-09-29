function cargar_procesos(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexProcesos', 
        ''
    );    
        
}

function cargar_contratos(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

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

function cargar_reporte_contratos(moda){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();

    var modalidad = $(moda).val();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'index_reporte', 
        'modalidad='+modalidad
    );    
        
}


function cargar_vista_reporte_contratos(){

    var modalidad_reporte = $("#modalidad_reporte").val();
    var tipocontrato = $("#tipocontrato_reporte").val();
    var estado = $("#estado_reporte").val();

    ejecutarAccion(
        'contratos', 
        'Contratos', 
        'index_reporte_vista', 
        'modalidad='+modalidad_reporte+'&tipocontrato='+tipocontrato+'&estado='+estado,
        '$("#div_tabla_contratos_reportes").html(data);'
    );    
        
}

function cargar_contratos_financiera(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexFinanciera', 
        ''
    );    
        
}

function cargar_contratos_supervisor(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexSupervisor', 
        ''
    );    
        
}


function cargar_contratos_encargado(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexEncargado',
        ''
    );    
        
}


function cargar_contratos_contratista(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexContratista', 
        ''
    );    
        
}


function cargar_contratos_contratista_x_estado(estado){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexContratistaxEstado', 
        'estado='+estado
    );    
        
}

function cargar_contratos_encargado_x_estado(estado){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexEncargadoxEstado', 
        'estado='+estado
    );    
        
}

function cargar_contratos_supervisor_x_estado(estado){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'indexSupervisorxEstado', 
        'estado='+estado
    );    
        
}

function cargar_contratos_x_estado(estado){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

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

function cargar_procesos_x_estado(estado){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'index_proceso_x_estado', 
        'estado='+estado
    );    
        
}

function cargar_fila_contratos(id_contrato){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    ejecutarAccion(
        'contratos', 
        'Contratos', 
        'index_fila', 
        'id_contrato='+id_contrato,
        '$("#fila_contrato_'+id_contrato+'").html(data);'
    );    
        
}

function cargar_fila_procesos(id_contrato){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    ejecutarAccion(
        'contratos', 
        'Contratos', 
        'index_fila_procesos', 
        'id_contrato='+id_contrato,
        '$("#fila_contrato_'+id_contrato+'").html(data);'
    );    
        
}


function busqueda_avanzada(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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


function busqueda_avanzada_financiera(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'busquedaAvanzadaFinanciera', 
        ''
    );    
        
}
