function agregar_prorroga() {

    var cont = 0;

    $("input[name=check_contratos]:checked").each(
        function(){
            cont++;
        }
    );

    if(cont == 0){
      mensaje_alertas("error", "Debe seleccionar algún registro");
      return 0;
    }

    agregar_prorroga2();

}

function agregar_prorroga2() {

    $('#modal_prorrogas').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
    'contratos',
    'Prorrogas',
    'insertar',
    "meses_prorroga="+$("#meses_prorroga").val()+
    "&dias_prorroga="+$("#dias_prorroga").val()+
    '&contratos='+contratos,
    'mensaje_alertas("success", "Prorroga Agregada Correctamente", "center"); seleccionar_check();'
    );

}


function agregar_prorroga_editar() {

    $('#modal_prorrogas').modal('hide');    

    ejecutarAccion(
    'contratos',
    'Prorrogas',
    'insertarEditar',
    "meses_prorroga="+$("#meses_prorroga").val()+
    "&dias_prorroga="+$("#dias_prorroga").val()+
    '&id_contrato='+$("#id_contrato").val(),
    '$("#tab_8_prorrogas").html(data);  mensaje_alertas("success", "Prorroga Agregada Correctamente", "center");'
    );

}


function eliminar_prorroga_contrato(id_prorroga, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el CDP asociado a este contrato?", "eliminar_prorroga_contrato2(" + id_prorroga + ", " + id_contrato + "); ");
  
}
  
function eliminar_prorroga_contrato2(id_prorroga, id_contrato) {
  
    ejecutarAccion(
        'contratos',
        'Prorrogas',
        'eliminar',
        "id_prorroga=" + id_prorroga+"&id_contrato=" + id_contrato,
        '$("#tab_8_prorrogas").html(data);  mensaje_alertas("success", "CDP Eliminado con Éxito", "center"); '
    );
  
}