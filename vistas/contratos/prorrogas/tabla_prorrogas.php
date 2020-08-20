<table id="tabla_prorrogas" class="table table-bordered table-hover">

    <thead>
        <tr>            
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>Fecha de Registro</th>
            <th style='background-color:lavender'>D&iacute;as de Prorroga</th>
            <th style='background-color:lavender'>Nueva Fecha Final del Contrato</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    
    <tbody>
    <?php

        $fechas = new Fechas();

        $dias = 0;

        foreach ($prorrogas as $prorroga) {

            $fecha_final = $prorroga['fechafinal_contrato'];

            $dias += $prorroga['dias_prorroga'];

            $nueva_fecha = $fechas->sumardias2($fecha_final, $dias);

            echo "<tr>";
            
            include("vistas/contratos/prorrogas/comp_upload/icono.php");

            echo "<td><center> " . $documento_prorroga . "</center></td>";

            echo "<td>".$prorroga['fecha_prorroga'] . "</td>";

            echo "<td>".$prorroga['dias_prorroga'] . "</td>";

            echo "<td>". $nueva_fecha . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_prorroga_contrato(" . $prorroga['id_prorroga'] . ", " . $prorroga['contrato_prorroga'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>