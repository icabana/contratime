<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Evaluador" 
            data-toggle="modal" 
            data-target="#modal_evaluadores_editar" 
            type="button" 
            class="btn btn-success btn-sm">Asociar Evaluador</button>
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
            <th style='background-color:lavender; width:15px'></th>
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

        echo "<td><a href='#'><i onclick='eliminar_evaluador_contrato(" . $evaluador['id_evaluador'] . ", " . $evaluador['contrato_evaluador'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>