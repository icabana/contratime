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
    
    var fecha_pago = $("#fecha_pago").val();
    var valor_pago = $("#valor_pago").val();

    if(fecha_pago == "" || valor_pago == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }

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
      "&fecha_pago="+$("#fecha_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "Pago Agregado Correctamente", "center"); seleccionar_check();'
    );

    $("#fecha_pago").val("");
    $("#valor_pago").val("");

}


function agregar_pago_editar() {
    
    var fecha_pago = $("#fecha_pago").val();
    var valor_pago = $("#valor_pago").val();

    if(fecha_pago == "" || valor_pago == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }


    ejecutarAccion(
      'contratos',
      'Pagos',
      'insertarEditar',
      "tipo_pago="+$("#tipo_pago").val()+
      "&fecha_pago="+$("#fecha_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&id_contrato='+$("#id_contrato").val(),
      'if(data == "error"){ mensaje_alertas("error", "Los Pagos no pueden superar el valor del Contrato", "center"); }else{ $("#modal_pagos_editar").modal("hide");  $("#tab_6_pagos").html(data); mensaje_alertas("success", "Pago Agregado Correctamente", "center"); }'
    );

    $("#fecha_pago").val("");
    $("#valor_pago").val("");

}

function agregar_pago_correo() {

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

    agregar_pago2_correo();

}

function agregar_pago2_correo() {
    
    var fecha_pago = $("#fecha_pago").val();
    var valor_pago = $("#valor_pago").val();

    if(fecha_pago == "" || valor_pago == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }

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
      'insertar_correo',
      "tipo_pago="+$("#tipo_pago").val()+
      "&fecha_pago="+$("#fecha_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "Pago Agregado Correctamente", "center"); seleccionar_check();'
    );

    $("#fecha_pago").val("");
    $("#valor_pago").val("");

}


function agregar_pago_editar_correo() {
    
    var fecha_pago = $("#fecha_pago").val();
    var valor_pago = $("#valor_pago").val();

    if(fecha_pago == "" || valor_pago == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }

    ejecutarAccion(
      'contratos',
      'Pagos',
      'insertarEditar_correo',
      "tipo_pago="+$("#tipo_pago").val()+
      "&fecha_pago="+$("#fecha_pago").val()+
      "&valor_pago="+$("#valor_pago").val()+
      '&id_contrato='+$("#id_contrato").val(),
      'if(data == "error"){ mensaje_alertas("error", "Los Pagos no pueden superar el valor del Contrato", "center"); }else{ $("#modal_pagos_editar").modal("hide");  $("#tab_6_pagos").html(data); mensaje_alertas("success", "Pago Agregado Correctamente", "center"); }'
    );

    $("#fecha_pago").val("");
    $("#valor_pago").val("");

}



function eliminar_pago_contrato(id_pago, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Pago asociado a este contrato?", "eliminar_pago_contrato2(" + id_pago + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_pago_contrato2(id_pago, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Pagos',
          'eliminar',
          "id_pago=" + id_pago+"&id_contrato=" + id_contrato,
          '$("#tab_6_pagos").html(data);  mensaje_alertas("success", "Pago Eliminado con Éxito", "center"); '
      );
  
  }