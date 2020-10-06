<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary" style="font-size:0.8rem">
      <div class="card-header">
        <h3 class="card-title">Crear Nuevo Contrato</h3>
      </div>

      <form autocomplete="on" id="formContratos" method="post">

        <div class="card-body">
          <div class="row">

            <div class="col-md-3">

              <label>No. de Contrato<span style="color:red">*</span></label>
              <input readonly type="text" class="form-control requerido" id="numero_contrato" name="numero_contrato"
                    value="<?php echo date('Y')." - ?"; ?>">

            </div>


            <div class="col-md-3">

              <label>Valor del Contrato<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valor_contrato" name="valor_contrato" onkeypress="return no_numeros(event)">

            </div>

            <div class="col-md-3">

              <label>Estado<span style="color:red">*</span></label>
              <input readonly class="form-control requerido" value="Borrador">

            </div>

            <div class="col-md-3">
                <label>Publicado en SECOP <span style="color:red">*</span></label>

                <?php
                echo $froms->Lista_Desplegable(
                  $estados2,
                  'nombre_estado',
                  'id_estado',
                  'estado2_contrato',
                  '',
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

              <label>Fecha del Contrato<span style="color:red">*</span></label>
              <input readonly type="date" class="form-control requerido" id="fecha_contrato" name="fecha_contrato" value="<?php echo date("Y-m-d"); ?>">

            </div>

 
            <div class="col-md-2">

              <label>Fecha de Inicio<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fechainicio_contrato" name="fechainicio_contrato" value="<?php echo $contrato['fechainicio_contrato']; ?>">

            </div>

            <div class="col-md-2">

              <label>Fecha de Terminaci&oacute;n<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fechafinal_contrato" name="fechafinal_contrato" value="<?php echo $contrato['fechafinal_contrato']; ?>">

            </div>


            <div class="col-md-2">

              <label>Fecha de Liquidaci&oacute;n<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fechaliquidacion_contrato" name="fechaliquidacion_contrato" value="<?php echo $contrato['fechaliquidacion_contrato']; ?>">

            </div>

            <div class="col-md-4">

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