
<script type='text/javascript' src='js/vistas/administracion/tiposcontrato/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR TIPO DE CONTRATOS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_tiposcontrato(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_tiposcontrato(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_tipocontrato(); return false;" class="btn btn-success btn-sm">
                                Nuevo Tipo de Contrato
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_tiposcontrato" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Tipo de Contrato</th>
                            <th style='background-color:lavender'></th>
                            <th style='background-color:lavender'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tiposcontrato as $tipocontrato) {

                            echo "<tr>";

                            echo "<td>" . $tipocontrato['nombre_tipocontrato'] . "</td>";

                            echo "<td><a href='#'><i onclick='editar_tipocontrato(" . $tipocontrato['id_tipocontrato'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_tipocontrato(" . $tipocontrato['id_tipocontrato'] . ");' 
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