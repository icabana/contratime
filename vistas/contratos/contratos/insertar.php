<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Crear Nuevo Contrato (Estado Actual: Borrador)</h3>
      </div>

      <form autocomplete="on" id="formContratos" method="post">

        <div class="card-body">
          <div class="row">

            <div class="col-md-3">

              <label>No. de Proceso<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $numproceso_contrato; ?>">

            </div>


            <div class="col-md-3">

              <label>Valor del Proceso<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" 
              onkeypress="return no_numeros(event)" value="<?php echo $numproceso_contrato; ?>">

            </div>

            <div class="col-md-3">

              <label>Fecha Aviso Convocatoria<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="favisoproceso_contrato" name="favisoproceso_contrato">

            </div>
            
            <div class="col-md-3">

              <label>Limite Presentaci&oacute;n Propuestas<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fpresentacionproceso_contrato" name="fpresentacionproceso_contrato">

            </div>



          </div>

          <br>


          <div class="row">

          

            <div class="col-md-4">

              <label>Fecha Evaluaci&oacute;n<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fevaluacionproceso_contrato" name="fevaluacionproceso_contrato">

            </div>
            
            <div class="col-md-4">

              <label>Fecha Adjudicaci&oacute;n<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato">

            </div>


            <div class="col-md-4">

              <label>Fecha Cierre<span style="color:red">*</span></label>
              <input type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato">

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
                '',
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
              <textarea class="form-control requerido" rows="3" id="objeto_contrato" name="objeto_contrato"></textarea>
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