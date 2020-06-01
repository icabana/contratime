<?php

$tabla_soportes = "

<div class='box box-default'>

  <div class='box-body'>

    <div class='row'> ";
                         
      $bandera = 0;
      $icono_archivo = "";
      
      foreach ($soportes as $soporte) {
        
        $id_contratista = $datos['id_contratista'];
        $id_soporte = $soporte['id_soporte'];
        $nombre_soporte = $soporte['nombre_soporte'];

        $path = 'archivos/uploads/soportes/'.$id_contratista.'/'.$id_soporte.'/';

     

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

                 
            $icono_archivo = '<img width="60px"  src="vistas/contratos/soportes/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/soportes/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/soportes/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="60px"  src="vistas/contratos/soportes/imagenes/excel.png"';
            }

                      
            $tamano = filesize($nombre_archivo);

            $tabla_soportes .= ' 
            
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
                      <span class="mailbox-attachment-size">
                          <a href="#"  onclick="eliminar_soporte_contrato(\''.$ruta_archivo.'\', '.$id_contratista.', '.$id_soporte.'); return false;">
                            Eliminar Documento
                          </a>
                          
                        </a>
                      </span>
                    </div>

                  </li>

                </ul> 
                
              </div>';

            }else{

              $icono_archivo ='<img width="60px" height="60px" src="vistas/contratos/cdps/comp_upload/imagenes/nuevo.png">';

              $tabla_soportes .= '
                  
                <div class="col-md-3">

                  <ul class="mailbox-attachments clearfix">
                    <li>

                      <a href="#"  
                        data-toggle="modal" data-target="#modal_soportes_contrato" 
                        onclick="soporte_seleccionado('.$id_soporte.', '.$id_contratista.');">
                        
                        <span class="mailbox-attachment-icon">
                             '.$icono_archivo.'
                        </span>

                      </a>

                      <div class="mailbox-attachment-info">    
                            <span class="mailbox-attachment-size">
                            <i class="fa fa-paperclip"></i> '.substr($soporte["nombre_soporte"],0,40).'                             
                            </span>
                      </div>

                    </li>

                  </ul>

                </div>';

          } 

              $contador ++;

          $ver_archivo = "";
          $bandera = 0;

    }              
                 
                   
    $tabla_soportes .= "</div></div></div>";