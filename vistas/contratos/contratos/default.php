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
            <button title="Agregar Supervisor" data-toggle="modal" data-target="#modal_supervisores" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
            <button title="Agregar Bitacora" data-toggle="modal" data-target="#modal_trazabilidad" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
            <button title="Agregar CDP" data-toggle="modal" data-target="#modal_cdps" type="button" class="btn btn-default btn-sm"><i class="fas fa-money-bill"></i></button>
          </div>

          <button title="Actualizar Lista de Radicados" onclick="cargar_contratos();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>

        </div>
      </div>



      <div class="card-body">


        <div class="table-responsive mailbox-messages">
          <table id="tabla_contratos" class="table table-hover table-striped">
            <thead>
              <tr>
                <th style='background-color:lavender'></th>
                <th style='background-color:lavender'>No. del Proceso</th>
                <th style='background-color:lavender'>No. de Contrato</th>
                <th style='background-color:lavender'>Tipo de Contrato</th>
                <th style='background-color:lavender'>Contratista</th>
                <th style='background-color:lavender'>Valor Proceso</th>
                <th style='background-color:lavender'>Valor Contrato</th>
                <th style='background-color:lavender'>Objeto</th>
                <th style='background-color:lavender'>Estado</th>
                <th colspan='2' style='background-color:lavender; width:15px'></th>
              </tr>
            </thead>
            <tbody>

              <?php

              foreach ($contratos as $contrato) {


                $id_check = "check" . $contrato['id_contrato'];

              ?>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input class="check" name="check_contratos" type="checkbox" value="<?php echo $contrato['id_contrato']; ?>" id="check<?php echo $id_check; ?>">
                      <label for="check<?php echo $id_check; ?>"></label>
                    </div>
                  </td>

                  <td class="mailbox-star">

                    <?php echo $contrato['numproceso_contrato'] ?>

                  </td>

                  <td class="mailbox-name">

                    <?php echo $contrato['numero_contrato']; ?>

                  </td>
                  <td class="mailbox-name">

                    <?php echo utf8_encode($contrato['nombre_tipocontrato']); ?>

                  </td>
                  <td class="mailbox-name">

                    <?php echo $contrato['nombre_contratista'] .
                      " <img title='" . $contrato['nombre_pais'] . "' src='imagenes/banderas/" .
                      $contrato['codigo3_pais'] . ".png'>"; ?>

                  </td>
                  <td class="mailbox-name">

                    <?php
                    echo "$" . number_format($contrato['valproceso_contrato'], 0, ',', '.') . "";
                    ?>

                  </td>
                  <td class="mailbox-name">

                    <?php
                    echo "$" . number_format($contrato['valor_contrato'], 0, ',', '.') . "";
                    ?>

                  </td>

                  <td class="mailbox-subject">
                    <?php echo substr($contrato['objeto_contrato'], 0, 35) . "..."; ?>
                  </td>

                  <td class="mailbox-subject">
                    <?php echo $contrato['nombre_estado']; ?>

                  </td>

                  <?php
                  echo "<td><a href='#' title='Editar Contrato'><i onclick='editar_contrato_convocado(" . $contrato['id_contrato'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                  echo "<td><a href='#' title='Editar Contrato'><i onclick='eliminar_contrato(" . $contrato['id_contrato'] . ");' 
                                    class='fas fa-trash'></i></a></td>";



                  ?>

                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>



      </div>
    </div>
  </div>
</div>




<!-- Modal Supervisores-->
<?php
  include("vistas/contratos/supervisores/modal_supervisores.php");
?>

<!-- Modal Trazabilidad-->
<?php
  include("vistas/contratos/trazabilidad/modal_trazabilidad.php");
?>

<!-- Modal Cdps-->
<?php
  include("vistas/contratos/cdps/modal_cdps.php");
?>