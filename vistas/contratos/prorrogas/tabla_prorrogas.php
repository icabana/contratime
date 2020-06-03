
<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_prorrogas");
        }
    );
</script>

<table id="tabla_prorrogas" class="table table-bordered table-hover">

    <thead>
        <tr>            
            <th style='background-color:lavender; width:15px'>Documento</th>
            <th style='background-color:lavender'>Meses de Prorroga</th>
            <th style='background-color:lavender'>D&iacute;as de Prorroga</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        foreach ($prorrogas as $prorroga) {

            echo "<tr>";
            
            include("vistas/contratos/prorrogas/comp_upload/icono.php");

            echo "<td><center> " . $documento_prorroga . "</center></td>";

            echo "<td>".$prorroga['meses_prorroga'] . "</td>";

            echo "<td>".$prorroga['dias_prorroga'] . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_prorroga_contrato(" . $prorroga['id_prorroga'] . ", " . $prorroga['contrato_prorroga'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>