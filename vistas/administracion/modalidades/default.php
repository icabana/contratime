
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
                <table id="tabla_modalidades" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:15px'>No.</th>
                            <th style='background-color:lavender'>Modalidad de Contrataci&oacute;n</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($modalidades as $modalidad) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";

                            echo "<td>" . utf8_encode($modalidad['nombre_modalidad']) . "</td>";
                            
                            echo "<td><a class='btn btn-sm btn-primary' style='padding:5px 11px 5px 11px' href='#'  onclick='documentos_modalidad(" . $modalidad['id_modalidad'] . ");'><i title='Ver Documentos' 
                            class='fas fa-file'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_modalidad(" . $modalidad['id_modalidad'] . ");'><i title='Editar Modalidad' 
                                    class='fas fa-edit'></i></a></td>";

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