function agregar_ajuste() {

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

    agregar_ajuste2();

}

function agregar_ajuste2() {

    $('#modal_ajustes').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Ajustes',
      'insertar',
      "tipo_ajuste="+$("#tipo_ajuste").val()+
      "&valor_ajuste="+$("#valor_ajuste").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "CDP Agregado Correctamente", "center"); seleccionar_check();'
    );

}


function agregar_ajuste_editar() {

    $('#modal_ajustes').modal('hide');    

    ejecutarAccion(
      'contratos',
      'Ajustes',
      'insertarEditar',
      "tipo_ajuste="+$("#tipo_ajuste").val()+
      "&valor_ajuste="+$("#valor_ajuste").val()+
      '&id_contrato='+$("#id_contrato").val(),
      '$("#tab_7_ajustes").html(data);  mensaje_alertas("success", "CDP Agregado Correctamente", "center"); '
    );

}

function eliminar_ajuste_contrato(id_ajuste, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el CDP asociado a este contrato?", "eliminar_ajuste_contrato2(" + id_ajuste + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_ajuste_contrato2(id_ajuste, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Ajustes',
          'eliminar',
          "id_ajuste=" + id_ajuste+"&id_contrato=" + id_contrato,
          '$("#tab_7_ajustes").html(data);  mensaje_alertas("success", "CDP Eliminado con Éxito", "center"); '
      );
  
  }