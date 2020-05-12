<div class="modal fade" id="modal_pagos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

        <div class="col-md-12">

          <label>Seleccionar Tipo de Pago: </label>
          <?php
            echo $froms->Lista_Desplegable(
              $tipospago_select,
              'nombre_tipopago',
              'id_tipopago',
              'tipo_pago',
              '',
              '',
              ''
            );
          ?>

        </div>
        
        <br>

          <div class="col-md-12">

            <label>Fecha del Pago: </label>
            <input type="date" class="form-control requerido_pago" id="fecha_pago" name="fecha_pago" >

          </div>

        <br>

          <div class="col-md-12">

            <label>Valor del Pago: </label>
            <input type="text" class="form-control requerido_pago" id="valor_pago" name="valor_pago" 
            maxlength="20" onkeypress="return no_numeros(event)">

          </div>

         


      </div>
      <div class="modal-footer">        
        <button onclick="agregar_pago();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
