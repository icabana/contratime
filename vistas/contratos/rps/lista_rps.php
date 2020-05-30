<?php
    include("vistas/contratos/rps/comp_upload/modal.php");
?>

<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_rps");
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
            data-target="#modal_rps_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nuevo RP</button>
            </div>


        </div>
    </div>
</div>


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


<script language="JavaScript" type='text/javascript' src='vistas/contratos/rps/comp_upload/upload.js'></script> 