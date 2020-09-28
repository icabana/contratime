<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_detalles_contrato");
        }
    );
</script>


<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
          
            </div>


        </div>
    </div>
</div>

<br>

<table id="tabla_detalles_contrato" style="font-size: 13px;" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style='background-color:lavender; width:5px'>No.</th>
                <th style='background-color:lavender; width:10px'>C&oacute;digos</th>
                <th style='background-color:lavender; width:20px'>Descripci&oacute;n</th>
                <th style='background-color:lavender; width:10px'>Fecha Estimada Inicio de Proceso</th>
                <th style='background-color:lavender; width:10px'>Duraci&oacute;n Estimada del Proceso</th>
                <th style='background-color:lavender; width:15px'>Modalidad </th>
                <th style='background-color:lavender; width:15px'>Fuente de los Recursos</th>
                <th style='background-color:lavender; width:15px'>Valor Total Estimado</th>
                <th style='background-color:lavender; width:15px'>Valor Estimado Vigencia Actual</th>
                <th style='background-color:lavender; width:5px'><center>Seleccionar</center></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $cont = 1;

            foreach ($detalles as $detalle) {

                echo "<tr>";

                echo "<td>" . $cont . "</td>";
                echo "<td>" . utf8_encode($detalle['codigos_detalle']) . "</td>";
                echo "<td>" . utf8_encode($detalle['descripcion_detalle']) . "</td>";
                echo "<td>" . utf8_encode($detalle['fechainicio_detalle']) . "</td>";
                echo "<td>" . utf8_encode($detalle['meses_detalle']) . "</td>";
                echo "<td>" . utf8_encode($detalle['nombre_modalidad']) . "</td>";
                echo "<td>" . utf8_encode($detalle['nombre_fuente']) . "</td>";
                echo "<td>$" . number_format($detalle['valtotal_detalle'], 0, ',', '.') . "</td>";
                echo "<td>$" . number_format($detalle['valactual_detalle'], 0, ',', '.') . "</td>";
                
                if($contrato['plan_contrato'] == ""){
                    echo "<td><center><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='seleccionar_plan(" . $detalle['id_detalle'] . ");'><i title='Sseleccionar Plan' 
                    class='fas fa-check-circle'></i></a></center></td>";
                }else{
                    echo "<td><center><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'  onclick='deseleccionar_plan();'><i title='Eliminar Plan Asociado' 
                    class='fas fa-trash'></i></a></center></td>";
                }
                

                echo "</tr>";

                $cont++;

            }
            ?>
        </tbody>

    </table>