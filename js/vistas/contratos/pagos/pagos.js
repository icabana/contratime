function agregar_pago() {

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

    agregar_pago2();

}

function agregar_pago2() {

    $('#modal_pagos').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Pagos',
      'insertar',
      "tipo_pago="+$("#tipo_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "CDP Agregado Correctamente", "center"); seleccionar_check();'
    );

}


function agregar_pago_editar() {

    $('#modal_pagos_editar').modal('hide');    

    ejecutarAccion(
      'contratos',
      'Pagos',
      'insertarEditar',
      "tipo_pago="+$("#tipo_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&id_contrato='+$("#id_contrato").val(),
      '$("#tab_6_pagos").html(data); mensaje_alertas("success", "CDP Agregado Correctamente", "center"); '
    );

}

function eliminar_pago_contrato(id_pago, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el CDP asociado a este contrato?", "eliminar_pago_contrato2(" + id_pago + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_pago_contrato2(id_pago, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Pagos',
          'eliminar',
          "id_pago=" + id_pago+"&id_contrato=" + id_contrato,
          '$("#tab_6_pagos").html(data);  mensaje_alertas("success", "CDP Eliminado con Éxito", "center"); '
      );
  
  }