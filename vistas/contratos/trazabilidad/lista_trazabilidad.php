<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_trazabilidad");
        }
    );
</script>

<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Supervisor" 
            data-toggle="modal" 
            data-target="#modal_trazabilidad_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nueva Bitacora</button>
            </div>


        </div>
    </div>
</div>


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