<?php
    include("vistas/contratos/contratos/comp_upload/modal.php");
?>


<?php
$froms = new Formularios();
?>


<div class="row">

  <div style="padding:25px" class="box-body table-responsive no-padding">

    <div class="card">



      <div class="card-header">
        <div class="box">
          <div class="row">


            <div class="col-md-5">
              <h4 style="color:grey">GESTIONAR CONTRATOS</h4>
            </div>
            <div class="col-md-5">
              <button onclick="generar_pdf_contratos(); return false;" type="button" title="Descargar PDF" class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
              <button onclick="generar_excel_contratos(); return false;" type="button" title="Descargar EXCEL" class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
            </div>
            <div class="col-md-2">
              <button onclick="nuevo_contrato(); return false;" class="btn btn-success btn-sm">
                Nuevo contrato
              </button>
            </div>


          </div>
        </div>
      </div>


      <div class="card-body p-0">
        <div class="mailbox-controls">
          
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i onclick="seleccionar_check(); return false;" class="far fa-square"></i>
          </button>
          <div class="btn-group ">
            <?php
            if ($_SESSION['rol'] == '1') {
            ?>
              <button title="Eliminar Radicado" onclick="eliminar_contrato();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
            <?php
            }
            ?>

            <div id="acciones_contratos">
              <button title="Agregar Supervisor" data-toggle="modal" data-target="#modal_supervisores" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
              <button title="Agregar Bitacora" data-toggle="modal" data-target="#modal_trazabilidad" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
              <button title="Agregar CDP" data-toggle="modal" data-target="#modal_cdps" type="button" class="btn btn-default btn-sm"><i class="fas fa-money-bill"></i></button>
              <button title="Agregar RP" data-toggle="modal" data-target="#modal_rps" type="button" class="btn btn-default btn-sm"><i class="fas fa-cash-register"></i></button>
              <button title="Agregar Pago" data-toggle="modal" data-target="#modal_pagos" type="button" class="btn btn-default btn-sm"><i class="fas fa-comment-dollar"></i></button>
              <button title="Agregar Poliza" data-toggle="modal" data-target="#modal_polizas" type="button" class="btn btn-default btn-sm"><i class="fas fa-file"></i></button>
              <button title="Ajustar Presupuesto" data-toggle="modal" data-target="#modal_ajustes" type="button" class="btn btn-default btn-sm"><i class="fas fa-coins"></i></button>
              <button title="Agregar Prorroga" data-toggle="modal" data-target="#modal_prorrogas" type="button" class="btn btn-default btn-sm"><i class="fas fa-calendar-plus"></i></button>
            </div>
            <div id="acciones_procesos" style="display: none;">
              <button title="Agregar Encargado" data-toggle="modal" data-target="#modal_encargados" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
              <button title="Agregar Bitacora" data-toggle="modal" data-target="#modal_trazabilidad" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>           
            </div>

          </div>

          <button title="Actualizar Lista de Radicados" onclick="cargar_contratos();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>

        </div>
      </div>



      <div id="div_tabla_contratos" class="card-body">

            <?php
              include("vistas/contratos/contratos/tabla_contratos.php");
            ?>
       
           
        </div>



      </div>
    </div>
  </div>
</div>


<!-- Modal Celebrar-->
<?php
  include("vistas/contratos/contratos/modales/modal_celebrar.php");
?>


<!-- Modal Adjudicar-->
<?php
  include("vistas/contratos/contratos/modales/modal_adjudicar.php");
?>


<!-- Modal Supervisores-->
<?php
  include("vistas/contratos/supervisores/modal_supervisores.php");
?>


<!-- Modal Supervisores-->
<?php
  include("vistas/contratos/encargados/modal_encargados.php");
?>

<!-- Modal Trazabilidad-->
<?php
  include("vistas/contratos/trazabilidad/modal_trazabilidad.php");
?>

<!-- Modal Cdps-->
<?php
  include("vistas/contratos/cdps/modal_cdps.php");
?>

<!-- Modal Rps-->
<?php
  include("vistas/contratos/rps/modal_rps.php");
?>

<!-- Modal Pagos-->
<?php
  include("vistas/contratos/pagos/modal_pagos.php");
?>

<!-- Modal Polizas-->
<?php
  include("vistas/contratos/polizas/modal_polizas.php");
?>

<!-- Modal Ajustes de Presupuesto-->
<?php
  include("vistas/contratos/ajustes/modal_ajustes.php");
?>

<!-- Modal Prorrogas-->
<?php
  include("vistas/contratos/prorrogas/modal_prorrogas.php");
  include("vistas/contratos/prorrogas/modal_prorrogas.php");
?>


<script language="JavaScript" type='text/javascript' src='vistas/contratos/contratos/comp_upload/upload.js'></script> 