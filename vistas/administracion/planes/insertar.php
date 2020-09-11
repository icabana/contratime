<div style="padding: 25px" class="row">

  <div class="col-md-2"></div>

  <div class="col-md-8">

    <div class="card card-primary">

      <div class="card-header">
        <h3 class="card-title">Registrar Plan de Contrataci&oacute;n</h3>
      </div>

      <div class="card-body">
        <form autocomplete="on" id="form_planes" method="post">

          <div class="row">

              <div class="col-md-6">

                <div class="form-group">
                  <label>Vigencia: <span style="color:red">*</span></label>

                  <select name="ano_plan" id="ano_plan" class="form-control">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                  </select>

                </div>
              </div>

              <div class="col-md-6">

                <div class="form-group">
                  <label>Valor Total: <span style="color:red">*</span></label>

                  <input type="text" readonly class="form-control input_dinero" id="valor_plan" name="valor_plan" value="0">

                </div>
              </div>

              <div class="col-md-12">

                <div class="form-group">
                  <label>Nombre del Contacto: <span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="contacto_plan" name="contacto_plan" value="<?php echo utf8_encode($datos['contacto_plan']); ?>">

                </div>
              </div>

            </div>

        </form>
      </div>

      <div class="card-footer">
        <div class="row">
          <div class="col-md-9">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button onclick="cargar_planes();" class="btn btn-danger"><b>Cancelar</b></button>
          </div>
          <div class="col-md-3">
            <button onclick="insertar_plan(); return false;" class="btn btn-success"><b>Guardar</b></button>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>