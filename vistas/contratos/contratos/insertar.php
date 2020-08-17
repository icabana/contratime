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

              <label>No. de Proceso<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato">

            </div>


            <div class="col-md-2">

              <label>Valor del Proceso<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $numproceso_contrato; ?>">

            </div>

            <div class="col-md-4">
              <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $modalidades,
                'nombre_modalidad',
                'id_modalidad',
                'modalidad_contrato',
                '',
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
                '',
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
              <input type="date" onchange="fchinv_insertar(this);" class="form-control requerido" id="favisoproceso_contrato" name="favisoproceso_contrato">

            </div>


            <div class="col-md-3">

              <label>Fecha de Evaluaci&oacute;n<span style="color:red">*</span></label><br>
               <b>Desde:</b> <input onchange="fchevl1_insertar(this);" type="date" class="form-control requerido" id="fevaluacionproceso_contrato" name="fevaluacionproceso_contrato">
               <b>Hasta:</b> <input onchange="fchevl2_insertar(this);" size="20" type="date" class="form-control requerido" id="fevaluacionproceso2_contrato" name="fevaluacionproceso2_contrato">

            </div>


       

             <div class="col-md-3">

              <label>Fecha de Adjudicaci&oacute;n<span style="color:red">*</span></label>
              <input onchange="fchadj_insertar(this);" type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato">

            </div>


            <div class="col-md-3">

              <label>Fecha de Cierre<span style="color:red">*</span></label>
              <input onchange="fchcie_insertar(this);" type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato">

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
              <button onclick="insertar_contrato(); return false;" class="btn btn-success">Guardar</button>
            </div>
          </div>
        </div>


      </form>

    </div>
  </div>