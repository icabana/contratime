function nuevo_plan() {

    abrirVentanaContenedor(
        'administracion', 
        'Planes', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_plan(id_plan) {

    abrirVentanaContenedor(
        'administracion',
        'Planes',
        'editar',
        'id_plan=' + id_plan,
        ''
    );

}

function eliminar_plan(id_plan) {

    mensaje_confirmar("¿Está seguro de eliminar la Plan?", "eliminar_plan2(" + id_plan + "); ");

}

function eliminar_plan2(id_plan) {

    ejecutarAccion(
        'administracion',
        'Planes',
        'eliminar',
        "id_plan=" + id_plan,
        'mensaje_alertas("success", "Plan Eliminado con Éxito", "center"); cargar_planes();'
    );

}

function generar_pdf_planes(){
      
    ejecutarAccion(
      'administracion', 
      'Planes', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_planes(){
      
    ejecutarAccion(
      'administracion', 
      'Planes', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}

function detalles_plan(id_plan) {

    abrirVentanaContenedorTabla(
        'tabla_detalles',
        'administracion',
        'Detalles',
        'index',
        'id_plan=' + id_plan,
        ''
    );

}

