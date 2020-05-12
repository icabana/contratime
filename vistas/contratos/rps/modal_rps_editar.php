<div class="modal fade" id="modal_rps_editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar RP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <div class="col-md-12">

            <label>N&uacute;mero del RP: </label>
            <input type="text" class="form-control requerido_rp" id="numero_rp" name="numero_rp" 
             maxlength="10" onkeypress="return no_numeros(event)">

          </div>

          <br>

          <div class="col-md-12">

            <label>Fecha del RP: </label>
            <input type="date" class="form-control requerido_rp" id="fecha_rp" name="fecha_rp" >

          </div>

          <br>

          <div class="col-md-12">

            <label>Valor del RP: </label>
            <input type="text" class="form-control requerido_rp" id="valor_rp" name="valor_rp" 
            maxlength="20" onkeypress="return no_numeros(event)">

          </div>


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_rp_editar();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
