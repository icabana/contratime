<?php
$froms = new Formularios();
?>


<div class="row">

  <div class="col-md-3">

    <label>No. de Proceso<span style="color:red">*</span></label>
    <input readonly type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" maxlength="25" value="<?php echo $contrato['numproceso_contrato']; ?>">

  </div>


  <div class="col-md-3">

    <label>Valor del Proceso<span style="color:red">*</span></label>
    <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valproceso_contrato']; ?>">

  </div>

  <div class="col-md-3">
    <label>Estado del Contrato <span style="color:red">*</span></label>
    <input readonly type="text" class="form-control"  name="nombreestado_contrato" value="<?php echo $contrato['nombreestado_contrato']; ?>">
  </div>

  <div class="col-md-3">
    <label>Publicado en SECOP <span style="color:red">*</span></label>

    <?php
    echo $froms->Lista_Desplegable(
      $estados2,
      'nombre_estado',
      'id_estado',
      'estado2_contrato',
      $contrato['estado2_contrato'],
      '',
      ''
    );
    ?>
  </div>



</div>

<br>


<div class="row">
  
 
  <?php
    if($contrato['modalidad_contrato'] == ""){
  ?>
  <div class="col-md-6">
    <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

    <?php

    echo $froms->Lista_Desplegable(
      $modalidades,
      'nombre_modalidad',
      'id_modalidad',
      'modalidad_contrato',
      $contrato['modalidad_contrato'],
      '',
      ''
    );

    ?>
  </div>
  <?php
    }else{
      ?>

<div class="col-md-6">
    <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

        <input type="hidden" id="modalidad_contrato" name="modalidad_contrato" value="<?php echo $contrato['modalidad_contrato']; ?>">
        <input readonly type="text" class="form-control" id="modalidad" name="modalidad" value="<?php echo $contrato['nombre_modalidad']; ?>">
    </div>
  <?php
    }
  ?>



  <div class="col-md-6">
    <label>Tipo de Contrataci&oacute;n <span style="color:red">*</span></label>

    <?php
    echo $froms->Lista_Desplegable(
      $tiposcontrato,
      'nombre_tipocontrato',
      'id_tipocontrato',
      'tipo_contrato',
      $contrato['tipo_contrato'],
      '',
      ''
    );
    ?>
  </div>




</div>
<br>



<div class="row">

       
<div class="col-md-3">

  <label>Fecha de Invitaci&oacute;n a la Convocatoria<span style="color:red">*</span></label>
  <input type="date" onchange="fchinv(this);" class="form-control requerido" id="favisoproceso_contrato" name="favisoproceso_contrato"
  value="<?php echo $contrato['favisoproceso_contrato']?>">

</div>


<div class="col-md-3">

  <label>Fecha de Evaluaci&oacute;n<span style="color:red">*</span></label><br>
   <b>Desde:</b> <input onchange="fchevl1(this);" size="20" type="date" class="form-control requerido" id="fevaluacionproceso_contrato" name="fevaluacionproceso_contrato"   value="<?php echo $contrato['fevaluacionproceso_contrato']?>">
   <b>Hasta:</b> <input onchange="fchevl2(this);" size="20" type="date" class="form-control requerido" id="fevaluacionproceso2_contrato" name="fevaluacionproceso2_contrato"  value="<?php echo $contrato['fevaluacionproceso2_contrato']?>">

</div>




<div class="col-md-3">

  <label>Fecha de Cierre del Proceso<span style="color:red">*</span></label>
  <input type="date" onchange="fchcie(this);" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato" value="<?php echo $contrato['fcierreproceso_contrato']?>" >

</div>

 <div class="col-md-3">

  <label>Fecha de Adjudicaci&oacute;n<span style="color:red">*</span></label>
  <input type="date" onchange="fchadj(this);" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato" value="<?php echo $contrato['fadjudicacionproceso_contrato']?>">

</div>



</div>



<br>


<br>
<div class="row">

  <div class="col-md-12">
    <label>Objeto del Contrato<span style="color:red">*</span></label>
    <textarea class="form-control requerido" rows="2" id="objeto_contrato" name="objeto_contrato"><?php echo $contrato['objeto_contrato']; ?></textarea>
  </div>

</div>
<br><br>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-2">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button onclick="cargar_procesos();" class="btn btn-danger">Cancelar</button>
  </div>
  <div class="col-md-2">
    <button onclick="editar_info_proceso(); return false;" class="btn btn-success">Guardar</button>
  </div>
  <div class="col-md-4"></div>
</div>