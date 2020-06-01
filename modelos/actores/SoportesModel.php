<?php

class SoportesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "  SELECT 
                        soportes.id_soporte, 
                        soportes.tipo_soporte,
                        soportes.nombre_soporte,
                        soportes.descripcion_soporte,

                        tipospersona.id_tipopersona,
                        tipospersona.nombre_tipopersona
                
                    FROM soportes left join tipospersona on soportes.tipo_soporte = tipospersona.id_tipopersona

                    ORDER BY nombre_soporte";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosxTipo($tipo_soporte) {
        
        $query = "  SELECT 
                        soportes.id_soporte, 
                        soportes.tipo_soporte,
                        soportes.nombre_soporte,
                        soportes.descripcion_soporte,

                        tipospersona.id_tipopersona,
                        tipospersona.nombre_tipopersona
                
                    FROM soportes left join tipospersona on soportes.tipo_soporte = tipospersona.id_tipopersona

                    WHERE soportes.tipo_soporte = '".$tipo_soporte."'

                    ORDER BY nombre_soporte";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_soporte) {
       
        $query = "SELECT 
                        soportes.id_soporte, 
                        soportes.tipo_soporte,
                        soportes.nombre_soporte,
                        soportes.descripcion_soporte,

                        tipospersona.id_tipopersona,
                        tipospersona.nombre_tipopersona

                    FROM soportes left join tipospersona on soportes.tipo_soporte = tipospersona.id_tipopersona

                    where soportes.id_soporte='".$id_soporte."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $tipo_soporte,
                        $nombre_soporte,
                        $descripcion_soporte
                    ){
                
        $query = "INSERT INTO soportes (
                        tipo_soporte,
                        nombre_soporte,
                        descripcion_soporte
                    )
                    VALUES(
                        '".$tipo_soporte."',
                        '".$nombre_soporte."',
                        '".$descripcion_soporte."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_soporte, 
                    $tipo_soporte,
                    $nombre_soporte,
                    $descripcion_soporte
                ) {
        
        $query = "  UPDATE soportes 
                
                    SET 
                        tipo_soporte = '". $tipo_soporte ."',
                        nombre_soporte = '". $nombre_soporte ."',
                        descripcion_soporte = '". $descripcion_soporte ."'
        
                    WHERE id_soporte = '" . $id_soporte . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_soporte) {
        
        $query = "DELETE 
                    FROM soportes 
                    WHERE id_soporte = '". $id_soporte ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>