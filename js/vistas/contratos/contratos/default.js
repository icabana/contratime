function nuevo_contrato() {

    abrirVentanaContenedor(
        'contratos', 
        'Contratos', 
        'nuevo', 
        '', 
        ''
    );

}

function editar_contrato(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editar',
        'id_contrato=' + id_contrato,
        ''
    );

}

function editar_contrato_convocado(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editarConvocado',
        'id_contrato=' + id_contrato,
        ''
    );

}

function eliminar_contrato(id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Contrato? Se eliminará toda la información asociada a este contrato y su documentación Anexa", "eliminar_contrato2(" + id_contrato + "); ");

}

function eliminar_contrato2(id_contrato) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'eliminar',
        "id_contrato=" + id_contrato,
        ' mensaje_alertas("success", "Contrato Eliminado con Éxito", "center"); cargar_contratos();'
    );

}


function generar_pdf_contratos(){
      
    ejecutarAccion(
      'contratos', 
      'Contratos', 
      'generarPdf',
      "",
      "cargarVisorPDF(data); "
    );
    
}

function generar_excel_contratos(){
      
    ejecutarAccion(
      'contratos', 
      'Contratos', 
      'generarExcel', 
      "",
      "location.href = data"         
    );
    
}


function seleccionar_check() {
   
    var cont = 0;

      $("input[name=check_contratos]:checked").each(
          function(){
              cont++;
          }
      );

      if(cont == 0){
        $("input:checkbox").prop('checked', true)
      }else{
        $("input:checkbox").prop('checked', false)
      }
     

  }
