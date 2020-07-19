function nuevo_documento(modalidad_documento) {

    abrirVentanaContenedor(
        'administracion', 
        'Documentos', 
        'nuevo', 
        'modalidad_documento='+modalidad_documento, 
        ''
    );

}

function editar_documento(id_documento, modalidad_documento) {

    abrirVentanaContenedor(
        'administracion',
        'Documentos',
        'editar',
        'id_documento=' + id_documento+'&modalidad_documento='+modalidad_documento,
        ''
    );

}

function eliminar_documento(id_documento, modalidad_documento) {

    mensaje_confirmar("¿Está seguro de Eliminar el Documento?", "eliminar_documento2(" + id_documento + ", " + modalidad_documento + "); ");

}

function eliminar_documento2(id_documento, modalidad_documento) {

    ejecutarAccion(
        'administracion',
        'Documentos',
        'eliminar',
        "id_documento=" + id_documento+"&modalidad_documento=" + modalidad_documento,
        'mensaje_alertas("success", "Modalidad Eliminado con Éxito", "center"); documentos_modalidad(data);'
    );

}

function generar_pdf_documentos(){
      
    ejecutarAccion(
      'administracion', 
      'Documentos', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_documentos(){
      
    ejecutarAccion(
      'administracion', 
      'Documentos', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
