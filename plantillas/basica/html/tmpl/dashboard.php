

    <?php

      $fechas = new Fechas();

      include("modelos/contratos/ContratosModel.php");
      $ContratosModel = new ContratosModel();

      include("modelos/alertas/AlertasModel.php");
      $AlertasModel = new AlertasModel();
      
      $num_convocados = $ContratosModel->getNumConvocados();
      $num_adjudicados = $ContratosModel->getNumAdjudicados();
      $num_celebrados = $ContratosModel->getNumCelebrados();
      $num_liquidados = $ContratosModel->getNumLiquidados();
      $num_descartados = $ContratosModel->getNumDescartados();


      $contratos_sin_pagar = $AlertasModel->getContratosFinalizadosSinPagar();
      $contratos_x_finalizar = $AlertasModel->getContratosxFinalizar();
      $procesos_x_finalizar = $AlertasModel->getProcesosxEvaluar();
      $procesos_x_cerrar = $AlertasModel->getProcesosxCerrar();
    
    ?>

<?php
  if($_SESSION['rol'] == 1){
?>

  <div class="row">
        <div class="col-md-12">

        <div class="row">

            <div class="col-md-4">
              <a href="#" onclick="cargar_procesos_x_estado(1);">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Procesos Convocados</span>
                    <span class="info-box-number"><?php echo $num_convocados; ?></span>
                  </div>
                </div>
              </a>
            </div>


            <div class="col-md-4">
              <a href="#" onclick="cargar_procesos_x_estado(2);">
                <div class="info-box">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Procesos Adjudicados</span>
                    <span class="info-box-number"><?php echo $num_adjudicados; ?></span>
                  </div>
                </div>
              </a>
            </div>


            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_x_estado(3);">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Celebrados</span>
                    <span class="info-box-number"><?php echo $num_celebrados; ?></span>
                  </div>
                </div>
              </a>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_x_estado(4);">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Liquidados</span>
                    <span class="info-box-number"><?php echo $num_liquidados; ?></span>
                  </div>
                </div>
              </a>
            </div>


          <div class=" col-md-4">
            <a href="#" onclick="cargar_contratos_x_estado(5);">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-list-alt"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Contratos Descartados</span>
                  <span class="info-box-number"><?php echo $num_descartados; ?></span>
                </div>
              </div>
            </a>  
          </div>
        </div>

</div>

  </div>


  <div class="col-md-12">
  <div class="row">

      <div class="col-md-3">
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
                              <button onclick="enviar_correo_contratosxfinalizar(<?php echo $contrato['id_contrato']; ?>); return false;" class="btn btn-success btn-sm">
                                Enviar Correo
                              </button>
                              <button data-toggle="modal" data-target="#modal_vista_previa_contratoxfinalizar" class="btn btn-primary btn-sm">
                                Ver Vista Previa
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





   
            <div class="col-md-3">
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
                          <button onclick="enviar_correo_contratos_sin_pagar(<?php echo $contrato['id_contrato']; ?>); return false;" class="btn btn-success btn-sm">
                            Enviar Correo
                          </button>
                          <button  data-toggle="modal" data-target="#modal_vista_previa_contratos_sin_pagar" class="btn btn-primary btn-sm">
                            Ver Vista Previa
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




            
      <div class="col-md-3">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><center><b>Procesos Próximos a Finalizar su Fase de Evaluación</b></center></h4>                    
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">

                      <?php 
                      if(count($procesos_x_finalizar) > 0){
                    ?>

                      <?php
                        foreach($procesos_x_finalizar as $contrato){
                      ?>

                      <li style="padding-left: 15px;" class="item">
                        
                        <a href="javascript:void(0)" class="product-title">
                        <?php echo "<center>Proceso No.: ". $contrato['numproceso_contrato']."</center>"; ?>
                        <?php echo "<center>Valor del Proceso: $". number_format($contrato['valproceso_contrato'], 0, ',', '.')."</center><br>"; ?>
                        </a>
                        
                        <span class="product-description">
                         <?php echo "<b>Fecha de invitación:</b> ". $contrato['favisoproceso_contrato']; ?>
                         <?php echo "<br><b>Fecha de Evaluación:</b>"; ?>
                         <?php echo "<br><center><b>Desde: </b>".$contrato['fevaluacionproceso_contrato']."</center>"; ?>
                         <?php echo "<span style='color:red'><center><b>Hasta: </b>".$contrato['fevaluacionproceso2_contrato']."</center></span>"; ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Fecha Adjudicación: ".$contrato['fadjudicacionproceso_contrato']."</b>"; ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Fecha de Cierre: </b> ".$contrato['fcierreproceso_contrato']."<br>"; ?>
                         </span>
                         <br>
                          <button onclick="enviar_correo_procesos_x_finalizar(<?php echo $contrato['id_contrato']; ?>); return false;" class="btn btn-success btn-sm">
                            Enviar Correo
                          </button>
                          <button data-toggle="modal" data-target="#modal_vista_previa_procesoxfinalizar" class="btn btn-primary btn-sm">
                            Ver Vista Previa
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


            





            
      <div class="col-md-3">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><center><b>Procesos Próximos a Cerrar</b></center></h4>
                    </div>

                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">

                      <?php 
                      if(count($procesos_x_cerrar) > 0){
                    ?>

                      <?php
                        foreach($procesos_x_cerrar as $contrato){
                      ?>

                      <li style="padding-left: 15px;" class="item">
                        
                        <a href="javascript:void(0)" class="product-title">
                        <?php echo "<center>Proceso No.: ". $contrato['numproceso_contrato']."</center>"; ?>
                        <?php echo "<center>Valor del Proceso: $". number_format($contrato['valproceso_contrato'], 0, ',', '.')."</center><br>"; ?>
                        </a>
                        
                        <span class="product-description">
                         <?php echo "<b>Fecha de invitación:</b> ". $contrato['favisoproceso_contrato']; ?>
                         <?php echo "<br><b>Fecha de Evaluación:</b>"; ?>
                         <?php echo "<br><center><b>Desde: </b>".$contrato['fevaluacionproceso_contrato']."</center>"; ?>
                         <?php echo "<center><b>Hasta: </b>".$contrato['fevaluacionproceso2_contrato']."</center>"; ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Fecha Adjudicación: </b>".$contrato['fadjudicacionproceso_contrato']."" ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<span style='color:red'><b>Fecha de Cierre: </b> ".$contrato['fcierreproceso_contrato']."</span><br>"; ?>
                         </span>
                         <br>
                          <button onclick="enviar_correo_procesos_x_cerrar(<?php echo $contrato['id_contrato']; ?>); return false;" class="btn btn-success btn-sm">
                            Enviar Correo
                          </button>
                          <button data-toggle="modal" data-target="#modal_vista_previa_procesoxcerrar" class="btn btn-primary btn-sm">
                            Ver Vista Previa
                          </button>
                       
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




<?php
  }
?>

<!-- Modal Vista Previa Contrato-->
<?php
  include("vistas/contratos/contratos/vista_correos/modal_vista_previa_contratosxfinalizar.php");
  include("vistas/contratos/contratos/vista_correos/modal_vista_previa_contratossinpagar.php");
  include("vistas/contratos/contratos/vista_correos/modal_vista_previa_procesosxfinalizar.php");
  include("vistas/contratos/contratos/vista_correos/modal_vista_previa_procesosxcerrar.php");
?>