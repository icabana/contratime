<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Supervisor" 
            data-toggle="modal" 
            data-target="#modal_pagos_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nuevo Pago</button>
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
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($pagos as $pago) {

            echo "<tr>";

            echo "<td>".utf8_encode($pago['nombre_tipopago']) . "</td>";

            echo "<td>".$pago['fecha_pago'] . "</td>";

            echo "<td>$".number_format($pago['valor_pago'], 0, ',', '.') . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_pago_contrato(" . $pago['id_pago'] . ", " . $pago['contrato_pago'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>