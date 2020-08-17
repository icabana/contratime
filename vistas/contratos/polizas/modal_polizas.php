<div class="modal fade" id="modal_polizas" tabindex="-1" role="dialog" aria-hidden="true">
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

        <label>N&uacute;mero de la Poliza:  <span style="color:red">*</span></label>
          <input type="text" class="form-control requerido_pago" id="numero_poliza" name="numero_poliza" 
            maxlength="20" onkeypress="return no_numeros(event)">

        </div>

        <br>

          <div class="col-md-12">

            <label>Fecha de Expedici&oacute;n:  <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_poliza" id="fechaexp_poliza" name="fechaexp_poliza" >

          </div>

        <br>

        <div class="col-md-12">

          <label>Fecha de Inicio:  <span style="color:red">*</span></label>
          <input type="date" class="form-control requerido_poliza" id="fechainicio_poliza" name="fechainicio_poliza" >

          </div>
          <br>

          <div class="col-md-12">

            <label>Fecha Final:  <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_poliza" id="fechafinal_poliza" name="fechafinal_poliza" >

            </div>


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_poliza();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
