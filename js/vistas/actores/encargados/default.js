function nuevo_encargado() {

    abrirVentanaContenedor(
        'actores', 
        'Encargados', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_encargado(id_encargado) {

    abrirVentanaContenedor(
        'actores',
        'Encargados',
        'editar',
        'id_encargado=' + id_encargado,
        ''
    );

}

function eliminar_encargado(id_encargado) {

    mensaje_confirmar("¿Está seguro de eliminar el Encargado?", "eliminar_encargado2(" + id_encargado + "); ");

}

function eliminar_encargado2(id_encargado) {

    ejecutarAccion(
        'actores',
        'Encargados',
        'eliminar',
        "id_encargado=" + id_encargado,
        ' mensaje_alertas("success", "Encargado Eliminado con Éxito", "center"); cargar_encargados();'
    );

}


function generar_pdf_encargados(){
      
    ejecutarAccion(
      'actores', 
      'Encargados', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_encargados(){
      
    ejecutarAccion(
      'actores', 
      'Encargados', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
