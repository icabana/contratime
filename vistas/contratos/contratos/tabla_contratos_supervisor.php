<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_contratos");
        }
    );
</script>

<input type="hidden" name="id_contrato_sel" id="id_contrato_sel">

<div class="table-responsive mailbox-messages">
          <table id="tabla_contratos" style="width:100%; font-size:12px" class="table table-hover table-striped">
            <thead>
              <tr>
                <th style='background-color:lavender; width:5%'></th>            
                <th style='background-color:lavender; width:5%'>N&uacute;mero</th>
                <th style='background-color:lavender; width:15%'>Modalidad</th>
                <th style='background-color:lavender; width:20%'>Contratista</th>
                <th style='background-color:lavender; width:10%'>Valor </th>
                <th style='background-color:lavender; width:30%'>Objeto</th>
                <th style='background-color:lavender; width:8%'>Estado</th>                
                <th style='background-color:lavender; width:8%'>Adjuntar</th>  
                <th  style='background-color:lavender; width:5%'></th>
              </tr>
            </thead>
            <tbody>

              <?php

              foreach ($contratos as $contrato) {


                $id_check = "check" . $contrato['id_contrato'];

              ?>
                <tr id="fila_contrato_<?php echo $contrato['id_contrato']?>" >
                  <td>
                    <div class="icheck-primary">
                      <input estado="<?php echo $contrato['estado_contrato']?>" onchange="opcion_checkeada(); return false;" class="check" name="check_contratos" type="checkbox" value="<?php echo $contrato['id_contrato']; ?>" id="check<?php echo $id_check; ?>">
                      <label for="check<?php echo $id_check; ?>"></label>
                    </div>
                  </td>

                
                  <?php 
                      if( $contrato['estado_contrato'] == '1' || 
                          $contrato['estado_contrato'] == '2' || 
                          $contrato['estado_contrato'] == '5'
                      ){
                        echo '<td class="mailbox-star">';
                        echo $contrato['numproceso_contrato'];
                        echo '</td>';
                      }
                    ?>


                  <?php 
                      if( $contrato['estado_contrato'] == '3' || 
                          $contrato['estado_contrato'] == '4'
                      ){
                        echo '<td class="mailbox-star">';
                        echo $contrato['numero_contrato'];
                        echo '</td>';
                      }
                    ?>

                  <td class="mailbox-name">

                    <?php echo utf8_encode($contrato['nombre_modalidad']); ?>

                  </td>


                  <td class="mailbox-name">

                    <?php echo utf8_encode($contrato['nombres_contratista']." ".$contrato['apellidos_contratista']).
                      " <img title='" . $contrato['nombre_pais'] . "' src='imagenes/banderas/" .
                      $contrato['codigo3_pais'] . ".png'>"; ?>

                  </td>
             

                    <?php
                      if( $contrato['estado_contrato'] == '1' || 
                          $contrato['estado_contrato'] == '2' || 
                          $contrato['estado_contrato'] == '5'){
                        
                            echo '<td class="mailbox-star">';
                            echo "$" . number_format($contrato['valproceso_contrato'], 0, ',', '.') . "";
                            echo '</td>';
                      }
                    ?>


                  <?php
                      if(
                        $contrato['estado_contrato'] == '3'|| 
                        $contrato['estado_contrato'] == '4'
                      ){
                        echo '<td class="mailbox-star">';
                        echo "$" . number_format($contrato['valor_contrato'], 0, ',', '.') . "";
                        echo '</td>';
                      }
                    ?>


                  <td class="mailbox-subject">
                    <?php echo utf8_encode(substr($contrato['objeto_contrato'], 0, 90)) . "..."; ?>
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
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                            echo '</td>';
                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 4){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td class="mailbox-subject">';
                            echo "<b><center>LIQUIDADO</center></b>";                          
                            echo '</td>';
                        }
                    ?>
               

                  <?php
                                      
                    if($contrato['estado_contrato'] >= 3){                                      
                      include("vistas/contratos/contratos/comp_upload/icono_financiera.php");
                      echo "<td><center> " . $documento_contrato . "</center></td>";
                    }else{
                      echo "<td></td>";
                    }
            
                  
                    echo "<td><a class='btn btn-sm btn-primary' style='padding:5px 11px 5px 11px' href='#' onclick='editar_contrato_supervisor(" . $contrato['id_contrato'] . ");' title='Ver Contrato'><i 
                    class='fas fa-search'></i></a></td>";                                 

                  ?>

                </tr>
              <?php
              }
              ?>
 </tbody>
          </table>