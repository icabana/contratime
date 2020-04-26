function nuevo_contratista() {

    abrirVentanaContenedor(
        'actores', 
        'Contratistas', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_contratista(id_contratista) {

    abrirVentanaContenedor(
        'actores',
        'Contratistas',
        'editar',
        'id_contratista=' + id_contratista,
        ''
    );

}

function eliminar_contratista(id_contratista) {

    mensaje_confirmar("¿Está seguro de eliminar el Contratista?", "eliminar_contratista2(" + id_contratista + "); ");

}

function eliminar_contratista2(id_contratista) {

    ejecutarAccion(
        'actores',
        'Contratistas',
        'eliminar',
        "id_contratista=" + id_contratista,
        ' mensaje_alertas("success", "Contratista Eliminado con Éxito", "center"); cargar_contratistas();'
    );

}


function generar_pdf_contratistas(){
      
    ejecutarAccion(
      'actores', 
      'Contratistas', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_contratistas(){
      
    ejecutarAccion(
      'actores', 
      'Contratistas', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
