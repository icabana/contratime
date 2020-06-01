function agregar_poliza() {

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

    agregar_poliza2();

}

function agregar_poliza2() {

    $('#modal_polizas').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Polizas',
      'insertar',
      "numero_poliza="+$("#numero_poliza").val()+
      "&fechaexp_poliza="+$("#fechaexp_poliza").val()+
      "&fechainicio_poliza="+$("#fechainicio_poliza").val()+
      "&fechafinal_poliza="+$("#fechafinal_poliza").val()+
      '&contratos='+contratos,
      'mensaje_alertas("success", "Poliza Agregada Correctamente", "center"); seleccionar_check();'
    );

}


function agregar_poliza_editar() {

    $('#modal_polizas_editar').modal('hide');    

    ejecutarAccion(
      'contratos',
      'Polizas',
      'insertarEditar',
      "numero_poliza="+$("#numero_poliza").val()+
      "&fechaexp_poliza="+$("#fechaexp_poliza").val()+
      "&fechainicio_poliza="+$("#fechainicio_poliza").val()+
      "&fechafinal_poliza="+$("#fechafinal_poliza").val()+
      '&id_contrato='+$("#id_contrato").val(),
      '$("#tab_34_polizas").html(data); mensaje_alertas("success", "Poliza Agregada Correctamente", "center"); '
    );

}

    function eliminar_poliza_contrato(id_poliza, id_contrato) {

        mensaje_confirmar("¿Está seguro de eliminar la Poliza asociada a este contrato?", "eliminar_poliza_contrato2(" + id_poliza + ", " + id_contrato + "); ");
  
    }
  
  function eliminar_poliza_contrato2(id_poliza, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Polizas',
          'eliminar',
          "id_poliza=" + id_poliza+"&id_contrato=" + id_contrato,
          '$("#tab_34_polizas").html(data);  mensaje_alertas("success", "Poliza Eliminada con Éxito", "center"); '
      );
  
  }