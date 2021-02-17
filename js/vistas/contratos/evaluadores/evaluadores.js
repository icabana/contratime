function asociar_evaluador() {

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

    asociar_evaluador2();

}

function asociar_evaluador2() {

    $('#modal_evaluadores').modal('hide');    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Evaluadores',
      'insertar',
      "evaluador_evaluador="+$("#evaluador_evaluador").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Evaluador Asociado Correctamente", "center"); seleccionar_check();'
    );

}

function asociar_evaluador_editar() {

    $('#modal_evaluadores_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Evaluadores',
      'insertarEditar',
      "evaluador_evaluador="+$("#evaluador_evaluador").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_evaluador_editar2(data);'
    );

}


function asociar_evaluador_editar2(data) {
    
    if(data != "error"){
        $("#tab_77_evaluadores").html(data);  
        mensaje_alertas("success", "Evaluador Asociado Correctamente", "center");   
    }else{
        mensaje_alertas("error", "Este evaluador ya fue asociado a este proceso", "center");   
    } 

}

function asociar_evaluador_correo() {

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

    asociar_evaluador2_correo();

}

function asociar_evaluador2_correo() {

    $('#modal_evaluadores').modal('hide');
    

    var contratos = "";

    $("input[name=check_contratos]:checked").each(
        function(){
            contratos += $(this).val()+",";
        }
    );

    contratos += '0';

    ejecutarAccion(
      'contratos',
      'Evaluadores',
      'insertar_correo',
      "evaluador_evaluador="+$("#evaluador_evaluador").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Evaluador Asociado Correctamente", "center"); seleccionar_check();'
    );

}

function asociar_evaluador_editar_correo() {

    $('#modal_evaluadores_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Evaluadores',
      'insertarEditar_correo',
      "evaluador_evaluador="+$("#evaluador_evaluador").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_evaluador_editar2_correo(data);'
    );

}


function asociar_evaluador_editar2_correo(data) {
    
    if(data != "error"){
        $("#tab_77_evaluadores").html(data);  
        mensaje_alertas("success", "Evaluador Asociado Correctamente y Notificación Enviada", "center");   
    }else{
        mensaje_alertas("error", "Este evaluador ya fue asociado a este proceso", "center");   
    } 

}


function eliminar_evaluador_contrato(id_evaluador, id_contrato) {

    mensaje_confirmar("¿Está seguro de eliminar el Evaluador asociado a este contrato?", "eliminar_evaluador_contrato2(" + id_evaluador + ", " + id_contrato + "); ");
  
  }
  
  function eliminar_evaluador_contrato2(id_evaluador, id_contrato) {
  
      ejecutarAccion(
          'contratos',
          'Evaluadores',
          'eliminar',
          "id_evaluador=" + id_evaluador+"&id_contrato=" + id_contrato,
          '$("#tab_77_evaluadores").html(data);  mensaje_alertas("success", "Evaluador Eliminado con Éxito", "center"); '
      );
  
  }
