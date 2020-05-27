function nuevo_usuario() {

    abrirVentanaContenedor(
        'administracion', 'Usuarios', 'nuevo', '', ''
    );

}

function editar_usuario(id_usuario) {

    abrirVentanaContenedor(
        'administracion',
        'Usuarios',
        'editar',
        'id_usuario=' + id_usuario,
        ''
    );

}

function eliminar_usuario(id_usuario) {

    mensaje_confirmar("¿Está seguro de eliminar el usuario?", "eliminar_usuario2(" + id_usuario + "); ");

}

function eliminar_usuario2(id_usuario) {

    ejecutarAccion(
        'administracion',
        'Usuarios',
        'eliminar',
        "id_usuario=" + id_usuario,
        'mensaje_alertas("success", "Usuario Eliminado con Éxito", "center"); cargar_usuarios();'
    );

}

function generar_pdf_usuarios(){
      
    ejecutarAccion(
      'administracion', 
      'Usuarios', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_usuarios(){
      
    ejecutarAccion(
      'administracion', 
      'Usuarios', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}
