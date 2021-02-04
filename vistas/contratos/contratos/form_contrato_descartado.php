<?php
$froms = new Formularios();
?>


<div class="row">

  <div class="col-md-3">

    <label>No. de Contrato<span style="color:red">*</span></label>
    <input type="text" class="form-control requerido" id="numero_contrato" name="numero_contrato" maxlength="25" value="<?php echo $contrato['numero_contrato']; ?>">

  </div>


  <div class="col-md-3">

    <label>Valor del Contrato<span style="color:red">*</span></label>
    <input type="text" class="form-control requerido" id="valor_contrato" name="valor_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valor_contrato']; ?>">

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
            '1',
            '',
            'mostrar_fechas_procesos()'
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


<br>

  <div class="row">


    <div class="col-md-2">

      <label>Fecha del Contrato<span style="color:red">*</span></label>
      <input type="date" class="form-control requerido" id="fecha_contrato" name="fecha_contrato" value="<?php echo $contrato['fecha_contrato']; ?>">

    </div>

    <div class="col-md-2">

      <label>Fecha de Inicio<span style="color:red">*</span></label>
      <input type="date" class="form-control requerido" id="fechainicio_contrato" name="fechainicio_contrato" value="<?php echo $contrato['fechainicio_contrato']; ?>">

    </div>


    <div class="col-md-2">

      <label>Fecha Finalizaci&oacute;n<span style="color:red">*</span></label>
      <input type="date" class="form-control requerido" id="fechafinal_contrato" name="fechafinal_contrato" value="<?php echo $contrato['fechafinal_contrato']; ?>">

    </div>

    <div class="col-md-2">

      <label>Fecha de Liquidaci&oacute;n<span style="color:red">*</span></label>
      <input type="date" class="form-control" readonly id="fechaliquidacion_contrato" name="fechaliquidacion_contrato" value="<?php echo $contrato['fechaliquidacion_contrato']; ?>">

    </div>

    <div class="col-md-4">

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


<br>
<div class="row">

  <div class="col-md-12">
    <label>Objeto del Contrato<span style="color:red">*</span></label>
    <textarea disabled class="form-control" rows="2" id="objeto_contrato" name="objeto_contrato"><?php echo utf8_encode($contrato['objeto_contrato']); ?></textarea>
  </div>

</div>


<br>
<div class="row">

  <div class="col-md-12">
    <label>Observaci&oacute;n<span style="color:red">*</span></label>
    <textarea class="form-control requerido" rows="2" id="obsdel" name="obsdel"><?php echo utf8_encode($contrato['obsdel']); ?></textarea>
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
    <button onclick="editar_info_contrato_descartado(); return false;" class="btn btn-success">Guardar Observaci&oacute;n</button>
  </div>
  <div class="col-md-4"></div>
</div>