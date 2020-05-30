<?php
    include("vistas/contratos/documentos/modal.php");
?>

<div class="card-header">
    <div class="box">
        <div class="row">


        </div>
    </div>
</div>



<div class="box-body">           
    
    <br>
 
    <div id="div_documentos">
        
        <?php
                 
            if($_SESSION['rol'] == "1"){ 
                
                require_once 'tabla_documentos.php';
                echo $tabla_documentos;
                
            }else{
                
                require_once 'tabla_documentos_lectura.php';
                echo $tabla_documentos;
                
            }
            
              
        ?>
        
    </div>
    
    
          

        </div>

        <script language="JavaScript" type='text/javascript' src='vistas/contratos/documentos/upload.js'></script> 
