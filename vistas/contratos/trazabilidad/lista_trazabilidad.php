<table id="tabla_trazabilidad" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Fecha Trazabilidad</th>
            <th style='background-color:lavender'>Documento Usuario</th>
            <th style='background-color:lavender'>Acci&oacute;n realizada</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php

    foreach ($trazabilidad as $traza) {

        echo "<tr>";

        echo "<td>".$traza['fecha_trazabilidad']."</td>";

        echo "<td>".$traza['documento_usuario']."</td>";

        echo "<td>".$traza['accion_trazabilidad'] . "</td>";
        
        echo "<td><a href='#'><i onclick='eliminar_trazabilidad_contrato(" . $traza['id_trazabilidad'] . ", " . $traza['contrato_trazabilidad'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>