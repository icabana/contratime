
<script type='text/javascript' src='js/vistas/configuracion/detalles/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR DETALLES</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_detalles(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_detalles(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_detalle(); return false;" class="btn btn-success btn-sm">
                                Nueva Detalle
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_detalles" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:15px'>No.</th>
                            <th style='background-color:lavender'>Vigencia</th>
                            <th style='background-color:lavender'>Contacto</th>
                            <th style='background-color:lavender'>Valor</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($detalles as $detalle) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";

                            echo "<td>" . $detalle['ano_detalle'] . "</td>";
                            echo "<td>" . utf8_encode($detalle['contacto_detalle']) . "</td>";
                            echo "<td>$" . number_format($detalle['valor_detalle'],0,',','.') . "</td>";
                            
                            echo "<td><a class='btn btn-sm btn-primary' style='padding:5px 11px 5px 11px' href='#'  onclick='detalles_detalle(" . $detalle['id_detalle'] . ");'><i title='Ver Documentos' 
                            class='fas fa-file'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_detalle(" . $detalle['id_detalle'] . ");'><i title='Editar Detalle' 
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