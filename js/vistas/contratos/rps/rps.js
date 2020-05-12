function agregar_rp() {

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

    agregar_rp2();

}

function agregar_rp2() {

    $('#modal_rps').modal('hide');
    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Rps',
      'insertar',
      "numero_rp="+$("#numero_rp").val()+
      "&fecha_rp="+$("#fecha_rp").val()+
      "&valor_rp="+$("#valor_rp").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "RP Agregado Correctamente", "center"); seleccionar_check();'
    );

}


function agregar_rp_editar() {

    $('#modal_rps').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Rps',
      'insertar',
      "numero_rp="+$("#numero_rp").val()+
      "&fecha_rp="+$("#fecha_rp").val()+
      "&valor_rp="+$("#valor_rp").val()+
      '&id_contrato='+$("#id_contrato").val(),
      '$("#tab_5_rps").html(data);  mensaje_alertas("success", "RP Agregado Correctamente", "center"); '
    );

}


function eliminar_rp_contrato(id_rp, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el RP asociado a este contrato?", "eliminar_rp_contrato2(" + id_rp + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_rp_contrato2(id_rp, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Rps',
          'eliminar',
          "id_rp=" + id_rp+"&id_contrato=" + id_contrato,
          '$("#tab_5_rps").html(data);  mensaje_alertas("success", "RP Eliminado con Éxito", "center"); '
      );
  
  }