<form id="form_usuarios" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-2"></div>
        <div style="padding: 25px" class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Usuario</h3>
            </div>

            <form role="form">

            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" 
                        value="<?php echo $datos['id_usuario']; ?>">

              <div class="card-body">

                <div class="row">

                  <div class="col-md-4">
                    
                    <div class="form-group">
                      <label>Documento<span style="color:red">*</span></label>
                      
                      <input type="text" readonly="" class="form-control" id="documento_usuario" name="documento_usuario" 
                              value="<?php echo $datos['documento_usuario']; ?>"  onkeypress="return no_numeros(event)"> 
                      
                    </div>
                  </div>

                  <div class="col-md-4">

                    <div class="form-group">
                      <label>Password<span style="color:red">*</span></label>
                      <input type="hidden" id="password2_usuario" name="password2_usuario" 
                              value="<?php echo $datos['password_usuario']; ?>">
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario"
                            value="<?php echo $datos['password_usuario']; ?>">
                    </div>

                  </div>

                  <div class="col-md-4">

                    <div class="form-group">
                      <label>Estado<span style="color:red">*</span></label>
                      <select  class="form-control" id="estado_usuario" name="estado_usuario">
                          <option <?php if($datos['estado_usuario'] == '1'){ echo "selected"; } ?> value="1" >ACTIVO</option>
                          <option <?php if($datos['estado_usuario'] == '2'){ echo "selected"; } ?> value="2" >INACTIVO</option>
                      </select>
                    </div>
                  </div>

                </div>


                <div class="row">
                  <div class="col-md-12">    
                    <div class="form-group">
                      <label>Correo<span style="color:red">*</span></label>
                      
                      <input type="text" class="form-control" id="correo_usuario" name="correo_usuario" 
                            value="<?php echo $datos['correo_usuario']; ?>">

                    </div>
                  </div>
                </div>
                    

                <div class="form-group">

                  <div class="row">                    
                    <?php

                      foreach($roles as $rol){
                        
                        $bandera = 0;
                        
                        foreach($perfiles as $perfil){

                            if($rol['id_rol'] == $perfil['rol_perfil']){
                              $bandera = 1;
                            }

                        }
                      
                        echo '<div  class="col-md-4">';
                        echo ' <center><label>'. $rol['nombre_rol'] .'</label></center>';

                        if($bandera == 1){
                            echo ' <input type="checkbox" class="form-control" 
                                  name="perfil_usuario" value="'.$rol['id_rol'].'" checked>';
                        }else{
                            echo ' <input type="checkbox" class="form-control" 
                                  name="perfil_usuario" value="'.$rol['id_rol'].'">';
                        }                        

                        echo '<br>';
                        echo '</div>';

                      }

                    ?>
                  </div>               

                </div>


                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-10">
                      <button onclick="cargar_usuarios();" class="btn btn-danger"><b>Cancelar</b></button>
                    </div>     
                    <div class="col-md-2">
                      <button onclick="editar_info_usuario(); return false;" class="btn btn-success"><b>Guardar</b></button>
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