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

function editar_contrato_financiera(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editarFinanciera',
        'id_contrato=' + id_contrato,
        ''
    );

}


function editar_contrato_supervisor(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editarSupervisor',
        'id_contrato=' + id_contrato,
        ''
    );

}


function editar_contrato_encargado(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editarEncargado',
        'id_contrato=' + id_contrato,
        ''
    );

}

function editar_contrato_contratista(id_contrato) {

    abrirVentanaContenedor(
        'contratos',
        'Contratos',
        'editarContratista',
        'id_contrato=' + id_contrato,
        ''
    );

}


function eliminar_contrato(id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Contrato? Se eliminará toda la información asociada a este contrato y su documentación Anexa", "eliminar_contrato2(" + id_contrato + "); ");

}

function eliminar_contrato2(id_contrato) {

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';
    
    ejecutarAccion(
        'contratos',
        'Contratos',
        'eliminar',
        "contratos=" + contratos,
        'mensaje_alertas("success", "Contrato Eliminado con Éxito", "center"); cargar_contratos();'
    );

}



function eliminar_contrato_editar(id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Contrato? Se eliminará toda la información asociada a este contrato y su documentación Anexa", "eliminar_contrato_editar2(" + id_contrato + "); ");

}

function eliminar_contrato_editar2(id_contrato) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'eliminarEditar',
        "id_contrato=" + id_contrato,
        'mensaje_alertas("success", "Contrato Eliminado con Éxito", "center"); cargar_contratos();'
    );

}


function descartar_contrato(id_contrato) {

    mensaje_confirmar("¿Está seguro de Descartar el Contrato?", "descartar_contrato2(" + id_contrato + "); ");

}

function descartar_contrato2(id_contrato) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'descartar',
        "id_contrato=" + id_contrato,
        ' mensaje_alertas("success", "Contrato Descartado con Éxito", "center"); cargar_contratos();'
    );

}

function sel_adjudicar_contrato(id_contrato) {

    $("#id_contrato_sel").val(id_contrato);

}

function adjudicar_contrato() {

    var id_contrato = $("#id_contrato_sel").val();
    var contratista_adjudicar = $("#contratista_adjudicar").val();

    mensaje_confirmar("¿Está seguro de adjudicar el Contrato? No podrá regresar al estado actual: Convocado", 
                        "adjudicar_contrato2(" + id_contrato + ", '"+contratista_adjudicar+"'); ");

}

function adjudicar_contrato2(id_contrato, contratista_adjudicar) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'adjudicar',
        "id_contrato=" + id_contrato+"&contratista_adjudicar=" + contratista_adjudicar,
        '$("#modal_adjudicar").modal("hide"); $(".modal-backdrop").hide(); mensaje_alertas("success", "Contrato Adjudicado con Éxito", "center"); cargar_fila_contratos('+id_contrato+');'
    );

}


function sel_celebrar_contrato(id_contrato) {

    $("#id_contrato_sel").val(id_contrato);

}

function celebrar_contrato() {

    var id_contrato = $("#id_contrato_sel").val();
    var numero_contra = $("#numero_contra").val();
    var fechainicio_contra = $("#fechainicio_contra").val();
    var fechafinal_contra = $("#fechafinal_contra").val();
    var valor_contra = $("#valor_contra").val();

    if(numero_contra == "" || fechainicio_contra == "" || fechafinal_contra == "" || valor_contra == ""){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }

    mensaje_confirmar(
        "¿Está seguro de Celebrar el Contrato? No podrá regresar al estado actual: Adjudicado", 
        "celebrar_contrato2(" + id_contrato + ", '"+numero_contra+"', '"+fechainicio_contra+"', '"+fechafinal_contra+"', '"+valor_contra+"'); ");

}

function celebrar_contrato2(id_contrato, numero_contra, fechainicio_contra, fechafinal_contra, valor_contra ) {

    ejecutarAccionSinAlert(
        'contratos',
        'Contratos',
        'celebrar',
        "id_contrato=" + id_contrato+
        "&numero_contra=" + numero_contra+
        "&fechainicio_contra=" + fechainicio_contra+
        "&fechafinal_contra=" + fechafinal_contra+
        "&valor_contra=" + valor_contra,
        '$("#modal_celebrar").modal("hide"); $(".modal-backdrop").hide(); mensaje_alertas("success", "Contrato Celebrado con Éxito", "center");  cargar_fila_contratos('+id_contrato+');'
    );

}


function liquidar_contrato(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Liquidar el Contrato?", "liquidar_contrato2(" + id_contrato + "); ");

}

function liquidar_contrato2(id_contrato) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'liquidarContrato',
        "id_contrato=" + id_contrato,
        'liquidar_contrato3(data);'
    );

}

function liquidar_contrato3(resp) {

    if(resp == "notienecontratoadjunto"){
        mensaje_alertas("error", "Debe Adjuntar Copia del Contrato para poder Liquidarlo.", "center");
        return false;
    }

    if(resp == "nopagado"){
        mensaje_alertas("error", "El Contrato debe tener todos los pagos realizados para poder Liquidarlo.", "center");
        return false;
    }


    mensaje_alertas("success", "Contrato Liquidado Correctamente", "center");
    cargar_contratos();
}


function enviar_contrato(id_contrato) {
 
    mensaje_confirmar("¿Está seguro de Enviar Copia del Contrato Por Correo al Contratista?", "enviar_contrato2(" + id_contrato + "); ");

}

function enviar_contrato2(id_contrato) {

    ejecutarAccion(
        'contratos',
        'Contratos',
        'enviarContrato',
        "id_contrato=" + id_contrato,
        'enviar_contrato3(data);'
    );

}

function enviar_contrato3(resp) {

    if(resp == "notienecontratoadjunto"){
        mensaje_alertas("error", "Debe Adjuntar Copia del Contrato para poder enviar el correo.", "center");
        return false;
    }

    mensaje_alertas("success", "Correo Enviado Correctamente", "center");
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
  
function opcion_checkeada(estado_contrato) {

    var cont = 0;
    var cont_todos = 0;
    $("input[name=check_contratos]:checked").each(
        function(){
            if( $(this).attr("estado") < 3 ){
                cont++;
            }
            cont_todos++;
        }
    );

    if(cont_todos > 0){
        if(cont > 0){
            $("#acciones_contratos").css("display","none");
            $("#acciones_procesos").css("display","inline");
        }else{
            $("#acciones_contratos").css("display","inline");
            $("#acciones_procesos").css("display","none");
        }
    }else{
        $("#acciones_contratos").css("display","none");
        $("#acciones_procesos").css("display","none");
    }

}