function nuevo_supervisor() {

    abrirVentanaContenedor(
        'actores', 
        'Supervisores', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_supervisor(id_supervisor) {

    abrirVentanaContenedor(
        'actores',
        'Supervisores',
        'editar',
        'id_supervisor=' + id_supervisor,
        ''
    );

}

function eliminar_supervisor(id_supervisor) {

    mensaje_confirmar("¿Está seguro de eliminar el Supervisor?", "eliminar_supervisor2(" + id_supervisor + "); ");

}

function eliminar_supervisor2(id_supervisor) {

    ejecutarAccion(
        'actores',
        'Supervisores',
        'eliminar',
        "id_supervisor=" + id_supervisor,
        ' mensaje_alertas("success", "Supervisor Eliminado con Éxito", "center"); cargar_supervisores();'
    );

}


function generar_pdf_supervisores(){
      
    ejecutarAccion(
      'actores', 
      'Supervisores', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_supervisores(){
      
    ejecutarAccion(
      'actores', 
      'Supervisores', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
