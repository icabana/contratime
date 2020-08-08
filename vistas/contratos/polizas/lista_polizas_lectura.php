<div class="card-header">
    <div class="box">
        <div class="row">

            <div class="col-md-12">
                <h5>Lista de Polizas Asociadas al Contrato</h5>
            </div>

        </div>
    </div>
</div>

<div id="div_tabla_polizas">
<table id="tabla_polizas" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender; width:40px'>Documento</th>
            <th style='background-color:lavender'>N&uacute;mero de la Poliza</th>
            <th style='background-color:lavender'>Fecha de Expedici&oacute;n</th>
            <th style='background-color:lavender'>Fecha de Inicio</th>
            <th style='background-color:lavender'>Fecha Final</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($polizas as $poliza) {

            echo "<tr>";
            
            include("vistas/contratos/polizas/comp_upload/icono.php");

            echo "<td><center> " . $documento_poliza . "</center></td>";            

            echo "<td>".utf8_encode($poliza['numero_poliza']) . "</td>";

            echo "<td>".$poliza['fechaexp_poliza'] . "</td>";

            echo "<td>".$poliza['fechainicio_poliza'] . "</td>";

            echo "<td>".$poliza['fechafinal_poliza'] . "</td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>
</div>

<script language="JavaScript" type='text/javascript' src='vistas/contratos/polizas/comp_upload/upload.js'></script> 