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
                                Nuevo Registro
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <input type="hidden" name="plan_detalle" id="plan_detalle" value="<?php echo $id_plan; ?>">
                <table id="tabla_detalles" style="font-size: 13px;" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:5px'>No.</th>
                            <th style='background-color:lavender; width:10px'>C&oacute;digos</th>
                            <th style='background-color:lavender; width:20px'>Descripci&oacute;n</th>
                            <th style='background-color:lavender; width:10px'>Fecha Estimada Inicio de Proceso</th>
                            <th style='background-color:lavender; width:10px'>Duraci&oacute;n Estimada del Proceso</th>
                            <th style='background-color:lavender; width:15px'>Modalidad </th>
                            <th style='background-color:lavender; width:15px'>Fuente de los Recursos</th>
                            <th style='background-color:lavender; width:15px'>Valor Total Estimado</th>
                            <th style='background-color:lavender; width:15px'>Valor Estimado Vigencia Actual</th>
                            <th style='background-color:lavender; width:5px'></th>
                            <th style='background-color:lavender; width:5px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($detalles as $detalle) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";
                            echo "<td>" . utf8_encode($detalle['codigos_detalle']) . "</td>";
                            echo "<td>" . utf8_encode($detalle['descripcion_detalle']) . "</td>";
                            echo "<td>" . utf8_encode($detalle['fechainicio_detalle']) . "</td>";
                            echo "<td>" . utf8_encode($detalle['meses_detalle']) . " Meses</td>";
                            echo "<td>" . utf8_encode($detalle['nombre_modalidad']) . "</td>";
                            echo "<td>" . utf8_encode($detalle['nombre_fuente']) . "</td>";
                            echo "<td>$" . number_format($detalle['valtotal_detalle'], 0, ',', '.') . "</td>";
                            echo "<td>$" . number_format($detalle['valactual_detalle'], 0, ',', '.') . "</td>";
                          

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_detalle(" . $detalle['id_detalle'] . ", ".$id_plan.");'><i title='Editar Detalle' 
                                    class='fas fa-edit'></i></a></td>";
  
                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'  onclick='eliminar_detalle(" . $detalle['id_detalle'] . ", ".$id_plan.", ".$detalle['valtotal_detalle'].");'><i title='Eliminar Registro' 
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