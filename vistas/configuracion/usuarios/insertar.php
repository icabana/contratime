<div style="padding: 25px" class="row">

  <div  class="col-md-3"></div>

  <div  class="col-md-6">

    <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Registrar Usuario</h3>
        </div>

        <div class="card-body">
          <form autocomplete="on" id="form_usuarios" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Documento<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="documento_usuario" name="documento_usuario"
                        onkeypress="return no_numeros(event)">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Password<span style="color:red">*</span></label>
                <input type="password" class="form-control requerido" id="password_usuario"
                      name="password_usuario">
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label>Correo<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="correo_usuario"
                      name="correo_usuario">
              </div>
            </div>
          </div>
          </form>

            <div class="form-group">

              <div class="row">
                
                <?php

                  foreach($roles as $rol){
                  
                    echo '<div  class="col-md-4">';
                    echo ' <center><label>'. $rol['nombre_rol'] .'</label></center>';
                    echo ' <input type="checkbox" class="form-control" id="perfil_usuario"
                    name="perfil_usuario" value="'.$rol['id_rol'].'">';
                    echo '<br>';
                    echo '</div>';

                  }

                ?>
                </div>               
              </div>
              
          
        </div>

        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_usuarios();" class="btn btn-danger"><b>Cancelar</b></button>
            </div>     
            <div class="col-md-3">
              <button onclick="insertar_usuario(); return false;" class="btn btn-success"><b>Guardar</b></button>
            </div>     
          </div>     
        </div>     

    </div>

  </div>    

</div>