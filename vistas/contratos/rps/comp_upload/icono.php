<?php

$icono_archivo = "";
$documento_rp = "";

$path = 'archivos/uploads/rps/' . $rp['id_rp'] . '/';

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

        $id_rp = $rp['id_rp'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/rps/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/rps/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/rps/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/rps/comp_upload/imagenes/excel.png"';
            }

            $documento_rp .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                 
                      <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_rp(\'' . $ruta_archivo . '\', '.$rp['contrato_rp'].'); return false;">Eliminar</a>
                ';
        }
        
    }

} else {

    $id_rp = $rp['id_rp'];
    $contrato_rp = $rp['contrato_rp'];

    $icono_archivo ='<img width="30px" height="30px" src="vistas/contratos/rps/comp_upload/imagenes/nuevo.png">';

    $documento_rp .= '<a href="#" onclick="rp_seleccionado('.$id_rp.', '.$contrato_rp.');"  data-toggle="modal" data-target="#modal_documentos_rp" >' . $icono_archivo . '</a>';

}