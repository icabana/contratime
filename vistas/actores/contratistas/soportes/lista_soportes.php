<?php
    include("vistas/actores/contratistas/soportes/modal.php");
?>

<div class="card-header">
    <div class="box">
        <div class="row">


        </div>
    </div>
</div>



<div class="box-body">           
    
    <br>
 
    <div id="div_soportes">
        
        <?php
                 
            if($_SESSION['rol'] == "1"){ 
                
                require_once 'tabla_soportes.php';
                echo $tabla_soportes;
                
            }else{
                
                require_once 'tabla_soportes_lectura.php';
                echo $tabla_soportes;
                
            }
            
              
        ?>
        
    </div>
      

    </div>

<script language="JavaScript" type='text/javascript' src='vistas/actores/contratistas/soportes/upload.js'></script> 
