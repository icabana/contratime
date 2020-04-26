<?php
	class Logs {
		
		function insertarLog($tipo, $mensaje){

            if($tipo == "ERROR"){
                $mensaje = "\n\n\n ####### ERROR ####### (".date('Y-m-d H:i:s').")".$mensaje." \r\n\n\n";
            }
            if($tipo == "SUCCESS"){
                $mensaje = "SUCCESS ---------->  (".date('Y-m-d H:i:s').") ".$mensaje."\r\n";
            }
            if($tipo == "DEBUG"){
                $mensaje = "\nDEBUG .............>  (".date('Y-m-d H:i:s').") ".$mensaje."\r\n";
            }

            $fecha = date("Y-m-d");
            $nombre_archivo = "logs/logs_".$fecha."_".$_SESSION['documento_usuario'].".php";
                    
		    $ddf = fopen($nombre_archivo, 'a');
            fwrite($ddf, $mensaje);
            fclose($ddf);
                    
		}
		             
	}
?>