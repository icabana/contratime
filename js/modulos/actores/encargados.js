function cargar_encargados(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_encargados', 
        'actores', 
        'Encargados', 
        'index', 
        ''
    );    
        
}


function cargar_municipios_encargado(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

    ejecutarAccion(
        'actores',
        'Encargados',
        'cargarMunicipios',
        'id_departamento='+$("#departamento_encargado").val(),
        '$("#div_municipio_encargados").html(data)'
      );    
        
}