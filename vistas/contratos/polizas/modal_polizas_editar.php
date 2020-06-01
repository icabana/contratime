<div class="modal fade" id="modal_polizas_editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Poliza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="col-md-12">

          <label>N&uacute;mero de la Poliza: </label>
          <input type="text" class="form-control requerido_poliza" id="numero_poliza" name="numero_poliza" >

        </div>

        <br>

          <div class="col-md-12">

            <label>Fecha de Expedici&oacute;n: </label>
            <input type="date" class="form-control requerido_poliza" id="fechaexp_poliza" name="fechaexp_poliza" >

          </div>

        <br>

        <div class="col-md-12">

          <label>Fecha de Inicio: </label>
          <input type="date" class="form-control requerido_poliza" id="fechainicio_poliza" name="fechainicio_poliza" >

          </div>
          <br>

          <div class="col-md-12">

            <label>Fecha Final: </label>
            <input type="date" class="form-control requerido_poliza" id="fechafinal_poliza" name="fechafinal_poliza" >

            </div>


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_poliza_editar();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
