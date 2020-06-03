<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_encargados");
        }
    );
</script>

<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Encargado" 
            data-toggle="modal" 
            data-target="#modal_encargados_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nuevo Encargado</button>
            </div>


        </div>
    </div>
</div>
<br>
<table id="tabla_encargados" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th style='background-color:lavender'>Nombre del Encargado</th>
            <th style='background-color:lavender'>Correo</th>
            <th style='background-color:lavender'>Celular</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($encargados as $encargado) {

        echo "<tr>";

        echo "<td>".$encargado['codigo_tipodocumento']." ".$encargado['documento_encargado']."</td>";

        echo "<td>".$encargado['nombre_encargado'].
            " <img title='".$encargado['nombre_pais']."' src='imagenes/banderas/".
                $encargado['codigo3_pais'].".png'></td>";

        echo "<td>".$encargado['correo_encargado'] . "</td>";
        echo "<td>".$encargado['celular_encargado'] . "</td>";

        echo "<td><a href='#'><i onclick='eliminar_encargado_contrato(" . $encargado['id_encargado'] . ", " . $encargado['contrato_encargado'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>