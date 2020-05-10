<div class="modal fade" id="modal_trazabilidad" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Nueva Bitacora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Registrar Nueva Bitacora: </label>
          <textarea cols="60" rows="5" id="accion_trazabilidad" name="accion_trazabilidad"></textarea>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="agregar_trazabilidad();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
