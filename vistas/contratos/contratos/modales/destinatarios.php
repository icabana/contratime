<script type="text/javascript">

function insertar_destinatario_entrante() {

if(!validar_requeridos_modal_destinatario()){
    return 0;
}

var datos = $('#formEmpleados').serialize();

ejecutarAccion(
  'administracion',
  'Empleados',
  'insertar_modal',
  datos,
  'insertar_destinatario_entrante2(data)'
);

}

function insertar_destinatario_entrante2(data) {

if (data == 'error_documento') {
  mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
  return false;
} 
if (data == 'error_correo') {
  mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
  return false;
} 

if (data == 'error_nick') {
  mensaje_alertas("error", "El Nick de Usuario ya se encuentra registrado", "center");
  return false;
} 

mensaje_alertas("success", "Empleado registrado correctamente", "center");


var json = eval(data);  

$('#destinatario_entrante').val(json[0].destinatario_entrante);
$('#destinatario_entrante2').val(json[0].destinatario_entrante2);

$("#modal_destinatarios").modal("hide");

}


</script>


<div class="modal fade" id="modal_destinatarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal_destinatarios2">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear Nuevo Destinatario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     


      <form autocomplete="on" id="formEmpleados" method="post">



        <div class="card-body">
          <div class="row">
            <div class="col-12">
            
            
            
            

              <div class="card">

                <ul class="nav nav-pills ml-auto p-2">

                  <li class="nav-item">
                    <a class="nav-link active" href="#tab_1_modal" data-toggle="tab">
                      Informaci&oacute;n Principal
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#tab_2_modal" data-toggle="tab">
                      Informaci&oacute;n Secundaria
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#tab_3_modal" data-toggle="tab">
                      Datos de Usuario
                    </a>
                  </li>


                </ul>

                <div class="tab-content">
                  <div style="padding: 20px;" class="tab-pane active" id="tab_1_modal">
                    <div class="row">

                      <div class="col-md-6">
                        <label>Tipo de Documento<span style="color:red">*</span></label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $tiposdocumento,
                          'nombre_tipodocumento',
                          'id_tipodocumento',
                          'tipodocumento_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-6">
                        <label>Documento<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="documento_empleado" 
                        name="documento_empleado">
                      </div>

                      
                    </div>

                    <br>

                    <div class="row">

                      
                      
                    </div>


                    <br>


                    <div class="row">

                      <div class="col-md-6">
                        <label>Nombres<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="nombres_empleado" 
                        name="nombres_empleado">
                      </div>


                      <div class="col-md-6">
                        <label>Apellidos<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="apellidos_empleado" 
                        name="apellidos_empleado">
                      </div>



                    </div>
                    
                  </div>
                  
                  <div style="padding: 20px;" class="tab-pane" id="tab_2_modal">

                    <div class="row">
                      
                    <div class="col-md-12">
                        <label>Dependencia<span style="color:red">*</span></label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $dependencias,
                          'nombre_dependencia',
                          'id_dependencia',
                          'dependencia_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>

                    </div>
                    <div class="col-md-12">
                    <br>

                        <label>Correo el&eacute;ctronico<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="correo_empleado" 
                        name="correo_empleado">
                      </div>

                    </div>
                  </div>



                  <div style="padding: 20px;" class="tab-pane" id="tab_3_modal">

                    <div class="row">
                      <div class="col-md-6">
                        <label>Nombre de Usuario<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="usuario_empleado" 
                        name="usuario_empleado">
                      </div>

                      <div class="col-md-6">
                        <label>Contrase&ntilde;a<span style="color:red">*</span></label>
                        <input type="password" class="form-control requerido_modal_destinatario" id="password_empleado" 
                        name="password_empleado">
                      </div>
                      </div>

<br>

<div class="row">

   <div class="col-md-6">
                        <label>Rol<span style="color:red">*</span></label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $roles,
                          'nombre_rol',
                          'id_rol',
                          'rol_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-6">
                        <label>Estado<span style="color:red">*</span></label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $estados,
                          'nombre_estado',
                          'id_estado',
                          'estado_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                    </div>
                 
                </div>
              </div>
          
             


        </div>
        </div>
          </div>


      </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button onclick="insertar_destinatario_entrante(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>