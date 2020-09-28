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
              <input type="password" class="form-control" id="password_nuevo" name="password_nuevo">
            </div>

          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button onclick="cambiar_contrasena(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>