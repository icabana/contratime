<?php

                   $tabla_soportes .= '
                        <div class="col-md-2">

                          <ul class="mailbox-attachments clearfix">
                            <li>
                            <a href="#"  onclick="abrir_upload_archivo('.$soporte["ID_SOPORTE"].', \''.$soporte["nombre_soporte"].'\'); return false;">
                              <span class="mailbox-attachment-icon"><i class="glyphicon glyphicon-circle-arrow-up"></i></span></a>
                              <div class="mailbox-attachment-info">
                                <i class="fa fa-paperclip"></i> '.utf8_encode(substr($soporte["nombre_soporte"],0,27)).'
                                  <span class="mailbox-attachment-size">
                                          Adjuntar Archivo
                                          <a href="#"  onclick="abrir_upload_archivo('.$soporte["ID_SOPORTE"].', \''.$soporte["nombre_soporte"].'\'); return false;" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-upload"></i></a>
                                        </span>
                        </div>

                 </li>

               </ul>
                </div>';

                $ver_upload = "  <a href='#' title='SUBIR ARCHIVO' onclick='abrir_upload_archivo(".$soporte["ID_SOPORTE"].", \"".utf8_encode($soporte["nombre_soporte"])."\"); return false;'><img alt='' src='imagenes/botones/subir.png' width='26px'  /></a>   ";

               } 

              $contador ++;

          $ver_archivo = "";
          $bandera = 0;

    }              

     $tabla_soportes .= "</div";                      
                   
    $tabla_soportes .= "</form></div></div></div>";
        
    
    
    /////////////////////////////////

    $tabla_soportes .= '
      <div class="remodal" data-remodal-id="modal_soportes" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">

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