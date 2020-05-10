function agregar_trazabilidad() {

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

    agregar_trazabilidad2();

}

function agregar_trazabilidad2() {

    $('#modal_trazabilidades').modal('hide');
    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Trazabilidad',
      'insertar',
      "trazabilidad_trazabilidad="+$("#trazabilidad_trazabilidad").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Trazabilidad Agregado Correctamente", "center"); seleccionar_check();'
    );

}

function eliminar_trazabilidad_contrato(id_trazabilidad, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar la trazabilidad asociado a este contrato?", "eliminar_trazabilidad_contrato2(" + id_trazabilidad + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_trazabilidad_contrato2(id_trazabilidad, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Trazabilidad',
          'eliminar',
          "id_trazabilidad=" + id_trazabilidad+"&id_contrato=" + id_contrato,
          '$("#tab_3_trazabilidad").html(data);  mensaje_alertas("success", "Trazabilidad Eliminado con Éxito", "center"); '
      );
  
  }