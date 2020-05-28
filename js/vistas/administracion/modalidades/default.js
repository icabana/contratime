function nuevo_modalidad() {

    abrirVentanaContenedor(
        'administracion', 'Modalidades', 'nuevo', '', ''
    );

}

function documentos_modalidad(id_modalidad) {

    abrirVentanaContenedor(
        'administracion',
        'Modalidades',
        'documentos',
        'id_modalidad=' + id_modalidad,
        ''
    );

}

function editar_modalidad(id_modalidad) {

    abrirVentanaContenedor(
        'administracion',
        'Modalidades',
        'editar',
        'id_modalidad=' + id_modalidad,
        ''
    );

}

function eliminar_modalidad(id_modalidad) {

    mensaje_confirmar("¿Está seguro de eliminar el modalidad?", "eliminar_modalidad2(" + id_modalidad + "); ");

}

function eliminar_modalidad2(id_modalidad) {

    ejecutarAccion(
        'administracion',
        'Modalidades',
        'eliminar',
        "id_modalidad=" + id_modalidad,
        'mensaje_alertas("success", "Modalidad Eliminado con Éxito", "center"); cargar_modalidades();'
    );

}

function generar_pdf_modalidades(){
      
    ejecutarAccion(
      'administracion', 
      'Modalidades', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_modalidades(){
      
    ejecutarAccion(
      'administracion', 
      'Modalidades', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
