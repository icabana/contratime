<div class="modal fade" id="modal_supervisores_editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Asociar Supervisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Supervisor: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $supervisores_select,
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
        <button onclick="asociar_supervisor_editar_correo();" type="button" class="btn btn-success">Asociar y Enviar Correo</button>
        <button onclick="asociar_supervisor_editar();" type="button" class="btn btn-primary">Asociar Supervisor</button>
      </div>
    </div>
  </div>
</div>
