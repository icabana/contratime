
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
                <table id="tabla_tiposcontrato" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:15px'>No.</th>
                            <th style='background-color:lavender'>Tipo de Contrato</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($tiposcontrato as $tipocontrato) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";

                            echo "<td>" . utf8_encode($tipocontrato['nombre_tipocontrato']) . "</td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_tipocontrato(" . $tipocontrato['id_tipocontrato'] . ");'><i 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_tipocontrato(" . $tipocontrato['id_tipocontrato'] . ");' ><i
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