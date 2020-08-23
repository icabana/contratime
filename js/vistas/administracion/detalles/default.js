function nuevo_detalle() {

    abrirVentanaContenedor(
        'administracion', 
        'Detalles', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_detalle(id_detalle) {

    abrirVentanaContenedor(
        'administracion',
        'Detalles',
        'editar',
        'id_detalle=' + id_detalle,
        ''
    );

}

function eliminar_detalle(id_detalle) {

    mensaje_confirmar("¿Está seguro de eliminar la Detalle?", "eliminar_detalle2(" + id_detalle + "); ");

}

function eliminar_detalle2(id_detalle) {

    ejecutarAccion(
        'administracion',
        'Detalles',
        'eliminar',
        "id_detalle=" + id_detalle,
        'mensaje_alertas("success", "Detalle Eliminado con Éxito", "center"); cargar_detalles();'
    );

}

function generar_pdf_detalles(){
      
    ejecutarAccion(
      'administracion', 
      'Detalles', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_detalles(){
      
    ejecutarAccion(
      'administracion', 
      'Detalles', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}

function detalles_detalle(id_detalle) {

    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_detalle=' + id_detalle,
        ''
    );

}

