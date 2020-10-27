
              <?php

                $id_check = "check" . $contrato['id_contrato'];

              ?>
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

                    <?php echo $contrato['nombre_contratista'] .
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
                    <?php echo substr($contrato['objeto_contrato'], 0, 90) . "..."; ?>
                  </td>

                 
                    <?php 
                        if($contrato['estado_contrato'] == 1 ){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";
                            echo '</td>';

                            echo '<td class="mailbox-subject">';
                            echo '<center><button onclick="sel_adjudicar_contrato(' . $id_contrato . ');"  title="Adjudicar Contrato" data-toggle="modal" data-target="#modal_adjudicar" type="button" class="btn btn-success btn-xs ">¿Adjudicar?</button></center>';
                            echo '<br><center><button onclick="descartar_contrato(' . $id_contrato . ');"  title="Descartar Contrato" type="button" class="btn btn-danger btn-xs ">¿Descartar?</button></center>';
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

                            echo '<td class="mailbox-subject">';
                            echo '<center><button onclick="sel_celebrar_contrato(' . $id_contrato . ');"  title="Celebrar Contrato" data-toggle="modal" data-target="#modal_celebrar" type="button" class="btn btn-success  btn-xs">¿Celebrar?</button></center>';
                            echo '<br><center><button onclick="descartar_contrato(' . $id_contrato . ');"  title="Descartar Contrato" type="button" class="btn btn-danger btn-xs ">¿Descartar?</button></center>';
                            echo '</td>';
                        }
                    ?>

                    <?php 
                        if($contrato['estado_contrato'] == 3){

                            $id_contrato = $contrato['id_contrato'];
                            
                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>".$contrato['nombreestado_contrato']."</center></b>";

                            echo '<br>
                            <button onclick="enviar_contrato(' . $id_contrato . ');"  title="Enviar Contrato al Contratista" data-toggle="modal" type="button" class="btn btn-primary btn-xs">
                            <i class="fas fa-envelope-square"></i> ¿Enviar Por Correo?
                            </button></center>';

                            echo '<br><br>
                            <button title="Agregar Bitacora" data-toggle="modal" data-target="#modal_vista_previa_contrato" type="button" class="btn btn-primary btn-xs">
                            <i class="fas fa-envelope-square"></i> ¿Ver Vista Previa?
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

                            echo '<td class="mailbox-subject">';
                            echo '</td>';

                            echo '<td  class="mailbox-subject">';
                            echo "<b><center>LIQUIDADO</center></b>";                          
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
                  

                  if($contrato['estado_contrato'] != 4){
                    echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_contrato(" . $contrato['id_contrato'] . ");' title='Editar Contrato'><i 
                    class='fas fa-edit'></i></a></td>";   
                  }else{
                    echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_contrato(" . $contrato['id_contrato'] . ");' title='Editar Contrato'><i 
                    class='fas fa-edit'></i></a></td>";    
                  }                  

                  echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' title='Editar Contrato'><i onclick='eliminar_contrato(" . $contrato['id_contrato'] . ");' 
                                    class='fas fa-trash'></i></a></td>";



                  ?>

                
             