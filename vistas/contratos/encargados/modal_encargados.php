<div class="modal fade" id="modal_encargados" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Encargado</h5>
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
        <button onclick="agregar_encargado();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
