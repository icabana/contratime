<div class="row">

    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">



            <div class="card-header">
                <div class="box">
                    <div class="row">


                        <div class="col-md-5">
                            <h4 style="color:grey">GESTIONAR CONTRATOS</h4>
                        </div>
                        <div class="col-md-5">
                        <button onclick="generar_pdf_contratos(); return false;" type="button" title="Descargar PDF"
                                class="btn-lg btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>
                        <button onclick="generar_excel_contratos(); return false;" type="button" title="Descargar EXCEL"
                                class="btn-lg btn-success btn-sm"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_contrato(); return false;" class="btn btn-success btn-sm">
                                Nuevo contrato
                            </button>
                        </div>


                    </div>
                </div>
            </div>


            
            <div class="card-body">
                <table id="tabla_contratos" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>No. de Contrato</th>
                            <th style='background-color:lavender'>Tipo de Contrato</th>
                            <th style='background-color:lavender'>Contratista</th>
                            <th style='background-color:lavender'>Valor Contrato</th>
                            <th style='background-color:lavender'>Fecha de inicio</th>
                            <th style='background-color:lavender'>Fecha final</th>
                            <th style='background-color:lavender'>Estado</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($contratos as $contrato) {

                        echo "<tr>";

                        echo "<td>".$contrato['numero_contrato'] . "</td>";
                        echo "<td>".$contrato['nombre_tipo'] . "</td>";
                        
                        echo "<td>".$contrato['nombre_contratista'].
                        " <img title='".$contrato['nombre_pais']."' src='imagenes/banderas/".
                        $contrato['codigo3_pais'].".png'></td>";
                        
                        
                        echo "<td>$".number_format($contrato['valor_contrato'], 0, ',', '.') . "</td>";
                        
                        echo "<td>".$contrato['fechainicio_contrato'] . "</td>";
                        echo "<td>".$contrato['fechafinal_contrato'] . "</td>";
                        echo "<td>".$contrato['nombreestado_contrato'] . "</td>";
                        


                        echo "<td><a href='#'><i onclick='editar_contrato(" . $contrato['id_contrato'] . ");' 
                                class='fas fa-edit'></i></a></td>";

                        echo "<td><a href='#'><i onclick='eliminar_contrato(" . $contrato['id_contrato'] . ");' 
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