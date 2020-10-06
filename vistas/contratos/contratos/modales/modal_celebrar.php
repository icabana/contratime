<div class="modal fade" id="modal_celebrar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Celebrar Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <div class="row">
          <div class="col-md-6">

            <label>N&uacute;mero de Contrato: <span style="color:red">*</span></label>
            <input readonly type="text" class="form-control requerido_celebrar" id="numero_contra" name="numero_contra" 
            maxlength="20" value="<?php echo date("Y").' - ?' ?>">

          </div>
      
          <div class="col-md-6">

            <label>Fecha del Contrato: <span style="color:red">*</span></label>
            <input readonly type="date" class="form-control requerido_celebrar" value="<?php echo date('Y-m-d'); ?>" id="fecha_contra" name="fecha_contra" >

          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6">

            <label>Fecha de Inicio: <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_celebrar" id="fechainicio_contra" name="fechainicio_contra" >

          </div>
        
          
          <div class="col-md-6">

            <label>Fecha Final: <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_celebrar" id="fechafinal_contra" name="fechafinal_contra" >

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">

            <label>Fecha Liquidación: <span style="color:red">*</span></label>
            <input type="date" class="form-control requerido_celebrar" id="fechaliquidacion_contra" name="fechaliquidacion_contra" >

          </div>
      
          <div class="col-md-6">

            <label>Valor del Contrato: <span style="color:red">*</span></label>
            <input type="text" class="form-control requerido_celebrar" id="valor_contra" name="valor_contra" 
            maxlength="20" onkeypress="return no_numeros(event)">

          </div>
        </div>

         


      </div>
      <div class="modal-footer">        
        <button onclick="celebrar_contrato();" type="button" class="btn btn-primary">Celebrar</button>
      </div>
    </div>
  </div>
</div>
