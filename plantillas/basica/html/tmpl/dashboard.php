<div class="row">

    <?php

      include("../../modelos/configuracion/UsuariosModel.php");
      $UsuariosModel = new UsuariosModel();
      $num_usuarios = count($UsuariosModel->getTodos());

    ?>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">N&uacute;mero de Usuarios</span>
          <span class="info-box-number"><?php echo $num_usuarios; ?></span>
        </div>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">N&uacute;mero de Usuarios</span>
          <span class="info-box-number"><?php echo $num_usuarios; ?></span>
        </div>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">N&uacute;mero de Usuarios</span>
          <span class="info-box-number"><?php echo $num_usuarios; ?></span>
        </div>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">N&uacute;mero de Usuarios</span>
          <span class="info-box-number"><?php echo $num_usuarios; ?></span>
        </div>
      </div>
    </div>




</div>