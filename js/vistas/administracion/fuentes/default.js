function nuevo_fuente() {

    abrirVentanaContenedor(
        'administracion', 
        'Fuentes', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_fuente(id_fuente) {

    abrirVentanaContenedor(
        'administracion',
        'Fuentes',
        'editar',
        'id_fuente=' + id_fuente,
        ''
    );

}

function eliminar_fuente(id_fuente) {

    mensaje_confirmar("¿Está seguro de eliminar la Fuente?", "eliminar_fuente2(" + id_fuente + "); ");

}

function eliminar_fuente2(id_fuente) {

    ejecutarAccion(
        'administracion',
        'Fuentes',
        'eliminar',
        "id_fuente=" + id_fuente,
        'mensaje_alertas("success", "Fuente Eliminado con Éxito", "center"); cargar_fuentes();'
    );

}

function generar_pdf_fuentes(){
      
    ejecutarAccion(
      'administracion', 
      'Fuentes', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_fuentes(){
      
    ejecutarAccion(
      'administracion', 
      'Fuentes', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}

function documentos_fuente(id_fuente) {

    abrirVentanaContenedorTabla(
        'tabla_documentos',
        'administracion',
        'Documentos',
        'index',
        'id_fuente=' + id_fuente,
        ''
    );

}

