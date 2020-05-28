<form id="form_modalidades" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-2"></div>
        <div style="padding: 25px" class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Modalidad de Contrataci&oacute;n</h3>
            </div>

            <form role="form">

            <input type="hidden" class="form-control" id="id_modalidad" name="id_modalidad" 
                        value="<?php echo $datos['id_modalidad']; ?>">

              <div class="card-body">

                <div class="row">

                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <label>Nombre: <span style="color:red">*</span></label>
                      
                      <input type="text" class="form-control" id="nombre_modalidad" name="nombre_modalidad" 
                              value="<?php echo $datos['nombre_modalidad']; ?>"  > 
                      
                    </div>
                  </div>

                </div>
                
              </div>
              

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-10">
                      <button onclick="cargar_modalidades();" class="btn btn-danger"><b>Cancelar</b></button>
                    </div>     
                    <div class="col-md-2">
                      <button onclick="editar_info_modalidad(); return false;" class="btn btn-success"><b>Guardar</b></button>
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