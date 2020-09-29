<?php
    include("vistas/contratos/contratos/comp_upload/modal.php");
?>


<?php
$froms = new Formularios();
?>

<script>

    $( document ).ready(function() {
      $('#modalidad_reporte').prepend("<option value='0' selected >Todos</option>");
      $('#tipocontrato_reporte').prepend("<option value='0' selected >Todos</option>");
      $('#estado_reporte').prepend("<option value='0' selected >Todos</option>");
    });

</script>



<div class="row">

  <div style="padding:25px" class="box-body table-responsive no-padding">

    <div class="card">



      <div class="card-header">
        <div class="box">
          <div class="row">


            <div class="col-md-5">
              <h4 style="color:grey">GENERAR REPORTE DE CONTRATOS</h4>
            </div>
            <div class="col-md-6">
            
            </div>
            <div class="col-md-1">
            <button onclick="generar_reporte_pdf_contratos(); return false;" type="button" title="Descargar PDF" class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
              <button onclick="generar_reporte_excel_contratos(); return false;" type="button" title="Descargar EXCEL" class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
            </div>


          </div>
        </div>
      </div>


      
      <div class="card-header">
        <div class="box">
          <div class="row">
          
            <div class="col-md-3">
              <label>Modalidad de Contrataci&oacute;n<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $modalidades,
                'nombre_modalidad',
                'id_modalidad',
                'modalidad_reporte',
                '',
                '',
                'cargar_vista_reporte_contratos();'
              );

              ?>
            </div>

            <div class="col-md-3">
              <label>Tipo de Contrato<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $tiposcontrato,
                'nombre_tipocontrato',
                'id_tipocontrato',
                'tipocontrato_reporte',
                '',
                '',
                'cargar_vista_reporte_contratos();'
              );

              ?>
            </div>

            
            <div class="col-md-3">
              <label>Estado<span style="color:red">*</span></label>

              <?php

              echo $froms->Lista_Desplegable(
                $estados,
                'nombre_estado',
                'id_estado',
                'estado_reporte',
                '',
                '',
                'cargar_vista_reporte_contratos();'
              );

              ?>
            </div>


          </div>
        </div>
      </div>




      <div id="div_tabla_contratos_reportes" class="card-body">

            <?php
              include("vistas/contratos/contratos/tabla_reporte_contratos.php");
            ?>      
           
        </div>



      </div>
    </div>
  </div>
</div>

