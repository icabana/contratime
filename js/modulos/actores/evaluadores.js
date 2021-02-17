function cargar_evaluadores(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_evaluadores', 
        'actores', 
        'Evaluadores', 
        'index', 
        ''
    );    
        
}


function cargar_municipios_evaluador(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    ejecutarAccion(
        'actores',
        'Evaluadores',
        'cargarMunicipios',
        'id_departamento='+$("#departamento_evaluador").val(),
        '$("#div_municipio_evaluadores").html(data)'
      );    
        
}