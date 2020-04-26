<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">  
  <LINK REL="Shortcut Icon" href="imagenes/iconos/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>...: LoginTime :...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>dist/css/adminlte.min.css">

</head>


<body style='background:white' class="hold-transition login-page">

  <div class="login-box">

    <div class="login-logo">
      <span class="brand-text font-weight-light">        
          <img src="imagenes/logos/logo.png"  style="opacity: .8">        
        </span>
    </div>


    
    <div class="card">
      <div class="card-body login-card-body">

        <p class="login-box-msg">Iniciar Sesi&oacute;n</p>

          <form id="form_login" action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="documento" name="documento" onkeypress="return no_numeros(event)">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>         
              
              <div class="row">
                <div class="col-md-9">
                  <button onclick="recordar_contrasena(); return false;"  class="btn btn-primary">Recordar Contraseña</button>
                </div>
                <div class="col-md-3">
                  <button onclick="login(); return false;"  class="btn btn-success">Ingresar</button>
                </div>
              </div>
              
          </form>
  
      </div>
    </div>

    
  </div>

  <div id="cargando"></div>

</body>
</html>





<!-- jQuery -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->ruta(); ?>dist/js/adminlte.min.js"></script>

<script type="text/javascript" src="<?php echo $this->ruta(); ?>plugins/noty/jquery.noty.js" ></script>
<script type="text/javascript" src="<?php echo $this->ruta(); ?>plugins/noty/packaged/jquery.noty.packaged.min.js" ></script>
<script type='text/javascript' src='js/sistema/login.js'></script>  
<script type='text/javascript' src='js/sistema/utilidades.js'></script>  
<script type='text/javascript' src='js/sistema/contenedores.js'></script>  
