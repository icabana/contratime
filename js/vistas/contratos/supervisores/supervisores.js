function asociar_supervisor() {

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

    asociar_supervisor2();

}

function asociar_supervisor2() {

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

function asociar_supervisor_editar() {

    $('#modal_supervisores_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Supervisores',
      'insertarEditar',
      "supervisor_supervisor="+$("#supervisor_supervisor").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_supervisor_editar2(data)'
    );

}


function asociar_supervisor_editar2(data) {

    if(data == "error"){

        mensaje_alertas("error", "Este supervisor ya fue asociado a este proceso", "center"); 
        return false;

    }else{

        $("#tab_2_supervisores").html(data);  
        mensaje_alertas("success", "Supervisor Agregado Correctamente", "center"); 
    }
    

}


function asociar_supervisor_correo() {

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

    asociar_supervisor2_correo();

}

function asociar_supervisor2_correo() {

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
      'insertar_correo',
      "supervisor_supervisor="+$("#supervisor_supervisor").val()+'&contratos='+contratos,
      'mensaje_alertas("success", "Supervisor Agregado Correctamente", "center"); seleccionar_check();'
    );

}

function asociar_supervisor_editar_correo() {

    $('#modal_supervisores_editar').modal('hide');
    
    ejecutarAccion(
      'contratos',
      'Supervisores',
      'insertarEditar_correo',
      "supervisor_supervisor="+$("#supervisor_supervisor").val()+'&id_contrato='+$("#id_contrato").val(),
      'asociar_supervisor_editar2_correo(data)'
    );

}


function asociar_supervisor_editar2_correo(data) {

    if(data == "error"){

        mensaje_alertas("error", "Este supervisor ya fue asociado a este proceso", "center"); 
        return false;

    }else{

        $("#tab_2_supervisores").html(data);  
        mensaje_alertas("success", "Supervisor Agregado Correctamente y Notificación Enviada ", "center"); 
    }
    

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