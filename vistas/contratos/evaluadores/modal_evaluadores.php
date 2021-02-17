<div class="modal fade" id="modal_evaluadores" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Asociar Evaluador al Proceso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Evaluador: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $evaluadores_select,
              'nombre_evaluador',
              'id_evaluador',
              'evaluador_evaluador',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="asociar_evaluador_correo();" type="button" class="btn btn-success">Asociar y Enviar Correo</button>
        <button onclick="asociar_evaluador();" type="button" class="btn btn-primary">Asociar Evaluador</button>
      </div>
    </div>
  </div>
</div>
