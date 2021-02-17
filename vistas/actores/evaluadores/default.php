<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">



            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR EVALUADORES</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_evaluadores(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_evaluadores(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_evaluador(); return false;" class="btn btn-success btn-sm">
                                Nuevo Evaluador
                            </button>
                        </div>


                    </div>
                </div>
            </div>


            
            <div class="card-body">
                <table id="tabla_evaluadores" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Nombre del Evaluador</th>
                            <th style='background-color:lavender'>Correo</th>
                            <th style='background-color:lavender'>Celular</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <?php
                            if($_SESSION['rol'] == 1){
                            ?>
                            <th style='background-color:lavender; width:15px'></th>
                            <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($evaluadores as $evaluador) {

                        echo "<tr>";

                        echo "<td>".$evaluador['codigo_tipodocumento']." ".$evaluador['documento_evaluador']."</td>";

                        echo "<td>".strtoupper(utf8_encode($evaluador['nombre_evaluador'])).
                            " <img title='".$evaluador['nombre_pais']."' src='imagenes/banderas/".
                                $evaluador['codigo3_pais'].".png'></td>";

                                
                        echo "<td>".$evaluador['correo_evaluador'] . "</td>";

                        echo "<td>".$evaluador['celular_evaluador'] . "</td>";
                   

                        echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_evaluador(" . $evaluador['id_evaluador'] . ");'><i 
                                class='fas fa-edit'></i></a></td>";

                        if($_SESSION['rol'] == 1){
                        echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_evaluador(" . $evaluador['id_evaluador'] . ");'><i 
                                class='fas fa-trash'></i></a></td>";
                        }

                        echo "</tr>";
                    }
                    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>