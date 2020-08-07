<div class="row">

      <div class="col-md-6">

          <label>Direcci&oacute;n Residencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dirresidencia_supervisor" 
            name="dirresidencia_supervisor" 
            value="<?php echo utf8_encode($datos['dirresidencia_supervisor']); ?>">

      </div>

      <div class="col-md-6">
        
          <label>Direcci&oacute;n Correspondencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dircorrespondencia_supervisor" 
            name="dircorrespondencia_supervisor" 
            value="<?php echo utf8_encode($datos['dircorrespondencia_supervisor']); ?>">

      </div>  

</div>




<br>




<div class="row">
      
      <div class="col-md-6">

          <label>Tel&eacute;fono</label>
          
          <input 
            type="text" 
            class="form-control" 
            id="telefono_supervisor" 
            name="telefono_supervisor" 
            value="<?php echo $datos['telefono_supervisor']; ?>" 
            onkeypress="return no_numeros(event)">

      </div>
  

      <div class="col-md-6">

          <label>P&aacute;gina Web</label>

          <input 
            type="text" 
            class="form-control" 
            id="paginaweb_supervisor" 
            name="paginaweb_supervisor" 
            value="<?php echo $datos['paginaweb_supervisor']; ?>">

    </div>

  </div>