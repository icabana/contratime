<?php

class MunicipiosModel extends ModelBase {

    function getTodos($departamento_municipio){
        
        $query = "select    municipios.id_municipio, 
                            municipios.departamento_municipio,
                            municipios.nombre_municipio
            	                 
                    from municipios

                    where municipios.departamento_municipio = '".$departamento_municipio."'
                    
                    ORDER BY municipios.nombre_municipio";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_municipio){
        
        $query = "select    municipios.id_municipio, 
                            municipios.departamento_municipio,
                            municipios.nombre_municipio
            	                 
                    from municipios
                            
                    where municipios.id_municipio = '".$id_municipio."'
                    
                    ORDER BY municipios.nombre_municipio";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>