function nuevo_evaluador() {

    abrirVentanaContenedor(
        'actores', 
        'Evaluadores', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_evaluador(id_evaluador) {

    abrirVentanaContenedor(
        'actores',
        'Evaluadores',
        'editar',
        'id_evaluador=' + id_evaluador,
        ''
    );

}

function eliminar_evaluador(id_evaluador) {

    mensaje_confirmar("¿Está seguro de eliminar el Evaluador?", "eliminar_evaluador2(" + id_evaluador + "); ");

}

function eliminar_evaluador2(id_evaluador) {

    ejecutarAccion(
        'actores',
        'Evaluadores',
        'eliminar',
        "id_evaluador=" + id_evaluador,
        ' mensaje_alertas("success", "Evaluador Eliminado con Éxito", "center"); cargar_evaluadores();'
    );

}


function generar_pdf_evaluadores(){
      
    ejecutarAccion(
      'actores', 
      'Evaluadores', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_evaluadores(){
      
    ejecutarAccion(
      'actores', 
      'Evaluadores', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
