
<script type='text/javascript' src='js/vistas/configuracion/soportes/default.js'></script> 

<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">


        
            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">SOPORTES DE CONTRATISTAS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_soportes(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_soportes(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_soporte(); return false;" class="btn btn-success btn-sm">
                                Nueva Soporte
                            </button>
                        </div>


                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_soportes" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender; width:15px'>No.</th>
                            <th style='background-color:lavender'>Tipo de Persona</th>
                            <th style='background-color:lavender'>Nombre del Soporte</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cont = 1;

                        foreach ($soportes as $soporte) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";
                            echo "<td>" . utf8_encode($soporte['nombre_tipopersona']) . "</td>";
                            echo "<td>" . utf8_encode($soporte['nombre_soporte']) . "</td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#'  onclick='editar_soporte(" . $soporte['id_soporte'] . ");' ><i title='Editar Soporte'
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'  onclick='eliminar_soporte(" . $soporte['id_soporte'] . ");'><i title='Eliminar Soporte' 
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