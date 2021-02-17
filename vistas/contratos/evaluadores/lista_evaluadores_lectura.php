<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Evaluadores Asociados al Proceso/Contrato</h5>
            </div>

        </div>
    </div>
</div>

<table id="tabla_evaluadores" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th style='background-color:lavender'>Nombre del Evaluador</th>
            <th style='background-color:lavender'>Correo</th>
            <th style='background-color:lavender'>Celular</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($evaluadores as $evaluador) {

        echo "<tr>";

        echo "<td>".$evaluador['codigo_tipodocumento']." ".$evaluador['documento_evaluador']."</td>";

        echo "<td>".utf8_encode($evaluador['nombre_evaluador']).
            " <img title='".$evaluador['nombre_pais']."' src='imagenes/banderas/".
                $evaluador['codigo3_pais'].".png'></td>";

        echo "<td>".$evaluador['correo_evaluador'] . "</td>";
        echo "<td>".$evaluador['celular_evaluador'] . "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>