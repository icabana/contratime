<div class="modal fade" id="modal_supervisores" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Supervisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Supervisor: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $supervisores,
              'nombre_supervisor',
              'id_supervisor',
              'supervisor_supervisor',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="agregar_supervisor();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>