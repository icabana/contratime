<?php

$tabla_documentos = "

<div class='box box-default'>

  <div class='box-body'>

    <div class='row'> ";
                         
      $bandera = 0;
      $icono_archivo = "";
      
      foreach ($documentos as $documento) {
        
        $id_contrato = $contrato['id_contrato'];
        $id_documento = $documento['id_documento'];
        $nombre_documento = $documento['nombre_documento'];

        $path = 'archivos/uploads/documentos/'.$id_contrato.'/'.$id_documento.'/';

     

        $connt = 0;

        $files = glob( $path . '*', GLOB_MARK );


        $directorio = dir($path);
        

        if(file_exists($path) && count($files)>0){
            
          $directorio = dir($path);
          
         
          $nombre_archivo = "";
          
          $extension = "";
                        
            while ($archivo = $directorio->read()){

                if($archivo != "." && $archivo != ".." ){

                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombre_archivo = $archivo;

                }

            }

            $ruta_archivo = $path.$nombre_archivo;

                 
            $icono_archivo = '<img width="60px"  src="vistas/contratos/documentos/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/documentos/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/documentos/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/documentos/imagenes/excel.png"';
            }

                      
            $tamano = filesize($nombre_archivo);

            $tabla_documentos .= ' 
            
              <div class="col-md-3">

                <ul class="mailbox-attachments clearfix">

                  <li>

                    <a target="_blank"  href="'.$path."/".$nombre_archivo.'">

                    <span class="mailbox-attachment-icon">'.$icono_archivo.'</span>

                    <div class="mailbox-attachment-info">
                      <span class="mailbox-attachment-size">
                      <a target="_blank" href="'.$path."/".$nombre_archivo.'" class="mailbox-attachment-name">
                      </span>
                        <i class="fa fa-paperclip"></i> '.utf8_encode(substr($nombre_archivo,0,43)).'
                      </a>
                      <div class="mailbox-attachment-info">    
                     
                </div>
                    </div>

                  </li>

                </ul> 
                
              </div>';

              $bandera = 1;

            }

              $contador ++;

          $ver_archivo = "";

    }              

    if($bandera == 0){
    
      $tabla_documentos .= "<div class='row'><h4><center>No hay Documentos Asociados a este Contrato</center></h4></div>";

    }
               
                   
    $tabla_documentos .= "</div></div></div>";
  