function nuevo_tipocontrato() {

    abrirVentanaContenedor(
        'administracion', 'Tiposcontrato', 'nuevo', '', ''
    );

}

function editar_tipocontrato(id_tipocontrato) {

    abrirVentanaContenedor(
        'administracion',
        'Tiposcontrato',
        'editar',
        'id_tipocontrato=' + id_tipocontrato,
        ''
    );

}

function eliminar_tipocontrato(id_tipocontrato) {

    mensaje_confirmar("¿Está seguro de eliminar el tipocontrato?", "eliminar_tipocontrato2(" + id_tipocontrato + "); ");

}

function eliminar_tipocontrato2(id_tipocontrato) {

    ejecutarAccion(
        'administracion',
        'Tiposcontrato',
        'eliminar',
        "id_tipocontrato=" + id_tipocontrato,
        'mensaje_alertas("success", "Modalidad Eliminado con Éxito", "center"); cargar_tiposcontrato();'
    );

}

function generar_pdf_tiposcontrato(){
      
    ejecutarAccion(
      'administracion', 
      'Tiposcontrato', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_tiposcontrato(){
      
    ejecutarAccion(
      'administracion', 
      'Tiposcontrato', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
