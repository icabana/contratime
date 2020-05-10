<table id="tabla_supervisores" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th style='background-color:lavender'>Nombre del Supervisor</th>
            <th style='background-color:lavender'>Correo</th>
            <th style='background-color:lavender'>Celular</th>
            <th style='background-color:lavender; width:15px'></th>
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

        echo "<td><a href='#'><i onclick='eliminar_supervisor_contrato(" . $supervisor['id_supervisor'] . ", " . $supervisor['contrato_supervisor'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>