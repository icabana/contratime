<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">



            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR ENCARGADOS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_encargados(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_encargados(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_encargado(); return false;" class="btn btn-success btn-sm">
                                Nuevo Encargado
                            </button>
                        </div>


                    </div>
                </div>
            </div>


            
            <div class="card-body">
                <table id="tabla_encargados" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Nombre del Encargado</th>
                            <th style='background-color:lavender'>Correo</th>
                            <th style='background-color:lavender'>Celular</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($encargados as $encargado) {

                        echo "<tr>";

                        echo "<td>".$encargado['codigo_tipodocumento']." ".$encargado['documento_encargado']."</td>";

                        echo "<td>".strtoupper(utf8_encode($encargado['nombre_encargado'])).
                            " <img title='".$encargado['nombre_pais']."' src='imagenes/banderas/".
                                $encargado['codigo3_pais'].".png'></td>";

                                
                        echo "<td>".$encargado['correo_encargado'] . "</td>";

                        echo "<td>".$encargado['celular_encargado'] . "</td>";
                   

                        echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_encargado(" . $encargado['id_encargado'] . ");'><i 
                                class='fas fa-edit'></i></a></td>";

                        echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_encargado(" . $encargado['id_encargado'] . ");'><i 
                                class='fas fa-trash'></i></a></td>";

                        echo "</tr>";
                    }
                    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>