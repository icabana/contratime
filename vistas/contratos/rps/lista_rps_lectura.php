<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Lista de Rps Asociados al Contrato</h5>
            </div>

        </div>
    </div>
</div>


<div id="div_tabla_rps">
<table id="tabla_rps" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>No. de RP</th>
            <th style='background-color:lavender'>Fecha del RP</th>
            <th style='background-color:lavender'>Valor del RP</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($rps as $rp) {

        echo "<tr>";
        
        include("vistas/contratos/rps/comp_upload/icono_lectura.php");

        echo "<td><center> " . $documento_rp . "</center></td>";

        echo "<td>".$rp['numero_rp'] . "</td>";

        echo "<td>".$rp['fecha_rp'] . "</td>";

        echo "<td>$".number_format($rp['valor_rp'], 0, ',', '.') . "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>
</div>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/rps/comp_upload/upload.js'></script> 