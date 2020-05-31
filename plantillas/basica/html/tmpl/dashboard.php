

    <?php

      include("modelos/contratos/ContratosModel.php");
      $ContratosModel = new ContratosModel();
      
      $num_convocados = $ContratosModel->getNumConvocados();
      $num_adjudicados = $ContratosModel->getNumAdjudicados();
      $num_celebrados = $ContratosModel->getNumCelebrados();
      $num_liquidados = $ContratosModel->getNumLiquidados();
      $num_descartados = $ContratosModel->getNumDescartados();
    
    ?>

<?php
  if($_SESSION['rol'] == 1){
?>
<div class="row">

    <div class="col-12 col-sm-6 col-md-3">
      <a href="#" onclick="cargar_contratos_x_estado(1);">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Contratos Convocados</span>
            <span class="info-box-number"><?php echo $num_convocados; ?></span>
          </div>
        </div>
      </a>
    </div>


    <div class="col-12 col-sm-6 col-md-3">
      <a href="#" onclick="cargar_contratos_x_estado(2);">
        <div class="info-box">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Contratos Adjudicados</span>
            <span class="info-box-number"><?php echo $num_adjudicados; ?></span>
          </div>
        </div>
      </a>
    </div>


    <div class="col-12 col-sm-6 col-md-3">
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


    <div class="col-12 col-sm-6 col-md-3">
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


    <div class="col-12 col-sm-6 col-md-3">
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
<?php
  }
?>