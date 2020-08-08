<script>
    $(document).ready(
        function(){
            CrearTabla("tabla_contratos");
        }
    );
</script>

<input type="hidden" name="id_contrato_sel" id="id_contrato_sel">

<div class="table-responsive mailbox-messages">
          <table id="tabla_contratos" style="width:100%; font-size:12px" width='100%' class="table table-hover table-striped">
            <thead>
              <tr>
                <th style='background-color:lavender'></th>   
                <th style='background-color:lavender; width:5%'>N&uacute;mero</th>
                <th style='background-color:lavender; width:10%'>Tipo</th>
                <th style='background-color:lavender; width:20%'>Contratista</th>
                <th style='background-color:lavender; width:10%'>Valor </th>
                <th style='background-color:lavender; width:30%'>Objeto</th>
                <th style='background-color:lavender; width:12%'>Estado</th>                           
                <th style='background-color:lavender; width:12%'>Acciones</th>                           
                <th style='background-color:lavender; width:4%'>Adjuntar</th>  
                <th  style='background-color:lavender; width:2%'></th>
                <th  style='background-color:lavender; width:2%'></th>
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

                    <?php echo $contrato['nombre_tipocontrato']; ?>

                  </td>


                  <td class="mailbox-name">

                    <?php echo $contrato['nombres_contratista'] ." ".$contrato['apellidos_contratista'].
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
                            
                            echo '<td style="background-color: #F0E438" class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';

                            echo '<td  class="mailbox-subject">';                        
                            echo '<center><button onclick="sel_adjudicar_contrato(' . $id_contrato . ');"  title="Adjudicar Contrato" data-toggle="modal" data-target="#modal_adjudicar" type="button" class="btn btn-success btn-xs ">¿Adjudicar?</button></center>';
                            echo '<br><center><button onclick="descartar_contrato(' . $id_contrato . ');"  title="Descartar Contrato" type="button" class="btn btn-danger  btn-xs">¿Descartar?</button></center>';
                            echo '</td>';

                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 5){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td style="background-color: #FF8D8D" class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';


                            echo '<td class="mailbox-subject">';
                            
                            echo '</td>';
                        }
                    ?>


                    <?php 
                        if($contrato['estado_contrato'] == 2){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td style="background-color: #F0E438" class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                           echo '</td>';

                            echo '<td  class="mailbox-subject">';
                             echo '<center><button onclick="sel_celebrar_contrato(' . $id_contrato . ');"  title="Celebrar Contrato" data-toggle="modal" data-target="#modal_celebrar" type="button" class="btn btn-success btn-xs">¿Celebrar?</button></center>';
                            echo '<br><center><button onclick="descartar_contrato(' . $id_contrato . ');"  title="Descartar Contrato" type="button" class="btn btn-danger btn-xs">¿Descartar?</button></center>';
                            echo '</td>';

                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 3){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td style="background-color: #77F76C" class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                         
                             echo '<br>
                             <button onclick="enviar_contrato(' . $id_contrato . ');"  title="Enviar Contrato al Contratista" data-toggle="modal" type="button" class="btn btn-primary btn-xs">
                             <i class="fas fa-envelope-square"></i> ¿Enviar Por Correo?
                             </button></center>';
                             echo '</td>';

                            echo '<td class="mailbox-subject">';
                             echo '<center>
                             <button onclick="liquidar_contrato(' . $id_contrato . ');"  title="Liquidar Contrato" data-toggle="modal" data-target="#modal_liquidar" type="button" class="btn btn-success  btn-xs">
                             <i class="fas fa-file-invoice-dollar"></i> ¿Liquidar?
                             </button>
                             <br>
                             <br>
                             <center><button onclick="descartar_contrato(' . $id_contrato . ');"  title="Descartar Contrato" type="button" class="btn btn-danger btn-xs ">
                             <i class="fas fa-trash"></i> ¿Descartar?
                             </button>
                             </center>';
                            echo '</td>';

                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 4){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td style="background-color: #14FF00" class="mailbox-subject">';
                            echo "<b><center>LIQUIDADO</center></b>";                          
                            echo '</td>';

                            echo '<td class="mailbox-subject">';
                            echo '</td>';

                        }
                    ?>
               

                  <?php               
                       
                      if($contrato['estado_contrato'] >= 3 && $contrato['estado_contrato'] != 5){                                      
                        include("vistas/contratos/contratos/comp_upload/icono.php");
                        echo "<td><center> " . $documento_contrato . "</center></td>";
                      }else{
                        echo "<td></td>";
                      }
            
                      echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_contrato(" . $contrato['id_contrato'] . ");' title='Editar Contrato'><i 
                      class='fas fa-edit'></i></a></td>";                                 

                      echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_contrato(" . $contrato['id_contrato'] . ");' title='Editar Contrato'><i 
                                    class='fas fa-trash'></i></a></td>";

                  ?>

                </tr>
              <?php
              }
              ?>
 </tbody>
          </table>