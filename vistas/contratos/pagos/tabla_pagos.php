<div id="div_tabla_pagos">
<table id="tabla_pagos" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Tipo de Pago</th>
            <th style='background-color:lavender'>Fecha de Pago</th>
            <th style='background-color:lavender'>Valor del pago</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($pagos as $pago) {

            echo "<tr>";

            echo "<td>".$pago['nombre_tipopago'] . "</td>";

            echo "<td>".$pago['fecha_pago'] . "</td>";

            echo "<td>$".number_format($pago['valor_pago'], 0, ',', '.') . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_pago_contrato(" . $pago['id_pago'] . ", " . $pago['contrato_pago'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>
</div>