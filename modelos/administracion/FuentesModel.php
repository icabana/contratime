<?php

class FuentesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "  SELECT 
                        id_fuente, 
                        nombre_fuente
                
                    FROM fuentes

                    ORDER BY nombre_fuente";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_fuente) {
       
        $query = "select 	
                    fuentes.id_fuente, 
                    fuentes.nombre_fuente
                
                    from fuentes 

                    where fuentes.id_fuente='".$id_fuente."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $nombre_fuente
                    ){
                
        $query = "INSERT INTO fuentes (
                        nombre_fuente
                    )
                    VALUES(
                        '".utf8_decode($nombre_fuente)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_fuente, 
                    $nombre_fuente
                ) {
        
        $query = "  UPDATE fuentes 
                
                    SET nombre_fuente = '". utf8_decode($nombre_fuente) ."'
        
                    WHERE id_fuente = '" . $id_fuente . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_fuente) {
        
        $query = "DELETE 
                    FROM fuentes 
                    WHERE id_fuente = '". $id_fuente ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>