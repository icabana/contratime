<script>

function ismael(id_cdp){
   $("#id_cdp").val(id_cdp);
}

function upload_cdps(){//Funcion encargada de enviar el archivo via AJAX

$(".upload-msg").text('Cargando...');
    var inputFileImage = document.getElementById("fileToUploadCdps");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadCdps',file);
    
    data.append('id_cdp', $("#id_cdp").val());
    
    console.log(data);
          
    $.ajax({
      url: "libs/uploads/upload_cdps.php",        // Url to which the request is send
      type: "POST",             // Type of request to be send, called as method
      data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData:false,        // To send DOMDocument or non processed data file it is set to false
      success: function(data)   // A function to be called if request succeeds
      {
        $(".upload-msg").html(data);
        actualizar_documentos_entrante();
        $('#exampleModal4_editar_entrante').modal('hide');
      $('#fileToUploadCdps').val('');
        window.setTimeout(function() {
        $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
        });	}, 2000);
      }
    });
    
  }

  

  function eliminar_documento_cdp(archivo_cdp) {

    var opcion = confirm("¿Está seguro de eliminar este archivo?");
    if (opcion != true) return 0;

    ejecutarAccion(
      'contratos',
      'Cdps',
      'eliminarDocumento',
      'archivo_cdp=' + archivo_cdp+'&id_contrato=' + $("#id_contrato").val(),
      '$("#tab_4_cdps").html(data);  mensaje_alertas("success", "Documento Eliminado Correctamente", "center");'

);
  }


</script>

<?php
$froms = new Formularios();
?>

<form autocomplete="on" id="formContratos" method="post">

  <input type="hidden" id="id_contrato" name="id_contrato" value="<?php echo $contrato['id_contrato']; ?>">

  <div class="box box-default">

    <div style="padding: 25px" class="box-body">

      <div class="card card-primary">


        <div class="card-header">
          <h3 class="card-title">Editar Contrato (Estado: Convocado)</h3>
        </div>



        <div class="card-body">

          <!--TITULOS DE LOS TAB-->
          <ul class="nav nav-pills ml-auto p-2">

            <li class="nav-item">
              <a class="nav-link active" href="#tab_1" data-toggle="tab">
                Proceso
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_2_supervisores" data-toggle="tab">
                Supervisores
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_4_cdps" data-toggle="tab">
                Cdps
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_5_rps" data-toggle="tab">
                Rps
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_6_pagos" data-toggle="tab">
                Pagos
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_7_ajustes" data-toggle="tab">
                Ajustes 
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#tab_8_prorrogas" data-toggle="tab">
                Prorrogas
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tab_3_trazabilidad" data-toggle="tab">
                Trazabilidad
              </a>
            </li>

          </ul>

          <!--INICIO DE LAS TABS-->
          <div class="tab-content">


            <div style="padding: 20px; height:350px" class="tab-pane active" id="tab_1">


              <div class="row">

                <div class="col-md-3">

                  <label>No. de Proceso<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="numproceso_contrato" name="numproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['numproceso_contrato']; ?>">

                </div>


                <div class="col-md-3">

                  <label>Valor del Proceso<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="valproceso_contrato" name="valproceso_contrato" onkeypress="return no_numeros(event)" value="<?php echo $contrato['valproceso_contrato']; ?>">

                </div>

                <div class="col-md-3">

                  <label>Fecha de Adjudicaci&oacute;n<span style="color:red">*</span></label>
                  <input type="date" class="form-control requerido" id="fadjudicacionproceso_contrato" name="fadjudicacionproceso_contrato" value="<?php echo $contrato['fadjudicacionproceso_contrato']; ?>">

                </div>


                <div class="col-md-3">

                  <label>Fecha de Cierre<span style="color:red">*</span></label>
                  <input type="date" class="form-control requerido" id="fcierreproceso_contrato" name="fcierreproceso_contrato" value="<?php echo $contrato['fcierreproceso_contrato']; ?>">

                </div>




              </div>

              <br>

              <div class="row">

                <div class="col-md-6">
                  <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

                  <?php

                  echo $froms->Lista_Desplegable(
                    $modalidades,
                    'nombre_modalidad',
                    'id_modalidad',
                    'modalidad_contrato',
                    $contrato['modalidad_contrato'],
                    '',
                    ''
                  );

                  ?>
                </div>


                <div class="col-md-6">
                  <label>Tipo de Contrataci&oacute;n <span style="color:red">*</span></label>

                  <?php
                  echo $froms->Lista_Desplegable(
                    $tiposcontrato,
                    'nombre_tipocontrato',
                    'id_tipocontrato',
                    'tipo_contrato',
                    $contrato['tipo_contrato'],
                    '',
                    ''
                  );
                  ?>
                </div>


              </div>


              <br>


              <div class="row">

                <div class="col-md-12">
                  <label>Objeto del Contrato<span style="color:red">*</span></label>
                  <textarea class="form-control requerido" rows="3" id="objeto_contrato" name="objeto_contrato"><?php echo $contrato['objeto_contrato']; ?></textarea>
                </div>

              </div>


            </div>


            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_2_supervisores">

              <?php
              include("vistas/contratos/supervisores/lista_supervisores.php");
              ?>
            </div>

            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_4_cdps">

              <?php
              include("vistas/contratos/cdps/lista_cdps.php");
              ?>
            </div>

            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_5_rps">

              <?php
              include("vistas/contratos/rps/lista_rps.php");
              ?>
            </div>

            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_6_pagos">

              <?php
              include("vistas/contratos/pagos/lista_pagos.php");
              ?>

            </div>

            
            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_7_ajustes">

              <?php
              include("vistas/contratos/ajustes/lista_ajustes.php");
              ?>

            </div>

            
            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_8_prorrogas">

              <?php
              include("vistas/contratos/prorrogas/lista_prorrogas.php");
              ?>

            </div>



            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_3_trazabilidad">

              <?php
              include("vistas/contratos/trazabilidad/lista_trazabilidad.php");
              ?>
            </div>

          </div>



          <div class="card-footer">
            <div class="row">
              <div class="col-md-9">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="cargar_contratos();" class="btn btn-danger">Cancelar</button>
              </div>
              <div class="col-md-3">
                <button onclick="editar_contrato(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>

</form>




<!-- Modal Supervisores-->
<?php
  include("vistas/contratos/supervisores/modal_supervisores_editar.php");
?>

<!-- Modal Trazabilidad-->
<?php
  include("vistas/contratos/trazabilidad/modal_trazabilidad_editar.php");
?>

<!-- Modal Cdps-->
<?php
  include("vistas/contratos/cdps/modal_cdps_editar.php");
?>

<!-- Modal Documentos Cdps-->
<?php
  include("vistas/contratos/cdps/modal_documentos.php");
?>

<!-- Modal Rps-->
<?php
  include("vistas/contratos/rps/modal_rps_editar.php");
?>

<!-- Modal Pagos-->
<?php
  include("vistas/contratos/pagos/modal_pagos_editar.php");
?>

<!-- Modal Ajustes de Presupuesto-->
<?php
  include("vistas/contratos/ajustes/modal_ajustes_editar.php");
?>

<!-- Modal Prorrogas-->
<?php
  include("vistas/contratos/prorrogas/modal_prorrogas_editar.php");
?>