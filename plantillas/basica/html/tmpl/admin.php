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
  <script language="JavaScript" type='text/javascript' src='js/modulos/administracion/tiposcontrato.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/actores/contratistas.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/actores/supervisores.js'></script> 
  
  <!-- ARCHIVOS DE LAS VISTAS -->  
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/configuracion/usuarios/editar.js'></script> 
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/modalidades/editar.js'></script>

  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/documentos/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/documentos/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/documentos/editar.js'></script>
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tiposcontrato/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tiposcontrato/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/administracion/tiposcontrato/editar.js'></script> 
    
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/contratistas/editar.js'></script>   

  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/actores/supervisores/editar.js'></script> 
  
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/contratos/default.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/contratos/insertar.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/contratos/editar.js'></script> 

  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/contratos/editar_convocado.js'></script> 

  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/supervisores/supervisores.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/trazabilidad/trazabilidad.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/cdps/cdps.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/rps/rps.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/pagos/pagos.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/ajustes/ajustes.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/vistas/contratos/prorrogas/prorrogas.js'></script> 
  
  


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
</head>



<body class="hold-transition sidebar-mini sidebar-collapse">
  
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

  // MENU DEL ROL ADMINISTRADOR

    if($_SESSION['rol'] == 1){
?>
        

<br>
         <!-- MENU DE CONTRATOS --> 
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>
          Contrataciones
          <i class="fas fa-angle-right right"></i>
          
        </p>
      </a>
      <ul class="nav nav-treeview">



      

        <li class="nav-item">
          <a href="#" onclick="cargar_contratos();" class="nav-link">
            <i class="fas fa-archive nav-icon"></i>
            <p>Contratos</p>
          </a>
        </li>



  

      </ul>
    </li>






    <br>
         <!-- MENU DE ACTORES --> 
    <li class="nav-item has-treeview menu">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>
          Actores
          <i class="fas fa-angle-right right"></i>
          
        </p>
      </a>
      <ul class="nav nav-treeview">



      

        <li class="nav-item">
          <a href="#" onclick="cargar_contratistas();" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Contratistas</p>
          </a>
        </li>



        <li class="nav-item">
          <a href="#" onclick="cargar_supervisores();" class="nav-link">
            <i class="nav-icon fas fa-user-secret"></i>
            <p>Supervisores</p>
          </a>
        </li>

  

      </ul>
    </li>







    <br>
    <!-- MENU DE ADMINISTRACIÓN --> 
    <li class="nav-item has-treeview menu">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-warehouse"></i>
        <p>
          Administraci&oacute;n
          <i class="fas fa-angle-right right"></i>
          
        </p>
      </a>
      <ul class="nav nav-treeview">
        
        
        <li class="nav-item">
          <a href="#" onclick="cargar_modalidades();" class="nav-link">
            <i class="far fa-file nav-icon"></i>
            <p>Modalidades </p>
          </a>
        </li>
        

      
        <li class="nav-item">
          <a href="#" onclick="cargar_tiposcontrato();" class="nav-link">
            <i class="far fa-file-alt nav-icon"></i>
            <p>Tipos de Contrato</p>
          </a>
        </li>


      </ul>
    </li>
    

         





    <br>
    <!-- MENU DE CONFIGURACIÓN --> 
    <li class="nav-item has-treeview menu">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>
          Configuraci&oacute;n
          <i class="fas fa-angle-right right"></i>
          
        </p>
      </a>
      <ul class="nav nav-treeview">



      
        <li class="nav-item">
          <a href="#" onclick="cargar_usuarios();" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Usuarios</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="#" onclick="cargar_roles();" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>Roles</p>
          </a>
        </li>

        
        <li class="nav-item">
          <a  href="#" onclick="cargar_parametros();" class="nav-link">
            <i class="far fa-file nav-icon"></i>
            <p>Parametros</p>
            
          </a>






          
        </li>


      </ul>
    </li>
    

         
<br><br><br><br><br><br><br>




      </ul>
    </li>



<



  <?php
    }
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
