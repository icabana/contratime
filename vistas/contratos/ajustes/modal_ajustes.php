<div class="modal fade" id="modal_ajustes" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Ajuste</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

        <div class="col-md-12">

          <label>Seleccionar Tipo de Ajuste: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $tiposajustes_select,
              'nombre_tipoajuste',
              'id_tipoajuste',
              'tipo_ajuste',
              '',
              '',
              ''
            );
          ?>

        </div>
        
        <br>
        
        <div class="col-md-12">

          <label>Fecha del Ajuste: </label>
          <input type="date" class="form-control requerido_ajuste" id="fecha_ajuste" name="fecha_ajuste" >

        </div>

        <br>

        <div class="col-md-12">

          <label>Valor del Ajuste: </label>
          <input type="text" class="form-control requerido_ajuste" id="valor_ajuste" name="valor_ajuste" 
          maxlength="20" onkeypress="return no_numeros(event)">

        </div>

         


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_ajuste();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
