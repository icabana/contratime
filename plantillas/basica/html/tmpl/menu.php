<?php

  // MENU DEL ROL ADMINISTRADOR

    if($_SESSION['rol'] == 1){
?>
        

         <!-- MENU DE ACTORES --> 
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
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
            <i class="far fa-user nav-icon"></i>
            <p>Supervisores</p>
          </a>
        </li>

  

      </ul>
    </li>








    <!-- MENU DE ADMINISTRACIÓN --> 
    <li class="nav-item has-treeview menu">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>
          Administraci&oacute;n
          <i class="fas fa-angle-right right"></i>
          
        </p>
      </a>
      <ul class="nav nav-treeview">
        
        
        <li class="nav-item">
          <a href="#" onclick="cargar_modalidades();" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Modalidades</p>
          </a>
        </li>
        

      
        <li class="nav-item">
          <a href="#" onclick="cargar_tipos();" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Tipos</p>
          </a>
        </li>


      </ul>
    </li>
    

         






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
    

         





      </ul>
    </li>







  <?php
    }
  ?>             

