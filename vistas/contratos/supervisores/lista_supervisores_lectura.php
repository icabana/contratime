<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Supervisores Asociados al Proceso/Contrato</h5>
            </div>

        </div>
    </div>
</div>

<table id="tabla_supervisores" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th style='background-color:lavender'>Nombre del Supervisor</th>
            <th style='background-color:lavender'>Correo</th>
            <th style='background-color:lavender'>Celular</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($supervisores as $supervisor) {

        echo "<tr>";

        echo "<td>".$supervisor['codigo_tipodocumento']." ".$supervisor['documento_supervisor']."</td>";

        echo "<td>".$supervisor['nombre_supervisor'].
            " <img title='".$supervisor['nombre_pais']."' src='imagenes/banderas/".
                $supervisor['codigo3_pais'].".png'></td>";

        echo "<td>".$supervisor['correo_supervisor'] . "</td>";
        echo "<td>".$supervisor['celular_supervisor'] . "</td>";


        echo "</tr>";
    }
    ?>
    </tbody>

</table>