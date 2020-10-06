

    <?php

      $fechas = new Fechas();

      include("modelos/contratos/ContratosModel.php");
      $ContratosModel = new ContratosModel();

      include("modelos/alertas/AlertasModel.php");
      $AlertasModel = new AlertasModel();
      
      $num_convocados = $ContratosModel->getNumConvocadosXEncargado();
      $num_adjudicados = $ContratosModel->getNumAdjudicadosXEncargado();
      $num_celebrados = $ContratosModel->getNumCelebradosXEncargado();

      $procesos_x_finalizar = $AlertasModel->getProcesosxEvaluar();
      $procesos_x_cerrar = $AlertasModel->getProcesosxCerrar();
    
    ?>


  <div class="row">
        <div class="col-md-12">

        <div class="row">

            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_encargado_x_estado(1);">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Convocados</span>
                    <span class="info-box-number"><?php echo $num_convocados; ?></span>
                  </div>
                </div>
              </a>
            </div>


            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_encargado_x_estado(2);">
                <div class="info-box">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Contratos Adjudicados</span>
                    <span class="info-box-number"><?php echo $num_adjudicados; ?></span>
                  </div>
                </div>
              </a>
            </div>


            <div class="col-md-4">
              <a href="#" onclick="cargar_contratos_encargado_x_estado(3);">
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
        
    

</div>
</div>




<div class="row">

    
<div class="col-md-6">
              <!-- PRODUCT LIST -->
              <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><center><b>Procesos Próximos a Cerrar</b></center></h4>
                    </div>

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
                         <?php echo "<center><b>Hasta: </b>".$contrato['fevaluacionproceso2_contrato']."</center>"; ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<b>Fecha Adjudicación: </b>".$contrato['fadjudicacionproceso_contrato']."" ?>
                         </span>
                         <span class="product-description">
                         <?php echo "<span style='color:red'><b>Fecha de Cierre: </b> ".$contrato['fcierreproceso_contrato']."</span><br>"; ?>
                         </span>
                         <br>
                         
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
           
            
<div class="col-md-6">
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

