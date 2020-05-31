
<script type='text/javascript' src='js/vistas/configuracion/usuarios/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR USUARIOS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_usuarios(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_usuarios(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_usuario(); return false;" class="btn btn-success btn-sm">
                                Nuevo Usuario
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_usuarios" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Correo</th>
                            <th style='background-color:lavender'>Estado</th>
                            <th style='background-color:lavender'></th>
                            <th style='background-color:lavender'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $usuario) {

                            echo "<tr>";

                            echo "<td>" . $usuario['documento_usuario'] . "</td>";
                            echo "<td>" . $usuario['correo_usuario'] . "</td>";

                            if ($usuario['estado_usuario'] == '1') {
                                echo "<td>Activo</td>";
                            } else {
                                echo "<td>Inactivo</td>";
                            }

                            echo "<td><a href='#'><i onclick='editar_usuario(" . $usuario['id_usuario'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_usuario(" . $usuario['id_usuario'] . ");' 
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