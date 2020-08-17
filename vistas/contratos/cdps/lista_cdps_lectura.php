<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Lista de Cdps Asociados al Proceso/Contrato</h5>
            </div>

        </div>
    </div>
</div>

<div id="div_tabla_cdps">
<table id="tabla_cdp" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender; width:40px'>Documento</th>
            <th width='30%' style='background-color:lavender'>No. de CDP</th>
            <th width='30%' style='background-color:lavender'>Fecha del CDP</th>
            <th width='30%' style='background-color:lavender'>Valor del Cdp</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cdps as $cdp) {

            $id_cdp = $cdp['id_cdp'];

            echo "<tr  id='fila_cdp_".$id_cdp."'>";

            include("vistas/contratos/cdps/comp_upload/icono_lectura.php");

            echo "<td><center> " . $documento_cdp . "</center></td>";

            echo "<td>" . $cdp['numero_cdp'] . "</td>";

            echo "<td>" . $cdp['fecha_cdp'] . "</td>";

            echo "<td>$" . number_format($cdp['valor_cdp'], 0, ',', '.') . "</td>";


            echo "</tr>";
        }
        ?>
    </tbody>

</table>
</div>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/cdps/comp_upload/upload.js'></script> 