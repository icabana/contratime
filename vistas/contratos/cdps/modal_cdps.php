<div class="modal fade" id="modal_cdps" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar CDP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <div class="col-md-12">

            <label>N&uacute;mero del CDP: <span style="color:red">*</span></label>
            <input type="text" class="form-control requerido_cdp" id="numero_cdp" name="numero_cdp" 
             maxlength="10" onkeypress="return no_numeros(event)">

          </div>

          <br>

          <div class="col-md-12">

            <label>Fecha del CDP: <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_cdp" id="fecha_cdp" name="fecha_cdp" >

          </div>

          <br>

          <div class="col-md-12">

            <label>Valor del CDP: <span style="color:red">*</span></label>
            <input type="text" class="form-control requerido_cdp" id="valor_cdp" name="valor_cdp" 
            maxlength="20" onkeypress="return no_numeros(event)">

          </div>


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_cdp();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
