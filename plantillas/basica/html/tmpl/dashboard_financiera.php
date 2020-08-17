  <?php

    $fechas = new Fechas();

    include("modelos/contratos/ContratosModel.php");
    $ContratosModel = new ContratosModel();

    include("modelos/alertas/AlertasModel.php");
    $AlertasModel = new AlertasModel();
    
    $num_celebrados = $ContratosModel->getNumCelebrados();

    $contratos_sin_pagar = $AlertasModel->getContratosSupervisorFinalizadosSinPagar();
    $contratos_x_finalizar = $AlertasModel->getContratosSupervisorxFinalizar();
  
  ?>


  <div class="row">
        <div class="col-md-12">

        <div class="row">


            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_financiera();">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Celebrados</span>
                    <span class="info-box-number"><?php echo $num_celebrados; ?></span>
                  </div>
                </div>
              </a>
            </div>
     
      



            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h2 class="card-title"><center><b>Contratos Pr&oacute;ximos a Finalizar</b></center></h2>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">

                      <?php 
                        if(count($contratos_x_finalizar) > 0){
                      ?>

                      <?php
                        foreach($contratos_x_finalizar as $contrato){
                      ?>

                        <li style="padding-left: 15px;" class="item">
                        
                            <a href="javascript:void(0)" class="product-title">
                            <?php echo "<center>Contrato No.". $contrato['numero_contrato']."</center>"; ?>
                            <?php echo "<br><center>NOMBRE DEL CONTRATISTA</center>"; ?>
                            <?php echo "<center>".strtoupper($contrato['nombres_contratista']." ".$contrato['apellidos_contratista'])."</center><br>"; ?>
                           
                              <?php
                                if($contrato['numero'] > 5){
                              ?>
                              <span class="badge badge-danger float-right"><?php echo $contrato['numero']; ?></span></a>
                              <?php
                                }else{
                              ?>
                              <span class="badge badge-warning float-right"><?php echo $contrato['numero']; ?></span></a>
                              <?php
                                }
                              ?>
                            <span class="product-description">
                             <?php echo "<b>Fecha de Inicio:</b> ". $contrato['fechainicio_contrato']; ?>
                             <?php echo "<br><b>Fecha Final:</b> <span style='color:red'>".$contrato['fechafinal_contrato']."</span>"; ?>
                             </span>
                             <span class="product-description">
                             <?php echo "<b>Dias Restantes:</b> ".number_format(($fechas->diasEntreFechas($contrato['fechafinal_contrato'], date("Y-m-d"))),0,',','.'); ?>
                             </span>
                             <span class="product-description">
                            <?php echo "<b>Saldo por Pagar: </b> $".number_format(($contrato['valor_contrato'] - $contrato['total_pagos']),0,',','.'); ?>
                            </span>
                             <br>
                              
                            
                        </li>

                      <?php
                        }

                        }else{
                      ?>
                          <li style="padding-left: 15px;" class="item">
                        
                         No hay registros para mostrar
                          
                      </li>
                      <?php
                        }                      
                      ?>

                    
                      </ul>
                    </div>
                   
                  </div>
            </div>





   
            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><center><b>Contratos Vencidos Sin Pagar</b></center></h4>

                    
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">

                      <?php 
                      if(count($contratos_sin_pagar) > 0){
                    ?>

                      <?php
                        foreach($contratos_sin_pagar as $contrato){
                      ?>

                      <li style="padding-left: 15px;" class="item">
                        
                        <a href="javascript:void(0)" class="product-title">
                        <?php echo "<center>Contrato No.: ". $contrato['numero_contrato']."</center>"; ?>
                        <?php echo "<br><center>NOMBRE DEL CONTRATISTA</center>"; ?>
                        <?php echo "<center>".strtoupper($contrato['nombres_contratista']." ".$contrato['apellidos_contratista'])."</center><br>"; ?>
                       
                          <?php
                            if($contrato['numero'] > 5){
                          ?>
                          <span class="badge badge-danger float-right"><?php echo $contrato['numero']; ?></span></a>
                          <?php
                            }else{
                          ?>
                          <span class="badge badge-warning float-right"><?php echo $contrato['numero']; ?></span></a>
                          <?php
                            }
                          ?>
                        <span class="product-description">
                         <?php echo "<b>Fecha de Inicio:</b> ". $contrato['fechainicio_contrato']; ?>
                         <?php echo "<br><b>Fecha Final:</b> <span style='color:red'>".$contrato['fechafinal_contrato']."</span>"; ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Dias de Retraso: </b> ".number_format(($fechas->diasEntreFechas($contrato['fechafinal_contrato'], date("Y-m-d"))),0,',','.'); ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Saldo sin Pagar: </b> $".number_format(($contrato['valor_contrato'] - $contrato['total_pagos']),0,',','.'); ?>
                         </span>
                         <br>
                          
                        
                    </li>


                        <?php
                        }

                        }else{
                      ?>
                          <li style="padding-left: 15px;" class="item">
                        
                         No hay registros para mostrar
                          
                      </li>
                      <?php
                        }                      
                      ?>

                    
                      </ul>
                    </div>
                   
                  </div>
            </div>









    </div>
  </div>
  </div>