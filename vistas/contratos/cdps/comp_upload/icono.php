<?php

$icono_archivo = "";
$documento_cdp = "";

$path = 'archivos/uploads/cdps/' . $cdp['id_cdp'] . '/';

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

    $directorio = dir($path);

    while ($archivo = $directorio->read()) {

        $id_cdp = $cdp['id_cdp'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/excel.png"';
            }

            $documento_cdp .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                 
                      <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_cdp(\'' . $ruta_archivo . '\', '.$cdp['contrato_cdp'].'); return false;">Eliminar</a>
                ';
        }
        
    }

} else {

    $id_cdp = $cdp['id_cdp'];
    $contrato_cdp = $cdp['contrato_cdp'];

    $icono_archivo ='<img width="50px" height="50px" src="vistas/contratos/cdps/comp_upload/imagenes/nuevo.png">';

    $documento_cdp .= '<a href="#" onclick="cdp_seleccionado('.$id_cdp.', '.$contrato_cdp.');"  data-toggle="modal" data-target="#modal_documentos_cdp" >' . $icono_archivo . '</a>';

}