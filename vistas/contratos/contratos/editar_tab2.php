<div class="row">

      <div class="col-md-6">

          <label>Direcci&oacute;n Residencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dirresidencia_contratista" 
            name="dirresidencia_contratista" 
            value="<?php echo $datos['dirresidencia_contratista']; ?>">

      </div>

      <div class="col-md-6">
        
          <label>Direcci&oacute;n Correspondencia</label>

          <input 
            type="text" 
            class="form-control" 
            id="dircorrespondencia_contratista" 
            name="dircorrespondencia_contratista" 
            value="<?php echo $datos['dircorrespondencia_contratista']; ?>">

      </div>  

</div>




<br>




<div class="row">
      
      <div class="col-md-6">

          <label>Tel&eacute;fono</label>
          
          <input 
            type="text" 
            class="form-control" 
            id="telefono_contratista" 
            name="telefono_contratista" 
            value="<?php echo $datos['telefono_contratista']; ?>" 
            onkeypress="return no_numeros(event)">

      </div>
  

      <div class="col-md-6">

          <label>P&aacute;gina Web</label>

          <input 
            type="text" 
            class="form-control" 
            id="paginaweb_contratista" 
            name="paginaweb_contratista" 
            value="<?php echo $datos['paginaweb_contratista']; ?>">

    </div>

  </div>