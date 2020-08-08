<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Lista de Pagos Asociados al Contrato</h5>
            </div>

        </div>
    </div>
</div>


<table id="tabla_pagos" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Tipo de Pago</th>
            <th style='background-color:lavender'>Fecha de Pago</th>
            <th style='background-color:lavender'>Valor del pago</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($pagos as $pago) {

            echo "<tr>";

            echo "<td>".utf8_encode($pago['nombre_tipopago']) . "</td>";

            echo "<td>".$pago['fecha_pago'] . "</td>";

            echo "<td>$".number_format($pago['valor_pago'], 0, ',', '.') . "</td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>