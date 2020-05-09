<div class="row">
  
    <div class="col-md-3">

      <label>Tipo Persona<span style="color:red">*</span></label>

      <?php
      
        echo $froms->Lista_Desplegable(
            $tipos,
            'nombre_tipopersona',
            'id_tipopersona',
            'tipo_contratista',
            '',
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
              '',
              ''
          );
        ?>

    </div>


    <div class="col-md-6">

      <label>Documento<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="documento_contratista" 
        name="documento_contratista"
        onkeypress="return no_numeros(event)">
    </div>

</div> 




<br>




<div class="row">

    <div class="col-md-6">

      <label>Nombres<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="nombres_contratista" 
        name="nombres_contratista">

    </div>


    <div class="col-md-6">

      <label>Apellidos<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="apellidos_contratista" 
        name="apellidos_contratista">

    </div>

</div>





<br>





<div class="row">

    <div class="col-md-6">

      <label>Correo el&eacute;ctronico<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="correo_contratista" 
        name="correo_contratista" />

    </div>

    <div class="col-md-6">

      <label>Celular<span style="color:red">*</span></label>

      <input 
        type="text" 
        class="form-control requerido" 
        id="celular_contratista" 
        name="celular_contratista"
        onkeypress="return no_numeros(event)" />
      
    </div>

</div>