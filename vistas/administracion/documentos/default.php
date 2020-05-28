
<script type='text/javascript' src='js/vistas/configuracion/documentos/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">

            <input type="hidden" name="id_modalidad_documento" id="id_modalidad_documento" value="<?php echo $datos['id_modalidad'] ?>">
        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-10">
                            <h4 style="color:grey">Documentos Soportes (<?php echo $datos['nombre_modalidad'] ?>)</h4>
                        </div>
                    
                        <div class="col-md-2">
                            <button onclick="nuevo_documento(); return false;" class="btn btn-success btn-sm">
                                Nuevo Documento
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_documentos" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Nombre del Documento</th>
                            <th style='background-color:lavender'></th>
                            <th style='background-color:lavender'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($documentos as $documento) {

                            echo "<tr>";

                            echo "<td>" . $documento['nombre_documento'] . "</td>";

                            echo "<td><a href='#'><i onclick='editar_documento(" . $documento['id_documento'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_documento(" . $documento['id_documento'] . ");' 
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