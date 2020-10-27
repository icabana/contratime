<div class="table-responsive mailbox-messages">
          <table id="tabla_contratos" style="width:100%; font-size:12px" class="table table-hover table-striped">
            <thead>
              <tr>
                <th style='background-color:lavender; width:5%'>No. Proceso</th>
                <th style='background-color:lavender; width:10%'>Valor Proceso</th>
                <th style='background-color:lavender; width:15%'>Modalidad</th>
                <th style='background-color:lavender; width:15%'>Tipo Contrato</th>
                <th style='background-color:lavender; width:5%'>No. Contrato</th>
                <th style='background-color:lavender; width:10%'>Valor Contrato</th>
                <th style='background-color:lavender; width:17%'>Contratista</th>
                <th style='background-color:lavender; width:10%'>Fecha Inicio</th>
                <th style='background-color:lavender; width:10%'>Fecha Final</th>
                <th style='background-color:lavender; width:10%'>Estado</th>    
              </tr>
            </thead>
            <tbody>

              <?php

              foreach ($contratos as $contrato) {

              ?>
                <tr >
               
                
                      <td class="mailbox-star">
                       <?php  echo $contrato['numproceso_contrato']; ?>
                      </td>

                      <td class="mailbox-star">
                       <?php  echo "$".number_format($contrato['valproceso_contrato'],0,',','.'); ?>
                      </td>
                      
                      <td class="mailbox-star">
                       <?php  echo utf8_encode($contrato['nombre_modalidad']); ?>
                      </td>

                      <td class="mailbox-star">
                       <?php  echo utf8_encode($contrato['nombre_tipocontrato']); ?>
                      </td>

                      <td class="mailbox-star">
                       <?php  echo $contrato['numero_contrato']; ?>
                      </td>

                      <td class="mailbox-star">
                       <?php  echo "$".number_format($contrato['valor_contrato'],0,',','.'); ?>
                      </td>
                     
                      <td class="mailbox-star">
                       <?php  echo utf8_encode($contrato['nombre_contratista']); ?>
                      </td>
                     
                      <td class="mailbox-star">
                       <?php  echo $contrato['fechainicio_contrato']; ?>
                      </td>
                     
                      <td class="mailbox-star">
                       <?php  echo $contrato['fechafinal_contrato']; ?>
                      </td>
 
                 
                    <?php 
                        if($contrato['estado_contrato'] == 1 ){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';

                        

                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 5){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';


                            echo '<td class="mailbox-subject">';
                            
                            echo '</td>';
                        }
                    ?>


                    <?php 
                        if($contrato['estado_contrato'] == 2){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';

                        
                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 3){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                         
                             echo '</td>';

                       

                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 4){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>LIQUIDADO</center></b>";                          
                            echo '</td>';

                           

                        }
                    ?>
               


                </tr>
              <?php
              }
              ?>
 </tbody>
          </table>
</div>