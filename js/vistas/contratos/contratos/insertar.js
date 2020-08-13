function insertar_contrato() {

    if(!validar_requeridos()){
        return 0;
    }
    
    var datos = $('#formContratos').serialize();
  
    ejecutarAccion(
      'contratos',
      'Contratos',
      'insertar',
      datos,
      'insertar_contrato2(data)'
    );

}

function insertar_contrato2(data) {

    if (data == 'error_documento') {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
      return false;
    } 
    if (data == 'error_correo') {
      mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
      return false;
    } 
    
    mensaje_alertas("success", "Contrato registrado correctamente", "center");
    cargar_contratos();

}

function fchinv(fchevl1) {

  var fevaluacionproceso_contrato = $("#fevaluacionproceso_contrato").val();

  var f = new Date();
  var fecha_inicial = f.getFullYear() + "-" + (f.getMonth() +1) + "/" + f.getDate();

  if(fevaluacionproceso_contrato < $(fchevl1).val()){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Inicial de Evaluación", "center");
    $(fchevl1).val(fecha_inicial);
  }

}

function fchevl1(fchevl1) {

  var fevaluacionproceso2_contrato = $("#fevaluacionproceso2_contrato").val();

  if(fevaluacionproceso2_contrato < $(fchevl1).val()){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Final de Evaluación", "center");
    $(fchevl1).val($("#fevaluacionproceso2_contrato").val());
  }

  
  var favisoproceso_contrato = $("#favisoproceso_contrato").val();

  if(favisoproceso_contrato > $(fchevl1).val()){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha de Invitación a la Convocatoria", "center");
    $(fchevl1).val($("#favisoproceso_contrato").val());
  }

}


function fchevl2(fchevl2) {

  var fadjudicacionproceso_contrato = $("#fadjudicacionproceso_contrato").val();

  if(fadjudicacionproceso_contrato < $(fchevl2).val()){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha Final de Adjudicación", "center");
    $(fchevl2).val($("#fadjudicacionproceso_contrato").val());
  }
 
  var fevaluacionproceso_contrato = $("#fevaluacionproceso_contrato").val();

  if(fevaluacionproceso_contrato > $(fchevl2).val()){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha Inicial de Evaluación", "center");
    $(fchevl2).val($("#fevaluacionproceso_contrato").val());
  }

}


function fchadj(fchadj) {
  
  var fcierreproceso_contrato = $("#fcierreproceso_contrato").val();

  if(fcierreproceso_contrato < $(fchadj).val()){
    mensaje_alertas("error", "Esta Fecha debe ser menor a la Fecha de Cierre", "center");
    $(fchadj).val($("#fcierreproceso_contrato").val());
  }

  var fevaluacionproceso2_contrato = $("#fevaluacionproceso2_contrato").val();

  if(fevaluacionproceso2_contrato > $(fchadj).val()){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha Final de Evaluación", "center");
    $(fchadj).val($("#fevaluacionproceso2_contrato").val());
  }

}


function fchcie(fchcie) {

  var fadjudicacionproceso_contrato = $("#fadjudicacionproceso_contrato").val();

  if(fadjudicacionproceso_contrato > $(fchcie).val()){
    mensaje_alertas("error", "Esta Fecha debe ser mayor a la Fecha de Adjudicación", "center");
    $(fchcie).val($("#fadjudicacionproceso_contrato").val());
  }

}