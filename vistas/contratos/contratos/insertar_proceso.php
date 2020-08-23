<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary" style="font-size:0.8rem">
      <div class="card-header">
        <h3 class="card-title">Iniciar Nuevo Proceso Contractual (Estado Actual: Borrador)</h3>
      </div>

      <form autocomplete="on" id="formContratos" method="post">

        <div class="card-body">
       
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