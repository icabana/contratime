<?php

class DepartamentosModel extends ModelBase {

    function getTodos(){
        
        $query = "select    departamentos.id_departamento, 
                            departamentos.nombre_departamento
            	                 
                        from departamentos
                        
                        ORDER BY departamentos.nombre_departamento";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_departamento){
        
        $query = "select    departamentos.id_departamento, 
                            departamentos.nombre_departamento
            	                 
                        from departamentos
                             
                        where departamentos.id_departamento = '".$id_departamento."'
                        
                        ORDER BY departamentos.nombre_departamento";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>