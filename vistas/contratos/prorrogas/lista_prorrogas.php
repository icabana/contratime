<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Supervisor" 
            data-toggle="modal" 
            data-target="#modal_prorrogas_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nueva Prorroga</button>
            </div>


        </div>
    </div>
</div>


<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th style='background-color:lavender'>Meses de Prorroga</th>
            <th style='background-color:lavender'>D&iacute;as de Prorroga</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        foreach ($prorrogas as $prorroga) {

            echo "<tr>";

            echo "<td>".$prorroga['meses_prorroga'] . "</td>";

            echo "<td>".$prorroga['dias_prorroga'] . "</td>";

            echo "<td><a href='#'><i onclick='eliminar_prorroga_contrato(" . $prorroga['id_prorroga'] . ", " . $prorroga['contrato_prorroga'] . ");' 
                    class='fas fa-trash'></i></a></td>";

            echo "</tr>";
        }
    ?>
    </tbody>

</table>