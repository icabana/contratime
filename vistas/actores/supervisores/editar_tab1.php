<div class="row">
  
  
      <div class="col-md-3">

          <label>Tipo Persona<span style="color:red">*</span></label>

          <?php
          
            echo $froms->Lista_Desplegable(
                $tipos,
                'nombre_tipopersona',
                'id_tipopersona',
                'tipo_supervisor',
                $datos['tipo_supervisor'],
                '',
                ''
              );
          ?>

      </div>


      <div class="col-md-3">
        
          <label>Tipo de Documento<span style="color:red">*</span></label>

            <?php
              echo $froms->Lista_Desplegable(
                  $tiposdocumento,
                  'nombre_tipodocumento',
                  'id_tipodocumento',
                  'tipodocumento_supervisor',
                  $datos['tipodocumento_supervisor'],
                  ''
              );
            ?>

      </div>


      <div class="col-md-6">

          <label>Documento<span style="color:red">*</span></label>

          <input 
            type="text" 
            class="form-control requerido" 
            id="documento_supervisor" 
            name="documento_supervisor" 
            value="<?php echo $datos['documento_supervisor']; ?>">

      </div>


</div>




<br>




<div class="row">


      <div class="col-md-6">

        <label>Nombres<span style="color:red">*</span></label>

        <input 
          type="text" 
          class="form-control requerido" 
          id="nombres_supervisor" 
          name="nombres_supervisor" 
          value="<?php echo utf8_encode($datos['nombres_supervisor']); ?>">

      </div>


      <div class="col-md-6">

        <label>Apellidos<span style="color:red">*</span></label>

        <input 
          type="text" 
          class="form-control requerido" 
          id="apellidos_supervisor" 
          name="apellidos_supervisor" 
          value="<?php echo utf8_encode($datos['apellidos_supervisor']); ?>">

      </div>


</div>





<br>


<div class="row">
    
    <div class="col-md-6">
      
        <label>Correo el&eacute;ctronico<span style="color:red">*</span></label>
        
        <input 
          type="text" 
          class="form-control requerido" 
          id="correo_supervisor" 
          name="correo_supervisor" 
          value="<?php echo $datos['correo_supervisor']; ?>">
          
    </div>

    <div class="col-md-6">

      <label>Celular<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="celular_supervisor" 
        name="celular_supervisor" 
        value="<?php echo $datos['celular_supervisor']; ?>" 
        onkeypress="return no_numeros(event)">
        
    </div>


</div>