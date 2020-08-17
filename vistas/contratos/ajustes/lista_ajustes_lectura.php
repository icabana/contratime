<?php
    include("vistas/contratos/ajustes/comp_upload/modal.php");
?>

<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Lista de Ajustes Asociados al Contrato</h5>
            </div>


        </div>
    </div>
</div>

<table id="tabla_ajustes" class="table table-bordered table-hover">

    <thead>
        <tr>
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>Tipo de Ajuste</th>
            <th style='background-color:lavender'>Fecha en que se realiz&oacute; Ajuste</th>
            <th style='background-color:lavender'>Valor del Ajuste</th>
        </tr>
    </thead>

    <tbody>
    <?php
        foreach ($ajustes as $ajuste) {

            echo "<tr>";

            include("vistas/contratos/ajustes/comp_upload/icono_lectura.php");

            echo "<td><center> " . $documento_ajuste . "</center></td>";

            echo "<td>".$ajuste['nombre_tipoajuste'] . "</td>";

            echo "<td>".$ajuste['fecha_ajuste'] . "</td>";

            echo "<td>$".number_format($ajuste['valor_ajuste'], 0, ',', '.') . "</td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/ajustes/comp_upload/upload.js'></script> 