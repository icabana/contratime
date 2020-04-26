<script type="text/javascript">

  function cambiar_password() {

      if($('#password_nuevo').val() == ""){        
        mensaje_alertas("error", "Debe ingresar la nueva contraseña, para poder continuar.", "center");
        return false;
      }

      ejecutarAccion(
        'configuracion',
        'Login',
        'cambiarContrasena',
        'password_nuevo='+$('#password_nuevo').val(),
        'mensaje_alertas("success", data, "center"); $("#modal_password").modal("hide");'
      );

  }
  
</script>


<div class="modal fade" id="modal_perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SELECCIONAR PERFIL</h5>
        <br><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">

      <table id="example2" class="table table-bordered table-hover">
          <thead>             
              <?php

                foreach ($_SESSION['perfiles'] as $perfil) {

                    echo "<tr>";

                    echo "<th title='Seleccionar Perfil' style='background-color:lavender'>
                            <a onclick='seleccionar_perfil(" . $perfil['id_rol'] . ");'  href='#'>" . 
                            utf8_encode($perfil['nombre_rol']) . "
                            </a>
                          </th>";

                    if($_SESSION['rol'] == $perfil['id_rol']){
                        echo "<th style='background-color:lavender'><span style='color:green'>(PREDETERMINADO)</span></th>";
                      }else{
                        echo "<th style='background-color:lavender'></th>";
                    }

                    echo "</tr>";
                    
                }

              ?>
          </thead>

      </table>


      </div>
      
    </div>

  </div>
</div>