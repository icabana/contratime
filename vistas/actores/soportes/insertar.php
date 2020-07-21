<?php
  $froms = new Formularios();
?>

<div style="padding: 25px" class="row">

  <div  class="col-md-3"></div>

  <div  class="col-md-6">

    <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Registrar Soporte de Contratistas</h3>
        </div>

        <div class="card-body">
          <form autocomplete="on" id="form_soportes" method="post">

          <div class="row">

          <div class="col-md-12">
            <div class="form-group">
              <label>Tipo de Soporte: <span style="color:red">*</span></label>
              <?php
      
                echo $froms->Lista_Desplegable(
                    $tipos,
                    'nombre_tipopersona',
                    'id_tipopersona',
                    'tipo_soporte',
                    '',
                    '',
                    ''
                  );
              ?>
            </div>
          </div>

          </div>


            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label>Nombre del Soporte: <span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="nombre_soporte" name="nombre_soporte">
                </div>
              </div>

            </div>


          </form>          
        </div>

        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_soportes();" class="btn btn-danger"><b>Cancelar</b></button>
            </div>     
            <div class="col-md-3">
              <button onclick="insertar_soporte(); return false;" class="btn btn-success"><b>Guardar</b></button>
            </div>     
          </div>     
        </div>     

    </div>

  </div>    

</div>