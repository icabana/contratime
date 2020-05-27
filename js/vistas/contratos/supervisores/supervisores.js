function agregar_supervisor() {

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

    agregar_supervisor2();

}

function agregar_supervisor2() {

    $('#modal_supervisores').modal('hide');
    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Supervisores',
      'insertar',
      "supervisor_supervisor="+$("#supervisor_supervisor").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Supervisor Agregado Correctamente", "center"); seleccionar_check();'
    );

}

function agregar_supervisor_editar() {

    $('#modal_supervisores_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Supervisores',
      'insertarEditar',
      "supervisor_supervisor="+$("#supervisor_supervisor").val()+'&id_contrato='+$("#id_contrato").val(),
      '$("#tab_2_supervisores").html(data);  mensaje_alertas("success", "Supervisor Agregado Correctamente", "center"); '
    );

}


function eliminar_supervisor_contrato(id_supervisor, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Supervisor asociado a este contrato?", "eliminar_supervisor_contrato2(" + id_supervisor + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_supervisor_contrato2(id_supervisor, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Supervisores',
          'eliminar',
          "id_supervisor=" + id_supervisor+"&id_contrato=" + id_contrato,
          '$("#tab_2_supervisores").html(data);  mensaje_alertas("success", "Supervisor Eliminado con Éxito", "center"); '
      );
  
  }