<div class="row">

      <div class="col-md-6">

          <label>Direcci&oacute;n Residencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dirresidencia_encargado" 
            name="dirresidencia_encargado" 
            value="<?php echo utf8_encode($datos['dirresidencia_encargado']); ?>">

      </div>

      <div class="col-md-6">
        
          <label>Direcci&oacute;n Correspondencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dircorrespondencia_encargado" 
            name="dircorrespondencia_encargado" 
            value="<?php echo utf8_encode($datos['dircorrespondencia_encargado']); ?>">

      </div>  

</div>




<br>




<div class="row">
      
      <div class="col-md-6">

          <label>Tel&eacute;fono</label>
          
          <input 
            type="text" 
            class="form-control" 
            id="telefono_encargado" 
            name="telefono_encargado" 
            value="<?php echo $datos['telefono_encargado']; ?>" 
            onkeypress="return no_numeros(event)">

      </div>
  

      <div class="col-md-6">

          <label>P&aacute;gina Web</label>

          <input 
            type="text" 
            class="form-control" 
            id="paginaweb_encargado" 
            name="paginaweb_encargado" 
            value="<?php echo $datos['paginaweb_encargado']; ?>">

    </div>

  </div>