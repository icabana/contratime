<div class="row">
  
  
      <div class="col-md-3">

          <label>Tipo Persona<span style="color:red">*</span></label>

          <?php
          
            echo $froms->Lista_Desplegable(
                $tipos,
                'nombre_tipopersona',
                'id_tipopersona',
                'tipo_contratista',
                $datos['tipo_contratista'],
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
                  'tipodocumento_contratista',
                  $datos['tipodocumento_contratista'],
                  ''
              );
            ?>

      </div>


      <div class="col-md-6">

          <label>N&uacute;mero de Documento<span style="color:red">*</span></label>

          <input 
            type="text" 
            class="form-control requerido" 
            id="documento_contratista" 
            name="documento_contratista" 
            value="<?php echo $datos['documento_contratista']; ?>">

      </div>


</div>




<br>




<div class="row">


      <div class="col-md-6">

        <label>Nombre del Contratista<span style="color:red">*</span></label>

        <input 
          type="text" 
          class="form-control requerido" 
          id="nombre_contratista" 
          name="nombre_contratista" 
          value="<?php echo utf8_encode($datos['nombre_contratista']); ?>">

      </div>

      
    <div class="col-md-4">
      
        <label>Correo el&eacute;ctronico<span style="color:red">*</span></label>
        
        <input 
          type="text" 
          class="form-control requerido" 
          id="correo_contratista" 
          name="correo_contratista" 
          value="<?php echo $datos['correo_contratista']; ?>">
          
    </div>

    <div class="col-md-2">

      <label>Celular<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="celular_contratista" 
        name="celular_contratista" 
        value="<?php echo $datos['celular_contratista']; ?>" 
        onkeypress="return no_numeros(event)">
        
    </div>


</div>