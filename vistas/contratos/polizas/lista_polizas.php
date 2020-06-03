<?php
    include("vistas/contratos/polizas/comp_upload/modal.php");
?>

<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_polizas");
        }
    );
</script>

<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Poliza" 
            data-toggle="modal" 
            data-target="#modal_polizas_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nueva Poliza</button>
            </div>


        </div>
    </div>
</div>

<br>
<div id="div_tabla_polizas">
<table id="tabla_polizas" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender; width:40px'>Documento</th>
            <th style='background-color:lavender'>N&uacute;mero de la Poliza</th>
            <th style='background-color:lavender'>Fecha de Expedici&oacute;n</th>
            <th style='background-color:lavender'>Fecha de Inicio</th>
            <th style='background-color:lavender'>Fecha Final</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($polizas as $poliza) {

            echo "<tr>";
            
            include("vistas/contratos/polizas/comp_upload/icono.php");

            echo "<td><center> " . $documento_poliza . "</center></td>";            

            echo "<td>".$poliza['numero_poliza'] . "</td>";

            echo "<td>".$poliza['fechaexp_poliza'] . "</td>";

            echo "<td>".$poliza['fechainicio_poliza'] . "</td>";

            echo "<td>".$poliza['fechafinal_poliza'] . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_poliza_contrato(" . $poliza['id_poliza'] . ", " . $poliza['contrato_poliza'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>
</div>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/polizas/comp_upload/upload.js'></script> 