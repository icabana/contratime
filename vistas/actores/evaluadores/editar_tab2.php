<div class="row">

      <div class="col-md-6">

          <label>Direcci&oacute;n Residencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dirresidencia_evaluador" 
            name="dirresidencia_evaluador" 
            value="<?php echo utf8_encode($datos['dirresidencia_evaluador']); ?>">

      </div>

      <div class="col-md-6">
        
          <label>Direcci&oacute;n Correspondencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dircorrespondencia_evaluador" 
            name="dircorrespondencia_evaluador" 
            value="<?php echo utf8_encode($datos['dircorrespondencia_evaluador']); ?>">

      </div>  

</div>




<br>




<div class="row">
      
      <div class="col-md-6">

          <label>Tel&eacute;fono</label>
          
          <input 
            type="text" 
            class="form-control" 
            id="telefono_evaluador" 
            name="telefono_evaluador" 
            value="<?php echo $datos['telefono_evaluador']; ?>" 
            onkeypress="return no_numeros(event)">

      </div>
  

      <div class="col-md-6">

          <label>P&aacute;gina Web</label>

          <input 
            type="text" 
            class="form-control" 
            id="paginaweb_evaluador" 
            name="paginaweb_evaluador" 
            value="<?php echo $datos['paginaweb_evaluador']; ?>">

    </div>

  </div>