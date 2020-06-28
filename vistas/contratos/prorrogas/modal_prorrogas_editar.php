<div class="modal fade" id="modal_prorrogas_editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title">Agregar Prorroga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
   
        <div class="col-md-12">

          <label>D&iacute;as de Prorroga: </label>
          <input type="text" class="form-control requerido_prorroga" id="dias_prorroga" name="dias_prorroga" 
          maxlength="20" onkeypress="return no_numeros(event)">

        </div>

      </div>


      <div class="modal-footer">        
        <button onclick="agregar_prorroga_editar();" type="button" class="btn btn-primary">Agregar</button>
      </div>


    </div>
  </div>
</div>