<?php
  $froms = new Formularios();
?>

<form id="form_soportes" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-2"></div>
        <div style="padding: 25px" class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Soporte de Contrataci&oacute;n</h3>
            </div>

            <form role="form">

            <input type="hidden" class="form-control" id="id_soporte" name="id_soporte" 
                        value="<?php echo $datos['id_soporte']; ?>">

              <div class="card-body">

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
                        $datos['tipo_soporte'],
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
                      <input type="text" class="form-control requerido" id="nombre_soporte" name="nombre_soporte"
                          value="<?php echo $datos['nombre_soporte'] ?>">
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Descripci&oacute;n del Soporte:</label>
                      <textarea class="form-control" id="descripcion_soporte" name="descripcion_soporte"><?php echo $datos['descripcion_soporte'] ?></textarea>                
                    </div>
                  </div>

                  </div>
                
              </div>
              

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-10">
                      <button onclick="cargar_soportes();" class="btn btn-danger"><b>Cancelar</b></button>
                    </div>     
                    <div class="col-md-2">
                      <button onclick="editar_info_soporte(); return false;" class="btn btn-success"><b>Guardar</b></button>
                    </div>     
                  </div>     
                </div>     


            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>