<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Trazabilidad Asociada al Proceso/Contrato</h5>
            </div>

        </div>
    </div>
</div>

<table id="tabla_trazabilidad" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Fecha Trazabilidad</th>
            <th style='background-color:lavender'>Documento Usuario</th>
            <th style='background-color:lavender'>Acci&oacute;n realizada</th>
        </tr>
    </thead>
    <tbody>
    <?php

    foreach ($trazabilidad as $traza) {

        echo "<tr>";

        echo "<td>".$traza['fecha_trazabilidad']."</td>";

        echo "<td>".$traza['documento_usuario']."</td>";

        echo "<td>".utf8_encode($traza['accion_trazabilidad']). "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>