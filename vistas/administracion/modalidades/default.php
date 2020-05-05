
<script type='text/javascript' src='js/vistas/configuracion/modalidades/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR MODALIDADES</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_modalidades(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_modalidades(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_modalidad(); return false;" class="btn btn-success btn-sm">
                                Nueva Modalidad
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Modalidad de Contrataci&oacute;n</th>
                            <th style='background-color:lavender' colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($modalidades as $modalidad) {

                            echo "<tr>";

                            echo "<td>" . $modalidad['nombre_modalidad'] . "</td>";

                            echo "<td><a href='#'><i onclick='editar_modalidad(" . $modalidad['id_modalidad'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_modalidad(" . $modalidad['id_modalidad'] . ");' 
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