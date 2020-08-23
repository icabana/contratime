<form id="form_detalles" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-2"></div>
        <div style="padding: 25px" class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Detalle de Contrataci&oacute;n</h3>
            </div>

            <form role="form">

            <input type="hidden" class="form-control" id="id_detalle" name="id_detalle" 
                        value="<?php echo utf8_encode($datos['id_detalle']); ?>">

              <div class="card-body">

                <div class="row">

                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label>Vigencia: <span style="color:red">*</span></label>
                      
                      <select name="ano_detalle" id="ano_detalle" class="form-control">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                      </select>
                      
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label>Valor Total: <span style="color:red">*</span></label>
                      
                      <input type="text" class="form-control input_dinero" id="valor_detalle" name="valor_detalle" 
                              value="<?php echo $datos['valor_detalle']; ?>"  > 
                      
                    </div>
                  </div>

                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <label>Nombre del Contacto: <span style="color:red">*</span></label>
                      
                      <input type="text" class="form-control" id="contacto_detalle" name="contacto_detalle" 
                              value="<?php echo utf8_encode($datos['contacto_detalle']); ?>"  > 
                      
                    </div>
                  </div>


                </div>
                
              </div>
              

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-10">
                      <button onclick="cargar_detalles();" class="btn btn-danger"><b>Cancelar</b></button>
                    </div>     
                    <div class="col-md-2">
                      <button onclick="editar_info_detalle(); return false;" class="btn btn-success"><b>Guardar</b></button>
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