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
              <h4 style="color:grey">LISTA DE MIS CONTRATOS</h4>
            </div>
          
          </div>
        </div>
      </div>


      <div class="card-body p-0">
        <div class="mailbox-controls">
          
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i onclick="seleccionar_check(); return false;" class="far fa-square"></i>
          </button>
          <div class="btn-group ">         
            <button title="Agregar Bitacora" data-toggle="modal" data-target="#modal_trazabilidad" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
          </div>

          <button title="Actualizar Lista de Contratos" onclick="cargar_contratos_contratista();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>

        </div>
      </div>



      <div id="div_tabla_contratos" class="card-body">

            <?php
              include("vistas/contratos/contratos/tabla_contratos_contratista.php");
            ?>
       
           
        </div>



      </div>
    </div>
  </div>
</div>





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
