function nuevo_detalle() {

    abrirVentanaContenedor(
        'administracion', 
        'Detalles', 
        'nuevo', 
        'plan_detalle='+$("#plan_detalle").val(), 
        ''
    );

}

function editar_detalle(id_detalle, id_plan) {

    abrirVentanaContenedor(
        'administracion',
        'Detalles',
        'editar',
        'id_detalle=' + id_detalle+ "&id_plan=" + id_plan,
        ''
    );

}

function eliminar_detalle(id_detalle, id_plan, valor) {

    mensaje_confirmar("¿Está seguro de eliminar el Registro?", "eliminar_detalle2(" + id_detalle + ", " + id_plan + ", " + valor + "); ");

}

function eliminar_detalle2(id_detalle, id_plan, valor) {

    ejecutarAccion(
        'administracion',
        'Detalles',
        'eliminar',
        "id_detalle=" + id_detalle+ "&id_plan=" + id_plan+ "&valor=" + valor,
        'mensaje_alertas("success", "Detalle Eliminado con Éxito", "center"); cargar_detalles_eliminar('+id_plan+');'
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

