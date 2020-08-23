<?php

class PlanesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "  SELECT 
                        id_plan, 
                        ano_plan,
                        contacto_plan,
                        valor_plan
                
                    FROM planes

                    ORDER BY contacto_plan";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_plan) {
       
        $query = "select 	
                    id_plan, 
                    ano_plan,
                    contacto_plan,
                    valor_plan
                
                    from planes 

                    where planes.id_plan='".$id_plan."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function insertar(                               
                        $ano_plan,
                        $contacto_plan,
                        $valor_plan
                    ){
                
        $query = "INSERT INTO planes (
                        ano_plan,
                        contacto_plan,
                        valor_plan
                    )
                    VALUES(
                        '".utf8_decode($ano_plan)."',
                        '".utf8_decode($contacto_plan)."',
                        '".utf8_decode($valor_plan)."'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_plan, 
                    $ano_plan,
                    $contacto_plan,
                    $valor_plan
                ) {
        
        $query = "  UPDATE planes 
                
                    SET ano_plan = '". $ano_plan ."',
                        contacto_plan = '". utf8_decode($contacto_plan) ."',
                        valor_plan = '". $valor_plan ."'
        
                    WHERE id_plan = '" . $id_plan . "'";       
            
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_plan) {
        
        $query = "DELETE 
                    FROM planes 
                    WHERE id_plan = '". $id_plan ."'";
        
        $this->modificarRegistros($query);

    }
    
    
}

?>