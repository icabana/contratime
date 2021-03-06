function editar_info_contrato() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardar',
    datos,
    'editar_contrato2(data)'
  );

}

function editar_contrato2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}

function editar_info_contrato_descartado() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();
alert(datos);
  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardarDescartado',
    datos,
    'editar_contrato_descartado2(data)'
  );

}

function editar_contrato_descartado2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}

function seleccionar_plan(id_detalle) {
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'seleccionarPlan',
    "plan_contrato="+id_detalle+"&id_contrato="+$("#id_contrato").val(),
    'seleccionar_plan2(data)'
  );

}

function seleccionar_plan2(data) {

  if (data != 0) {
    mensaje_alertas("success", "Plan Seleccionado Correctamente!", "center");
    $("#tab_777_plan").html(data);
  } else {
    mensaje_alertas("error", "Error al Seleccionar el plan del Contrato", "center");
  }

}


function deseleccionar_plan(id_detalle) {
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'deseleccionarPlan',
    "plan_contrato="+id_detalle+"&id_contrato="+$("#id_contrato").val(),
    'deseleccionar_plan2(data)'
  );

}

function deseleccionar_plan2(data) {

  if (data != 0) {
    mensaje_alertas("success", "Se eliminó el Plan Asociado a este Contrato!", "center");
    $("#tab_777_plan").html(data);
  } else {
    mensaje_alertas("error", "Error al eliminar el Plan Asociado a este Contrato", "center");
  }

}


function editar_info_contrato_directo() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardarDirecto',
    datos,
    'editar_contrato_directo2(data)'
  );

}

function editar_contrato_directo2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}


function editar_info_proceso() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardarProceso',
    datos,
    'editar_proceso2(data)'
  );

}

function editar_proceso2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_procesos();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}


function editar_info_proceso_encargado() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardarProceso',
    datos,
    'editar_info_proceso_encargado2(data)'
  );

}

function editar_info_proceso_encargado2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos_encargado();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}


function editar_info_encargado() {

  if(!validar_requeridos()){
      return 0;
  }
  
  var datos = $('#formContratos').serialize();

  ejecutarAccion(
    'contratos',
    'Contratos',
    'guardarProceso',
    datos,
    'editar_proceso_encargado2(data)'
  );

}

function editar_proceso_encargado2(data) {

  if (data == 1) {
    mensaje_alertas("success", "Contrato Editado Exitosamente", "center");
    cargar_contratos_encargado();
  } else {
    mensaje_alertas("danger", "No realizó ningún cambio en el Formulario", "center");
  }

}


//////////////////////// VALIDACION DE LAS FECHAS DEL PROCESO

function fchinv(fchevl1) {
  /*
    var fevaluacionproceso_contrato = $("#fevaluacionproceso_contrato").val();
  
    var f = new Date();
    var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();
  
    if(fevaluacionproceso_contrato < $(fchevl1).val() && fevaluacionproceso_contrato != ""){
      mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Inicial de Evaluación", "center");
      $(fchevl1).val(fecha_inicial);
    }
  */
  }
  
  function fchevl1(fchevl1) {
  /*
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
  */
  }
  
  
  function fchevl2(fchevl2) {
  /*
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
  */
  }
  
  
  function fchadj(fchadj) {
    /*
    var fcierreproceso_contrato = $("#fcierreproceso_contrato").val();
  
    if(fcierreproceso_contrato > $(fchadj).val() && fadjudicacionproceso_contrato != ""){
      mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha de Cierre", "center");
      $(fchcie).val($("#fadjudicacionproceso_contrato").val());
    }
  */
  }
  
  
  function fchcie(fchcie) {
  
   /*
    var fevaluacionproceso2_contrato = $("#fevaluacionproceso2_contrato").val();
  
    if(fevaluacionproceso2_contrato > $(fchcie).val() && fevaluacionproceso2_contrato != ""){
      mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha Final de Evaluación", "center");
      $(fchcie).val($("#fevaluacionproceso2_contrato").val());
    }
  
    
    var fadjudicacionproceso_contrato = $("#fadjudicacionproceso_contrato").val();
  
    if(fadjudicacionproceso_contrato < $(fchcie).val() && fadjudicacionproceso_contrato != ""){
      mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha de Adjudicación", "center");
      $(fchcie).val($("#fadjudicacionproceso_contrato").val());
    }
  */
  }