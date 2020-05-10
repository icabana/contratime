<?php
$froms = new Formularios();
?>

<form autocomplete="on" id="formContratos" method="post">

  <input type="hidden" id="id_contrato" name="id_contrato" value="<?php echo $contrato['id_contrato']; ?>">

  <div class="box box-default">

    <div style="padding: 25px" class="box-body">

      <div class="card card-primary">


        <div class="card-header">
          <h3 class="card-title">Editar Contrato (Estado: Convocado)</h3>
        </div>



        <div class="card-body">

          <!--TITULOS DE LOS TAB-->
          <ul class="nav nav-pills ml-auto p-2">

            <li class="nav-item">
              <a class="nav-link active" href="#tab_1" data-toggle="tab">
                Datos del Proceso
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_2_supervisores" data-toggle="tab">
                Supervisores
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_3_trazabilidad" data-toggle="tab">
                Trazabilidad
              </a>
            </li>

          </ul>

          <!--INICIO DE LAS TABS-->
          <div class="tab-content">


            <div style="padding: 20px; height:350px" class="tab-pane active" id="tab_1">


              <div class="row">

                <div class="col-md-3">

                  <label>No. de Proceso<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['numproceso_contrato']; ?>">

                </div>


                <div class="col-md-3">

                  <label>Valor del Proceso<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valproceso_contrato']; ?>">

                </div>

                <div class="col-md-3">

                  <label>Fecha de Adjudicaci&oacute;n<span style="color:red">*</span></label>
                  <input type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato" value="<?php echo $contrato['fadjudicacionproceso_contrato']; ?>">

                </div>


                <div class="col-md-3">

                  <label>Fecha de Cierre<span style="color:red">*</span></label>
                  <input type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato" value="<?php echo $contrato['fcierreproceso_contrato']; ?>">

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
                  <label>Tipo de Contrataci&oacute;n---<?php echo count($trazabilidad); ?> <span style="color:red">*</span></label>

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

                <div class="col-md-12">
                  <label>Objeto del Contrato<span style="color:red">*</span></label>
                  <textarea class="form-control requerido" rows="3" id="objeto_contrato" name="objeto_contrato"><?php echo $contrato['objeto_contrato']; ?></textarea>
                </div>

              </div>


            </div>


            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_2_supervisores">

              <?php
              include("vistas/contratos/supervisores/lista_supervisores.php");
              ?>
            </div>


            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_3_trazabilidad">

              <?php
              include("vistas/contratos/trazabilidad/lista_trazabilidad.php");
              ?>
            </div>

          </div>



          <div class="card-footer">
            <div class="row">
              <div class="col-md-9">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="cargar_contratos();" class="btn btn-danger">Cancelar</button>
              </div>
              <div class="col-md-3">
                <button onclick="insertar_contrato(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>

</form>