<div class="modal fade" id="modal_adjudicar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seleccionar Contratista para Adjudicar Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Contratista: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $contratistas_select,
              'nombre_contratista',
              'id_contratista',
              'contratista_adjudicar',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="adjudicar_contrato();" type="button" class="btn btn-primary">Adjudicar</button>
      </div>
    </div>
  </div>
</div>
