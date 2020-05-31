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
                Datos Proceso
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

            <li class="nav-item">
              <a class="nav-link" href="#tab_10_documentos" data-toggle="tab">
                Documentos
              </a>
            </li>

          </ul>

          <!--INICIO DE LAS TABS-->
          <div class="tab-content">


            <div style="padding: 20px; height:450px" class="tab-pane active" id="tab_1">

            <?php
              include("vistas/contratos/contratos/form.php");
              ?>
            
          
            </div>


            <div style="padding: 20px" class="tab-pane" id="tab_2_supervisores">

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

            
            <div style="padding: 20px" class="tab-pane" id="tab_8_prorrogas">

              <?php
              include("vistas/contratos/prorrogas/lista_prorrogas.php");
              ?>

            </div>



            <div style="padding: 20px; height:350px" class="tab-pane" id="tab_3_trazabilidad">

              <?php
              include("vistas/contratos/trazabilidad/lista_trazabilidad.php");
              ?>
            </div>


                 
            <div style="padding: 20px; " class="tab-pane" id="tab_10_documentos">

              <?php
              
                  include("vistas/contratos/documentos/lista_documentos.php");

              ?>

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