
<script type='text/javascript' src='js/vistas/configuracion/planes/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR PLANES</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_planes(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_planes(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_plan(); return false;" class="btn btn-success btn-sm">
                                Nuevo Plan de Adquisición
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_planes" style="font-size: 13px;" class="table table-bordered table-hover">
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

                        foreach ($planes as $plan) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";

                            echo "<td>" . $plan['ano_plan'] . "</td>";
                            echo "<td>" . utf8_encode($plan['contacto_plan']) . "</td>";
                            echo "<td>$" . number_format($plan['valor_plan'],0,',','.') . "</td>";
                            
                            echo "<td><a title='Ver Detalles' class='btn btn-sm btn-primary' style='padding:5px 11px 5px 11px' href='#'  onclick='detalles_plan(" . $plan['id_plan'] . ");'><i' 
                            class='fas fa-search'></i></a></td>";

                            echo "<td><a title='Editar Plan'  class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_plan(" . $plan['id_plan'] . ");'><i
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