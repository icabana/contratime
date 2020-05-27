function cargar_contratistas(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_contratistas', 
        'actores', 
        'Contratistas', 
        'index', 
        ''
    );    
        
}


function cargar_municipios_contratista(){

    ejecutarAccion(
        'actores',
        'Contratistas',
        'cargarMunicipios',
        'id_departamento='+$("#departamento_contratista").val(),
        '$("#div_municipio_contratistas").html(data)'
      );    
        
}