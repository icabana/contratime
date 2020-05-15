<div class="card-header">
    <div class="box">
        <div class="row">


            <div class="col-md-10">
            </div>
            <div class="col-md-2">
            <button title="Agregar Supervisor" 
            data-toggle="modal" 
            data-target="#modal_cdps_editar" 
            type="button" 
            class="btn btn-success btn-sm">Nuevo CDP</button>
            </div>


        </div>
    </div>
</div>


<table id="tabla_supervisores" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style='background-color:lavender'>Documento</th>
            <th width='30%' style='background-color:lavender'>No. de CDP</th>
            <th width='30%' style='background-color:lavender'>Fecha del CDP</th>
            <th width='30%' style='background-color:lavender'>Valor del Cdp</th>
            <th style='background-color:lavender; width:15px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cdps as $cdp) {

        echo "<tr>";

        $documento_cdp = "

        <div class='box box-default'>
        
          <div class='box-body'>               
            <div class='row'>
          
            <form  method='post' action='return false;'>";
                 
            $icono_archivo = "";
                
              $path = 'archivos/uploads/cdps/CDP-';
        
              if(file_exists($path)){
                  
                  $directorio = dir($path);            
                  $nombre_archivo = "";            
                  $extension = "";
                                  
                  while ($archivo = $directorio->read()){
        
                    if($archivo != "." && $archivo != ".." ){
                        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                        $nombre_archivo = $archivo;
                        $ruta_archivo = $path.$nombre_archivo;
                    
                        $icono_archivo = '<img width="70px" height="70px" src="imagenes/iconos/pdf.png">';
                        if($extension == "pdf"){
                            $icono_archivo = '<img width="70px" height="70px" src="imagenes/iconos/pdf.png">';
                        }
                        if($extension == "doc" || $extension == "docx"){
                            $icono_archivo = '<img width="70px" height="70px" src="imagenes/iconos/word.png">';
                        }
                        if($extension == "xls" || $extension == "xlsx"){
                            $icono_archivo = '<img width="70px" height="70px" src="imagenes/iconos/excel.png"';
                        }                
        
                        $documento_cdp .= ' <div class="col-md-3">
                          <ul class="mailbox-attachments clearfix">
                            <li>
                          
                              <span class="mailbox-attachment-icon">  <a target="_blank"  href="'.$ruta_archivo.'">'.$icono_archivo.'</a></span>
                              
                              <div class="mailbox-attachment-info">                               
                                <span class="mailbox-attachment-size">
                                    <a href="#"  title="Eliminar Documento" onclick="eliminar_documento_cdp(\''.$ruta_archivo.'\'); return false;">Eliminar Documento</a>
                                </span>
                              </div>
                            </li>
        
                          </ul> </div>';
        
                    }
        
                  }
                  
        
                }
        
          

        echo "<td>
                <center>".
                $documento_cdp
                ."</center>                    
            </td>";

        echo "<td>".$cdp['numero_cdp'] . "</td>";

        echo "<td>".$cdp['fecha_cdp'] . "</td>";

        echo "<td>$".number_format($cdp['valor_cdp'], 0, ',', '.') . "</td>";
     

        echo "<td><a title='Eliminar CDP' href='#'><i onclick='eliminar_cdp_contrato(" . $cdp['id_cdp'] . ", " . $cdp['contrato_cdp'] . ");' 
                class='fas fa-trash'></i></a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>

</table>