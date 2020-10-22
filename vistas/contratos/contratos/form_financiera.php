<?php
$froms = new Formularios();
?>


<?php
    if($contrato['conpro'] != ""){
  ?>
 
<div class="row">

<div class="col-md-3">

  <label>No. de Proceso<span style="color:red">*</span></label>
  <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" maxlength="25" value="<?php echo $contrato['numproceso_contrato']; ?>">

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

  <?php
    }else{
  ?>
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
<?php
    }
  ?>


<?php
    if($contrato['conpro'] != ""){
  ?>
  <br>
  
          <div class="row">

       
            <div class="col-md-3">

              <label>Fecha de Invitaci&oacute;n a la Convocatoria <span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="favisoproceso_contrato" name="favisoproceso_contrato"
              value="<?php echo $contrato['favisoproceso_contrato']?>">

            </div>

            <div class="col-md-3">

              <label>Fecha Cierre de la Convocatoria <span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato" value="<?php echo $contrato['fcierreproceso_contrato']?>" >

            </div>

            <div class="col-md-3">

              <label>Fechas de Evaluaci&oacute;n <span style="color:red">*</span></label><br>
               <b>Desde:</b> <input size="20" type="date" class="form-control requerido" id="fevaluacionproceso_contrato" name="fevaluacionproceso_contrato"   value="<?php echo $contrato['fevaluacionproceso_contrato']?>">
               <b>Hasta:</b> <input size="20" type="date" class="form-control requerido" id="fevaluacionproceso2_contrato" name="fevaluacionproceso2_contrato"  value="<?php echo $contrato['fevaluacionproceso2_contrato']?>">

            </div>

             <div class="col-md-3">

              <label>Fecha de Adjudicaci&oacute;n< span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato" value="<?php echo $contrato['fadjudicacionproceso_contrato']?>">

            </div>


          </div>

          <?php
   }
  ?>

              
              <br>

              <?php

if($contrato['estado_contrato'] > 2){

?>
 <div class="row">

<div class="col-md-3">

  <label>No. de Contrato<span style="color:red">*</span></label>
  <input readonly type="text" class="form-control requerido" id="numero_contrato" name="numero_contrato" maxlength="25" value="<?php echo $contrato['numproceso_contrato']; ?>">

</div>

<div class="col-md-2">

  <label>Fecha del Contrato<span style="color:red">*</span></label>
  <input type="date" class="form-control requerido" id="fecha_contrato" name="fecha_contrato" value="<?php echo $contrato['fecha_contrato']; ?>">

</div>

<div class="col-md-2">

  <label>Fecha de Inicio<span style="color:red">*</span></label>
  <input type="date" class="form-control requerido" id="fechainicio_contrato" name="fechainicio_contrato" value="<?php echo $contrato['fechainicio_contrato']; ?>">

</div>

<div class="col-md-2">

  <label>Fecha Final<span style="color:red">*</span></label>
  <input type="date" class="form-control requerido" id="fechafinal_contrato" name="fechafinal_contrato" value="<?php echo $contrato['fechafinal_contrato']; ?>">

</div>

<div class="col-md-2">

  <label>Fecha de Liquidaci&oacute;n<span style="color:red">*</span></label>
  <input type="date" class="form-control requerido" id="fechaliquidacion_contrato" name="fechaliquidacion_contrato" value="<?php echo $contrato['fechaliquidacion_contrato']; ?>">

</div>


</div>


<div class="row">


<div class="col-md-4">

  <label>Valor del Contrato<span style="color:red">*</span></label>
  <input type="text" class="form-control requerido" id="valor_contrato" name="valor_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valor_contrato']; ?>">

</div>

<div class="col-md-8">

  <label>Contratista<span style="color:red">*</span></label>
    <?php
      echo $froms->Lista_Desplegable(
        $contratistas_select,
        'nombre_contratista',
        'id_contratista',
        'contratista_contrato',
        $contrato['contratista_contrato'],
        '',
        ''
      );
  ?>

</div>


</div>



<?php

}

?>

           

              <br>


              <div class="row">

                <div class="col-md-12">
                  <label>Objeto del Contrato<span style="color:red">*</span></label>
                  <textarea class="form-control requerido" rows="3" id="objeto_contrato" name="objeto_contrato"><?php echo utf8_encode($contrato['objeto_contrato']); ?></textarea>
                </div>

              </div>
            <br><br>
         