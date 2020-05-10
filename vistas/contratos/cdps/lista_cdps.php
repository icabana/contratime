<table id="tabla_supervisores" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>No. de CDP</th>
            <th style='background-color:lavender'>Fecha del CDP</th>
            <th style='background-color:lavender'>Valor del Cdp</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cdps as $cdp) {

        echo "<tr>";

        echo "<td>".$cdp['numero_cdp'] . "</td>";

        echo "<td>".$cdp['fecha_cdp'] . "</td>";

        echo "<td>$".number_format($cdp['valor_cdp'], 0, ',', '.') . "</td>";

        echo "<td><a href='#'><i onclick='eliminar_cdp_contrato(" . $cdp['id_cdp'] . ", " . $cdp['contrato_cdp'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>