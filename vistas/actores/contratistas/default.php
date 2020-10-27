<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">



            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR CONTRATISTAS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_contratistas(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_contratistas(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_contratista(); return false;" class="btn btn-success btn-sm">
                                Nuevo Contratista
                            </button>
                        </div>


                    </div>
                </div>
            </div>


            
            <div class="card-body">
                <table id="tabla_contratistas" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Nombre del Contratista</th>
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
                    foreach ($contratistas as $contratista) {

                        echo "<tr>";

                         echo "<td>".$contratista['codigo_tipodocumento']." ".$contratista['documento_contratista']."</td>";

                        
                        echo "<td>".strtoupper(utf8_encode($contratista['nombre_contratista'])).
                            " <img title='".$contratista['nombre_pais']."' src='imagenes/banderas/".
                                $contratista['codigo3_pais'].".png'></td>";

                                
                        echo "<td>".$contratista['correo_contratista'] . "</td>";

                        echo "<td>".$contratista['celular_contratista'] . "</td>";
                       

                        echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_contratista(" . $contratista['id_contratista'] . ");'><i 
                                class='fas fa-edit'></i></a></td>";

                        if($_SESSION['rol'] == 1){
                        echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'  onclick='eliminar_contratista(" . $contratista['id_contratista'] . ");' ><i
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