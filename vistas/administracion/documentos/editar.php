<form id="form_documentos" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-2"></div>
        <div style="padding: 25px" class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Documento</h3>
            </div>

            <input type="hidden" name="modalidad_documento_editar" id="modalidad_documento_editar" 
                  value="<?php echo $datos['modalidad_documento']; ?>">

            <input type="hidden" class="form-control" id="id_documento" name="id_documento" 
                        value="<?php echo $datos['id_documento']; ?>">

              <div class="card-body">

                <div class="row">

                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <label>Nombre: <span style="color:red">*</span></label>
                      
                      <input type="text" class="form-control" id="nombre_documento" name="nombre_documento" 
                              value="<?php echo utf8_encode($datos['nombre_documento']); ?>"  > 
                      
                    </div>
                  </div>

                </div>
                
              </div>
              

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-10">
                    <button onclick="documentos_modalidad(<?php echo $datos['modalidad_documento'] ?>);" class="btn btn-danger"><b>Cancelar</b></button>
                    </div>     
                    <div class="col-md-2">
                      <button onclick="editar_info_documento(); return false;" class="btn btn-success"><b>Guardar</b></button>
                    </div>     
                  </div>     
                </div>     


          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>