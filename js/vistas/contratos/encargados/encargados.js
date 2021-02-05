function asociar_encargado() {

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

    asociar_encargado2();

}

function asociar_encargado2() {

    $('#modal_encargados').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Encargados',
      'insertar',
      "encargado_encargado="+$("#encargado_encargado").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Encargado Asociado Correctamente", "center"); seleccionar_check();'
    );

}

function asociar_encargado_editar() {

    $('#modal_encargados_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Encargados',
      'insertarEditar',
      "encargado_encargado="+$("#encargado_encargado").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_encargado_editar2(data);'
    );

}


function asociar_encargado_editar2(data) {
    
    if(data != "error"){
        $("#tab_77_encargados").html(data);  
        mensaje_alertas("success", "Encargado Asociado Correctamente", "center");   
    }else{
        mensaje_alertas("error", "Este encargado ya fue asociado a este proceso", "center");   
    } 

}

function asociar_encargado_correo() {

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

    asociar_encargado2_correo();

}

function asociar_encargado2_correo() {

    $('#modal_encargados').modal('hide');
    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Encargados',
      'insertar_correo',
      "encargado_encargado="+$("#encargado_encargado").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Encargado Asociado Correctamente", "center"); seleccionar_check();'
    );

}

function asociar_encargado_editar_correo() {

    $('#modal_encargados_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Encargados',
      'insertarEditar_correo',
      "encargado_encargado="+$("#encargado_encargado").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_encargado_editar2_correo(data);'
    );

}


function asociar_encargado_editar2_correo(data) {
    
    if(data != "error"){
        $("#tab_77_encargados").html(data);  
        mensaje_alertas("success", "Encargado Asociado Correctamente y Notificación Enviada", "center");   
    }else{
        mensaje_alertas("error", "Este encargado ya fue asociado a este proceso", "center");   
    } 

}


function eliminar_encargado_contrato(id_encargado, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Encargado asociado a este contrato?", "eliminar_encargado_contrato2(" + id_encargado + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_encargado_contrato2(id_encargado, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Encargados',
          'eliminar',
          "id_encargado=" + id_encargado+"&id_contrato=" + id_contrato,
          '$("#tab_77_encargados").html(data);  mensaje_alertas("success", "Encargado Eliminado con Éxito", "center"); '
      );
  
  }
