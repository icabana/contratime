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


<div class="modal fade" id="modal_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form autocomplete="on" id="formTiposradicado_entrantes" method="post">

          <div class="card-body">

            <div class="form-group">
              <label>Nueva Contraseña: </label>
              <input type="password" class="form-control" id="password_nuevo" name="password_nuevo"
                      onkeypress="return no_numeros(event)">
            </div>

          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button onclick="cambiar_password(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>