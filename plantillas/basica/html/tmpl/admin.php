<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <link REL="Shortcut Icon" href="imagenes/iconos/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>..: ContraTime :..</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/fontawesome-free/css/all.min.css">
  
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">  


  <!-- FUNCIONES DEL SISTEMA -->  
  <script type='text/javascript' src='js/sistema/contenedores.js'></script>      
  <script type='text/javascript' src='js/sistema/login.js'></script>      
  <script type='text/javascript' src='js/sistema/utilidades.js'></script>      
  
  <!-- MODULOS DEL SISTEMA -->  
  <script language="JavaScript" type='text/javascript' src='js/modulos/configuracion.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/contratos/contratos.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/administracion/modalidades.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/actores/contratistas.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/actores/supervisores.js'></script> 
  
  <!-- ARCHIVOS DE LAS VISTAS -->  
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/editar.js'></script> 
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/editar.js'></script> 
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tipos/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tipos/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tipos/editar.js'></script> 
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/editar.js'></script>   

  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/editar.js'></script> 
  
  


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
</head>



<body class="hold-transition sidebar-mini layout-fixed">
  
  <div class="wrapper">





  <!-- BARRA SUPERIOR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- MENU DE LA IZQUIERDA -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contactos</a>
      </li>
    </ul>

    
    <!-- ICONOS DE LA DERECHA -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item"> 
        <a class="nav-link"  data-toggle="modal" data-target="#modal_perfil"  href="#">
        <span class="fi-key"></span>
          <i title='Cambiar Perfil' class="fas  fa-key"></i>
        </a>
      </li>

      <li class="nav-item"> 
        <a class="nav-link"  data-toggle="modal" data-target="#modal_password"  href="#">
        <span class="fi-user"></span>
          <i title='Cambiar Contraseña' class="fas  fa-user-secret"></i>
        </a>
      </li>

      <li class="nav-item">      
        <a class="nav-link"  onclick="cerrar();"  href="#">
        <span class="fi-power-standby"></span>
          <i title='Cerrar Sesión' class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>







  <!-- BARRA LATERAL IZQUIERA -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- ICONO SUPERIOR IZQUIERDO -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">
        <center><img src="imagenes/logos/logo_mediano.png"  style="opacity: .8"></center>
      </span>
    </a>


    <!-- DATOS DE USUARIO -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $this->ruta(); ?>dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><b><?php echo "Usuario: ".$_SESSION['documento_usuario']; ?></b></a>
        </div>
      </div>

      
      <!-- MENU LATERAL IZQUIERDO -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <?php

          require_once("plantillas/basica/html/tmpl/menu.php");

      ?>









      
      </ul>
      </nav>
    </div>
  </aside>








    <!-- CUERPO DE LA PANTALLA -->
    <div class="content-wrapper">
    
      <section id="cuerpo"  class="content">
    
    
      <!-- CABECERA DEL CUERPO -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Estad&iacute;sticas</h1>
            </div>         
          </div>
        </div>
      </div>
    



      <!-- DASHBOARD -->
      <div class="container-fluid">
          <?php

            require_once("plantillas/basica/html/tmpl/dashboard.php");

          ?>
      </div>







      </section>
    </div>






    </div>




    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a target='_blank' href="https://setpsantamarta.gov.co/">LoginTime S.A.S.</a></strong>
      Todos los derechos Reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.1
      </div>
    </footer>






</div>



<!-- jQuery -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $this->ruta(); ?>plugins/chart.js/Chart.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $this->ruta(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $this->ruta(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $this->ruta(); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $this->ruta(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->ruta(); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $this->ruta(); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $this->ruta(); ?>dist/js/demo.js"></script>
<!-- DataTables -->

<script src="<?php echo $this->ruta(); ?>plugins/noty/jquery.noty.js" ></script>
<script src="<?php echo $this->ruta(); ?>plugins/noty/packaged/jquery.noty.packaged.min.js" ></script>
    
<script src="<?php echo $this->ruta(); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo $this->ruta(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<?php
  require_once("vistas/configuracion/usuarios/modales/cambiar_password.php");
  require_once("vistas/configuracion/usuarios/modales/seleccionar_perfil.php");
?>

<div id="cargando"></div>

</body>
</html>
