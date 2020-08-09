

    <?php

      $fechas = new Fechas();

      include("modelos/contratos/ContratosModel.php");
      $ContratosModel = new ContratosModel();

      include("modelos/alertas/AlertasModel.php");
      $AlertasModel = new AlertasModel();
      
      $num_celebrados = $ContratosModel->getNumCelebradosContratista();
      $num_liquidados = $ContratosModel->getNumLiquidadosContratista();
    
    ?>


  <div class="row">
        <div class="col-md-8">

        <div class="row">

       

            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_contratista_x_estado(3);">
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
              <a href="#" onclick="cargar_contratos_contratista_x_estado(4);">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Liquidados</span>
                    <span class="info-box-number"><?php echo $num_liquidados; ?></span>
                  </div>
                </div>
              </a>
            </div>


        </div>

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
                              <?php echo "Contrato No.". $contrato['numero_contrato']." (".$contrato['nombres_contratista']." ".$contrato['apellidos_contratista'].")"; ?>
                           
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
                             <?php echo "<b>Fecha Inicio:</b> ". $contrato['fechainicio_contrato']." - <b>Fecha Final:</b> ".$contrato['fechafinal_contrato']; ?>
                             </span>
                             <span class="product-description">
                             <?php echo "<b>Dias Restantes:</b> ".number_format(($fechas->diasEntreFechas($contrato['fechafinal_contrato'], date("Y-m-d"))),0,',','.'); ?>
                             </span>
                             <br>
                              <button onclick="enviar_correo_empleado('<?php echo $contrato['correo_empleado']; ?>', <?php echo $contrato['id_empleado']; ?>); return false;" class="btn btn-success btn-sm">
                                Enviar Correo
                              </button>
                            
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







<?php 
  if(count($contratos_sin_pagar) > 0){
?>

      <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h2 class="card-title"><center>Contratos Finalizados Sin Pagar</center></h2>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">

                      <?php
                        foreach($contratos_sin_pagar as $contrato){
                      ?>

                        <li style="padding-left: 15px;" class="item">
                        
                            <a href="javascript:void(0)" class="product-title">
                              <?php echo "Contrato No.". $contrato['numero_contrato']." (".$contrato['nombres_contratista']." ".$contrato['apellidos_contratista'].")"; ?>
                           
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
                             <?php echo "<b>Fecha Inicio:</b> ". $contrato['fechainicio_contrato']." - <b>Fecha Final:</b> ".$contrato['fechafinal_contrato']; ?>
                             </span>
                             <span class="product-description">
                             <?php echo "<b>Valor Contrato</b>: $".number_format($contrato['valor_contrato'],0,',','.')." - <b>Saldo:</b> $".number_format($contrato['saldo'],0,',','.'); ?>
                             </span>
                             <br>
                              <button onclick="enviar_correo_empleado('<?php echo $contrato['correo_empleado']; ?>', <?php echo $contrato['id_empleado']; ?>); return false;" class="btn btn-success btn-sm">
                                Enviar Correo
                              </button>
                            
                        </li>

                      <?php
                        }
                      ?>

                    
                      </ul>
                    </div>
                   
                  </div>
            </div>

            <?php 
                  }
            ?>





    </div>
  </div>

