function cargar_supervisores(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_supervisores',
        'actores', 'Supervisores', 'index', '');    
        
}


function cargar_municipios_supervisor(){

    ejecutarAccion(
        'actores',
        'Supervisores',
        'cargarMunicipios',
        'id_departamento='+$("#departamento_supervisor").val(),
        '$("#div_municipio_supervisores").html(data)'
      );    
        
}