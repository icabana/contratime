<div style="padding: 25px" class="row">

  <div  class="col-md-3"></div>

  <div  class="col-md-6">

    <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Registrar Modalidad de Contrataci&oacute;n</h3>
        </div>

        <div class="card-body">
          <form autocomplete="on" id="form_modalidades" method="post">

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label>Nombre: <span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="nombre_modalidad" name="nombre_modalidad">
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label>Tipo: <span style="color:red">*</span></label>
                  <select class="form-control requerido" name="tipo_modalidad" id="tipo_modalidad">
                      <option value="proceso">Incluye Fechas de Proceso </option>
                      <option value="contrato">No Incluye Fechas de Proceso </option>
                  </select>
                </div>
              </div>

            </div>



          </form>          
        </div>

        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_modalidades();" class="btn btn-danger"><b>Cancelar</b></button>
            </div>     
            <div class="col-md-3">
              <button onclick="insertar_modalidad(); return false;" class="btn btn-success"><b>Guardar</b></button>
            </div>     
          </div>     
        </div>     

    </div>

  </div>    

</div>