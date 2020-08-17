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

function fchinv(fchevl1) {

  var fevaluacionproceso_contrato = $("#fevaluacionproceso_contrato").val();

  var f = new Date();
  var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();

  if(fevaluacionproceso_contrato < $(fchevl1).val() && fevaluacionproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Inicial de Evaluación", "center");
    $(fchevl1).val(fecha_inicial);
  }

}

function fchevl1(fchevl1) {

  var fevaluacionproceso2_contrato = $("#fevaluacionproceso2_contrato").val();

  var f = new Date();
  var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();

  if(fevaluacionproceso2_contrato < $(fchevl1).val() && fevaluacionproceso2_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Final de Evaluación", "center");
    $(fchevl1).val(fecha_inicial);
  }

  
  var favisoproceso_contrato = $("#favisoproceso_contrato").val();

  if(favisoproceso_contrato > $(fchevl1).val() && favisoproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha de Invitación a la Convocatoria", "center");
    $(fchevl1).val($("#favisoproceso_contrato").val());
  }

}


function fchevl2(fchevl2) {

  var fadjudicacionproceso_contrato = $("#fadjudicacionproceso_contrato").val();

   var f = new Date();
  var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();

  if(fadjudicacionproceso_contrato < $(fchevl2).val() && fadjudicacionproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Final de Adjudicación", "center");
    $(fchevl2).val(fecha_inicial);
  }
 
  var fevaluacionproceso_contrato = $("#fevaluacionproceso_contrato").val();

  if(fevaluacionproceso_contrato > $(fchevl2).val() && fevaluacionproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha Inicial de Evaluación", "center");
    $(fchevl2).val($("#fevaluacionproceso_contrato").val());
  }

}


function fchadj(fchadj) {
  
  var fcierreproceso_contrato = $("#fcierreproceso_contrato").val();

  var f = new Date();
  var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();


  if(fcierreproceso_contrato < $(fchadj).val() && fcierreproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha de Cierre", "center");
    $(fchadj).val(fecha_inicial);
  }

  var fevaluacionproceso2_contrato = $("#fevaluacionproceso2_contrato").val();

  if(fevaluacionproceso2_contrato > $(fchadj).val() && fevaluacionproceso2_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha Final de Evaluación", "center");
    $(fchadj).val($("#fevaluacionproceso2_contrato").val());
  }

}


function fchcie(fchcie) {

  var fadjudicacionproceso_contrato = $("#fadjudicacionproceso_contrato").val();

  if(fadjudicacionproceso_contrato > $(fchcie).val() && fadjudicacionproceso_contrato != ""){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha de Adjudicación", "center");
    $(fchcie).val($("#fadjudicacionproceso_contrato").val());
  }

}