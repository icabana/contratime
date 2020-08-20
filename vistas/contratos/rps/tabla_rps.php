<table id="tabla_rps" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>No. de RP</th>
            <th style='background-color:lavender'>Fecha del RP</th>
            <th style='background-color:lavender'>Valor del RP</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($rps as $rp) {

        echo "<tr>";
        
        include("vistas/contratos/rps/comp_upload/icono.php");

        echo "<td><center> " . $documento_rp . "</center></td>";

        echo "<td>".$rp['numero_rp'] . "</td>";

        echo "<td>".$rp['fecha_rp'] . "</td>";

        echo "<td>$".number_format($rp['valor_rp'], 0, ',', '.') . "</td>";

        echo "<td><a href='#'><i onclick='eliminar_rp_contrato(" . $rp['id_rp'] . ", " . $rp['contrato_rp'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>