
<script type='text/javascript' src='js/vistas/configuracion/documentos/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">

            <input type="hidden" name="modalidad_documento" id="modalidad_documento" value="<?php echo $datos['id_modalidad'] ?>">
        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-10">
                            <h4 style="color:grey">Documentos Soportes (<?php echo utf8_encode($datos['nombre_modalidad']) ?>)</h4>
                        </div>
                    
                        <div class="col-md-2">
                            <button onclick="nuevo_documento(<?php echo $datos['id_modalidad'] ?>); return false;" class="btn btn-success btn-sm">
                                Nuevo Documento
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_documentos" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:15px'>No.</th>
                            <th style='background-color:lavender'>Nombre del Documento</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($documentos as $documento) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";

                            echo "<td>" . utf8_encode($documento['nombre_documento']) . "</td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_documento(" . $documento['id_documento'] . ", " . $documento['modalidad_documento'] . ");'><i 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a  class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'  onclick='eliminar_documento(" . $documento['id_documento'] . ", " . $documento['modalidad_documento'] . ");'><i 
                                    class='fas fa-trash'></i></a></td>";

                            echo "</tr>";

                            $cont++;

                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>