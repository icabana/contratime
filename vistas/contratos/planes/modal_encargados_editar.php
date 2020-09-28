<div class="modal fade" id="modal_encargados_editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Asociar Encargado al Proceso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Encargado: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $encargados_select,
              'nombre_encargado',
              'id_encargado',
              'encargado_encargado',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="asociar_encargado_editar_correo();" type="button" class="btn btn-success">Asociar y Enviar Correo</button>
        <button onclick="asociar_encargado_editar();" type="button" class="btn btn-primary">Asociar Encargado</button>
      </div>
    </div>
  </div>
</div>
