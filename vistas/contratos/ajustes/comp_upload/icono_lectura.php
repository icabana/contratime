<?php

$icono_archivo = "";
$documento_ajuste = "";

$path = 'archivos/uploads/ajustes/' . $ajuste['id_ajuste'] . '/';

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

        $id_ajuste = $ajuste['id_ajuste'];

        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $nombre_archivo = $archivo;
            $ruta_archivo = $path . $nombre_archivo;

            $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/ajustes/comp_upload/imagenes/pdf.png">';
            if ($extension == "pdf") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/ajustes/comp_upload/imagenes/pdf.png">';
            }
            if ($extension == "doc" || $extension == "docx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/ajustes/comp_upload/imagenes/word.png">';
            }
            if ($extension == "xls" || $extension == "xlsx") {
                $icono_archivo = '<img width="30px" height="30px" src="vistas/contratos/ajustes/comp_upload/imagenes/excel.png"';
            }

            $documento_ajuste .= '  
                <a target="_blank" title="Ver/Descargar Documento"  href="' . $ruta_archivo . '">' . $icono_archivo . '</a>                         
                <br/> ';
        }
        
    }

} 