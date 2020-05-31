<?php
    include("vistas/contratos/ajustes/comp_upload/modal.php");
?>

<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_ajustes");
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
            data-target="#modal_ajustes_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nuevo Ajuste</button>
            </div>


        </div>
    </div>
</div>

<br>
<table id="tabla_ajustes" class="table table-bordered table-hover">

    <thead>
        <tr>
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>Tipo de Ajuste</th>
            <th style='background-color:lavender'>Fecha en que se realiz&oacute; Ajuste</th>
            <th style='background-color:lavender'>Valor del Ajuste</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>

    <tbody>
    <?php
        foreach ($ajustes as $ajuste) {

            echo "<tr>";

            include("vistas/contratos/ajustes/comp_upload/icono.php");

            echo "<td><center> " . $documento_ajuste . "</center></td>";

            echo "<td>".$ajuste['nombre_tipoajuste'] . "</td>";

            echo "<td>".$ajuste['fecha_ajuste'] . "</td>";

            echo "<td>$".number_format($ajuste['valor_ajuste'], 0, ',', '.') . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_ajuste_contrato(" . $ajuste['id_ajuste'] . ", " . $ajuste['contrato_ajuste'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/ajustes/comp_upload/upload.js'></script> 