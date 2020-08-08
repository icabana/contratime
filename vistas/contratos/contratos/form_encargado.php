<?php
$froms = new Formularios();
?>


<div class="row">

  <div class="col-md-2">

    <label>No. de Proceso<span style="color:red">*</span></label>
    <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['numproceso_contrato']; ?>">

  </div>


  <div class="col-md-2">

    <label>Valor del Proceso<span style="color:red">*</span></label>
    <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valproceso_contrato']; ?>">

  </div>

  
  <div class="col-md-4">
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


  <div class="col-md-4">
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


<div class="col-md-2">

<label>Fecha de Apertura<span style="color:red">*</span></label>
<input type="date" class="form-control requerido" id="faperturaproceso_contrato" name="faperturaproceso_contrato" value="<?php echo $contrato['faperturaproceso_contrato']; ?>">

</div>

<div class="col-md-2">

<label>Fecha de Aviso<span style="color:red">*</span></label>
<input type="date" class="form-control requerido" id="favisoproceso_contrato" name="favisoproceso_contrato" value="<?php echo $contrato['favisoproceso_contrato']; ?>">

</div>

<div class="col-md-2">

<label>Limite de Propuestas<span style="color:red">*</span></label>
<input type="date" class="form-control requerido" id="fpresentacionproceso_contrato" name="fpresentacionproceso_contrato" value="<?php echo $contrato['fpresentacionproceso_contrato']; ?>">

</div>

  <div class="col-md-2">

    <label>Fecha de Evaluaci&oacute;n<span style="color:red">*</span></label>
    <input type="date" class="form-control requerido" id="fevaluacionproceso_contrato" name="fevaluacionproceso_contrato" value="<?php echo $contrato['fevaluacionproceso_contrato']; ?>">

  </div>

  <div class="col-md-2">

    <label>Fecha de Adjudicaci&oacute;n<span style="color:red">*</span></label>
    <input type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato" value="<?php echo $contrato['fadjudicacionproceso_contrato']; ?>">

  </div>


  <div class="col-md-2">

    <label>Fecha de Cierre<span style="color:red">*</span></label>
    <input type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato" value="<?php echo $contrato['fcierreproceso_contrato']; ?>">

  </div>

</div>


<br>

<?php

if ($contrato['estado_contrato'] > 2) {

?>
  <div class="row">

    <div class="col-md-3">

      <label>No. de Contrato<span style="color:red">*</span></label>
      <input type="text" class="form-control requerido" id="numero_contrato" name="numero_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['numproceso_contrato']; ?>">

    </div>


    <div class="col-md-3">

      <label>Valor del Contrato<span style="color:red">*</span></label>
      <input type="text" class="form-control requerido" id="valor_contrato" name="valor_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valor_contrato']; ?>">

    </div>

    <div class="col-md-3">

      <label>Fecha de Inicio<span style="color:red">*</span></label>
      <input type="date" class="form-control requerido" id="fechainicio_contrato" name="fechainicio_contrato" value="<?php echo $contrato['fechainicio_contrato']; ?>">

    </div>


    <div class="col-md-3">

      <label>Fecha Final<span style="color:red">*</span></label>
      <input type="date" class="form-control requerido" id="fechafinal_contrato" name="fechafinal_contrato" value="<?php echo $contrato['fechafinal_contrato']; ?>">

    </div>

  </div>
<?php

}

?>

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
    <button onclick="cargar_contratos();" class="btn btn-danger">Cancelar</button>
  </div>
  <div class="col-md-2">
    <button onclick="editar_info_contrato(); return false;" class="btn btn-success">Guardar</button>
  </div>
  <div class="col-md-4"></div>
</div>