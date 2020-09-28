<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary" style="font-size:0.8rem">
      <div class="card-header">
        <h3 class="card-title">Crear Nuevo Contrato (Estado Actual: Borrador)</h3>
      </div>

      <form autocomplete="on" id="formContratos" method="post">

        <div class="card-body">
          <div class="row">

            <div class="col-md-2">

              <label>No. de Contrato<span style="color:red">*</span></label>
              <input readonly type="text" class="form-control requerido" id="numero_contrato" name="numero_contrato"
                    value="<?php echo $agncon." - ".$concon; ?>">

            </div>


            <div class="col-md-2">

              <label>Valor del Contrato<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valor_contrato" name="valor_contrato" onkeypress="return no_numeros(event)">

            </div>

            <div class="col-md-4">
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


            <div class="col-md-4">
              <label>Tipo de Contrataci&oacute;n <span style="color:red">*</span></label>

              <?php
              echo $froms->Lista_Desplegable(
                $tiposcontrato,
                'nombre_tipocontrato',
                'id_tipocontrato',
                'tipo_contrato',
                '',
                '',
                ''
              );
              ?>
            </div>


          </div>
<br>
          <div class="row">

         

            <div class="col-md-2">

              <label>Fecha de Inicio<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fechainicio_contrato" name="fechainicio_contrato" value="<?php echo $contrato['fechainicio_contrato']; ?>">

            </div>


            <div class="col-md-2">

              <label>Fecha Final<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fechafinal_contrato" name="fechafinal_contrato" value="<?php echo $contrato['fechafinal_contrato']; ?>">

            </div>

            <div class="col-md-8">

              <label>Contratista<span style="color:red">*</span></label>
                <?php
                  echo $froms->Lista_Desplegable(
                    $contratistas_select,
                    'nombre_contratista',
                    'id_contratista',
                    'contratista_contrato',
                    '',
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
              <textarea class="form-control requerido" rows="2" id="objeto_contrato" name="objeto_contrato"></textarea>
            </div>

          </div>


        </div>


        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_contratos();" class="btn btn-danger">Cancelar</button>
            </div>
            <div class="col-md-3">
              <button onclick="insertar_contrato_directo(); return false;" class="btn btn-success">Guardar</button>
            </div>
          </div>
        </div>


      </form>

    </div>
  </div>