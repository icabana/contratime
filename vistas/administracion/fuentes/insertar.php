<div style="padding: 25px" class="row">

  <div  class="col-md-1"></div>

  <div  class="col-md-10">

    <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Registrar Fuente de Contrataci&oacute;n</h3>
        </div>

        <div class="card-body">
          <form autocomplete="on" id="form_fuentes" method="post">

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label>Nombre: <span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="nombre_fuente" name="nombre_fuente">
                </div>
              </div>

            </div>

          </form>          
        </div>

        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_fuentes();" class="btn btn-danger"><b>Cancelar</b></button>
            </div>     
            <div class="col-md-3">
              <button onclick="insertar_fuente(); return false;" class="btn btn-success"><b>Guardar</b></button>
            </div>     
          </div>     
        </div>     

    </div>

  </div>    

</div>