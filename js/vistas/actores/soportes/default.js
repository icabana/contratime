function nuevo_soporte() {

    abrirVentanaContenedor(
        'actores', 
        'Soportes', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_soporte(id_soporte) {

    abrirVentanaContenedor(
        'actores',
        'Soportes',
        'editar',
        'id_soporte=' + id_soporte,
        ''
    );

}

function eliminar_soporte(id_soporte) {

    mensaje_confirmar("¿Está seguro de eliminar el soporte?", "eliminar_soporte2(" + id_soporte + "); ");

}

function eliminar_soporte2(id_soporte) {

    ejecutarAccion(
        'actores',
        'Soportes',
        'eliminar',
        "id_soporte=" + id_soporte,
        'mensaje_alertas("success", "Soporte Eliminado con Éxito", "center"); cargar_soportes();'
    );

}

function generar_pdf_soportes(){
      
    ejecutarAccion(
      'actores', 
      'Soportes', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_soportes(){
      
    ejecutarAccion(
      'actores', 
      'Soportes', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}

function documentos_soporte(id_soporte) {

    abrirVentanaContenedorTabla(
        'tabla_documentos',
        'actores',
        'Documentos',
        'index',
        'id_soporte=' + id_soporte,
        ''
    );

}

