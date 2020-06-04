function agregar_cdp() {

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

    agregar_cdp2();

}

function agregar_cdp2() {

    var numero_cdp = $("#numero_cdp").val();
    var fecha_cdp = $("#fecha_cdp").val();
    var valor_cdp = $("#valor_cdp").val();

    if(numero_cdp == "" || fecha_cdp == "" || valor_cdp == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }

    $('#modal_cdps').modal('hide');

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Cdps',
      'insertar',
      "numero_cdp="+$("#numero_cdp").val()+
      "&fecha_cdp="+$("#fecha_cdp").val()+
      "&valor_cdp="+$("#valor_cdp").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "CDP Agregado Correctamente", "center"); seleccionar_check();'
    );

    $("#numero_cdp").val("");
    $("#fecha_cdp").val("");
    $("#valor_cdp").val("");

}


function agregar_cdp_editar() {

    var numero_cdp = $("#numero_cdp").val();
    var fecha_cdp = $("#fecha_cdp").val();
    var valor_cdp = $("#valor_cdp").val();

    if(numero_cdp == "" || fecha_cdp == "" || valor_cdp == "" ){
        mensaje_alertas("error", "Todos los campos son obligatorios", "center");
        return false;
    }
    
    $('#modal_cdps_editar').modal('hide');
  
    ejecutarAccion(
      'contratos',
      'Cdps',
      'insertarEditar',
      "numero_cdp="+$("#numero_cdp").val()+
      "&fecha_cdp="+$("#fecha_cdp").val()+
      "&valor_cdp="+$("#valor_cdp").val()+
      '&id_contrato='+$("#id_contrato").val(),
      '$("#tab_4_cdps").html(data);  mensaje_alertas("success", "CDP Agregado Correctamente", "center");'
    );

    $("#numero_cdp").val("");
    $("#fecha_cdp").val("");
    $("#valor_cdp").val("");

}

function eliminar_cdp_contrato(id_cdp, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el CDP asociado a este contrato?", "eliminar_cdp_contrato2(" + id_cdp + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_cdp_contrato2(id_cdp, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Cdps',
          'eliminar',
          "id_cdp=" + id_cdp+"&id_contrato=" + id_contrato,
          '$("#tab_4_cdps").html(data);  mensaje_alertas("success", "CDP Eliminado con Éxito", "center"); '
      );
  
  }