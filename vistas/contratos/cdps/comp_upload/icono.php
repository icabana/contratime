<?php

$icono_archivo = "";
$documento_cdp = "";

$path = 'archivos/uploads/cdp/' . $cdp['id_cdp'] . '/';

$directorio = dir($path);
$num_archivos = 0;

if (file_exists($path)) {

    while ($archivo = $directorio->read()) {

        if ($archivo != "." && $archivo != "..") {

            $num_archivos++;
        }
    }
}


if ($num_archivos >  0) {

    $nombre_archivo = "";
    $extension = "";

    while ($archivo = $directorio->read()) {

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="70px" height="70px" src=""vistas/contratos/cdps/comp_upload/imagenes/iconos/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="70px" height="70px" src=""vistas/contratos/cdps/comp_upload/imagenes/iconos/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="70px" height="70px" src=""vistas/contratos/cdps/comp_upload/imagenes/iconos/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="70px" height="70px" src=""vistas/contratos/cdps/comp_upload/imagenes/iconos/excel.png"';
            }

            $documento_cdp .= ' <div class="col-md-3">
            <ul class="mailbox-attachments clearfix">
              <li>
            
                <span class="mailbox-attachment-icon">  <a target="_blank"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a></span>
                
                <div class="mailbox-attachment-info">                               
                  <span class="mailbox-attachment-size">
                      <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_cdp(\'' . $ruta_archivo . '\'); return false;">Eliminar Documento</a>
                  </span>
                </div>
              </li>

            </ul> </div>';
        }
    }

} else {

    $id_cdp = $cdp['id_cdp'];

    $icono_archivo = '<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/nuevo.png">';

    $documento_cdp .= '<a href="#" onclick="cdp_seleccionado('.$id_cdp.');"  data-toggle="modal" data-target="#modal_documentos_cdp" >' . $icono_archivo . '</a>';

}