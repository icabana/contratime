<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary" style="font-size:0.8rem">
      <div class="card-header">
        <h3 class="card-title">Editar Informaci&oacute;n del Detalle del Plan </h3>
      </div>

      <form autocomplete="on" id="form_detalles" method="post">

        <div class="card-body">
          <div class="row">

            <div class="col-md-4">

              <label>Códigos UNSPSC<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="codigos_detalle" name="codigos_detalle"
              >

            </div>

            <div class="col-md-4">

              <label>Fecha Estimada de Inicio de proceso de Selecci&oacute;n<span style="color:red">*</span></label>
              <select class="form-control requerido" id="fechainicio_detalle" name="fechainicio_detalle">
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
              </select>

            </div>


            <div class="col-md-4">

              <label>Duración Estimada del Contrato (Meses)<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="meses_detalle" name="meses_detalle" onkeypress="return no_numeros(event)" value="<?php echo $numproceso_detalle; ?>">

            </div>



          </div>


          <br>


          <div class="row">

            <div class="col-md-4">
              <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $modalidades,
                'nombre_modalidad',
                'id_modalidad',
                'modalidad_detalle',
                '',
                '',
                ''
              );

              ?>
            </div>

            <div class="col-md-8">
              <label>Fuente de los Recursos<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $fuentes,
                'nombre_fuente',
                'id_fuente',
                'fuente_detalle',
                '',
                '',
                ''
              );

              ?>
            </div>




          </div>

          <br>


          <div class="row">

            <div class="col-md-2">
              <label>¿Vigencias Futuras?<span style="color:red">*</span></label>

              <select class="form-control requerido" id="futuras_detalle" name="futuras_detalle">
                <option value="SI">SI</option>
                <option value="NO">NO</option>
              </select>
            </div>

            <div class="col-md-2">
              <label>Estado Vigencias Futuras<span style="color:red">*</span></label>

              <select class="form-control requerido" id="estadofuturas_detalle" name="estadofuturas_detalle">
                <option value="N/A">N/A</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Aceptada">Aceptada</option>
              </select>
            </div>
            <div class="col-md-2">

              <label>Valor Total Estimado<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valtotal_detalle" name="valtotal_detalle" onkeypress="return no_numeros(event)" value="<?php echo $numproceso_detalle; ?>">

            </div>
            <div class="col-md-2">

              <label>Valor Vigencia Actual<span style="color:red">*</span></label>
              <input type="text" class="form-control requerido" id="valactual_detalle" name="valactual_detalle" onkeypress="return no_numeros(event)" value="<?php echo $numproceso_detalle; ?>">

            </div>

            <div class="col-md-4">
              <label>Datos de Contacto del Responsable<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $encargados,
                'nombre_encargado',
                'id_encargado',
                'contacto_detalle',
                '',
                '',
                ''
              );

              ?>
            </div>

          </div>

          <br>

          <div class="row">

            <div class="col-md-12">
              <label>Descripción<span style="color:red">*</span></label>
              <textarea class="form-control requerido" rows="3" id="descripcion_detalle" name="descripcion_detalle"></textarea>
            </div>

          </div>


        </div>


        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_detalles();" class="btn btn-danger">Cancelar</button>
            </div>
            <div class="col-md-3">
              <button onclick="insertar_detalle(); return false;" class="btn btn-success">Guardar</button>
            </div>
          </div>
        </div>


      </form>

    </div>
  </div>