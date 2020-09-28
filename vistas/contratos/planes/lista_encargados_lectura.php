<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Encargados Asociados al Proceso/Contrato</h5>
            </div>

        </div>
    </div>
</div>

<table id="tabla_encargados" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th style='background-color:lavender'>Nombre del Encargado</th>
            <th style='background-color:lavender'>Correo</th>
            <th style='background-color:lavender'>Celular</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($encargados as $encargado) {

        echo "<tr>";

        echo "<td>".$encargado['codigo_tipodocumento']." ".$encargado['documento_encargado']."</td>";

        echo "<td>".utf8_encode($encargado['nombre_encargado']).
            " <img title='".$encargado['nombre_pais']."' src='imagenes/banderas/".
                $encargado['codigo3_pais'].".png'></td>";

        echo "<td>".$encargado['correo_encargado'] . "</td>";
        echo "<td>".$encargado['celular_encargado'] . "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>