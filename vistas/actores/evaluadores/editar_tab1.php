<div class="row">
  
  
      <div class="col-md-3">

          <label>Tipo Persona<span style="color:red">*</span></label>

          <?php
          
            echo $froms->Lista_Desplegable(
                $tipos,
                'nombre_tipopersona',
                'id_tipopersona',
                'tipo_evaluador',
                $datos['tipo_evaluador'],
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
                  'tipodocumento_evaluador',
                  $datos['tipodocumento_evaluador'],
                  ''
              );
            ?>

      </div>


      <div class="col-md-6">

          <label>Documento<span style="color:red">*</span></label>

          <input 
            type="text" 
            class="form-control requerido" 
            id="documento_evaluador" 
            name="documento_evaluador" 
            value="<?php echo $datos['documento_evaluador']; ?>">

      </div>


</div>




<br>




<div class="row">


      <div class="col-md-6">

        <label>Nombres<span style="color:red">*</span></label>

        <input 
          type="text" 
          class="form-control requerido" 
          id="nombres_evaluador" 
          name="nombres_evaluador" 
          value="<?php echo utf8_encode($datos['nombres_evaluador']); ?>">

      </div>


      <div class="col-md-6">

        <label>Apellidos<span style="color:red">*</span></label>

        <input 
          type="text" 
          class="form-control requerido" 
          id="apellidos_evaluador" 
          name="apellidos_evaluador" 
          value="<?php echo utf8_encode($datos['apellidos_evaluador']); ?>">

      </div>


</div>





<br>


<div class="row">
    
    <div class="col-md-6">
      
        <label>Correo el&eacute;ctronico<span style="color:red">*</span></label>
        
        <input 
          type="text" 
          class="form-control requerido" 
          id="correo_evaluador" 
          name="correo_evaluador" 
          value="<?php echo $datos['correo_evaluador']; ?>">
          
    </div>

    <div class="col-md-6">

      <label>Celular<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="celular_evaluador" 
        name="celular_evaluador" 
        value="<?php echo $datos['celular_evaluador']; ?>" 
        onkeypress="return no_numeros(event)">
        
    </div>


</div>