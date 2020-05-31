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
                      <span class="mailbox-attachment-size">
                      <i class="fa fa-paperclip"></i> '.substr($documento["nombre_documento"],0,40).'                             
                      </span>
                </div>
                    </div>

                  </li>

                </ul> 
                
              </div>';

            }

              $contador ++;

          $ver_archivo = "";
          $bandera = 0;

    }              
                 
                   
    $tabla_documentos .= "</div></div></div>";
        
    /*
    
    /////////////////////////////////

    $tabla_documentos .= '
      <div class="remodal" data-remodal-id="modal_documentos" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">

        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

        <div id="cuerpo_modal" class="box-body table-responsive no-padding">

        <div class="box box-default">

        <div class="box-header with-border">

        <h3 class="box-title">Registrar Nuevo Soporte Adicional</h3>

      </div>


      <div class="box-body">

        <div class="row">      

            <div class="col-md-12">

                <div class="form-group">

                      <label>Nombre del Soporte: </label>

                      <input type="text" class="form-control pull-right requerido_clientes" id="soporte_modal" name="soporte_modal">

                </div>  

            </div>

        </div>

      </div>

        
      <div class="box-footer">

          <div class="col-md-3"></div>

          <div class="col-md-6">

          <button  data-remodal-action="cancel" onclick="insertar_soporte_modal(); return false;" class="btn btn-block btn-primary btn-lg remodal-confirm">GUARDAR</button></div>

      </div>
      <div class="col-md-3"></div>

      </div>

      </div>    

      </div>
';