<?php

class EstadoscontratosModel extends ModelBase {

    function getTodos(){
        
        $query = "select    estadoscontrato.id_estado, 
                            estadoscontrato.nombre_estado
            	                 
                        from estadoscontrato
                        
                        ORDER BY estadoscontrato.nombre_estado";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_estado){
        
        $query = "select    estadoscontrato.id_estado, 
                            estadoscontrato.nombre_estado
            	                 
                        from estadoscontrato
                             
                        where estadoscontrato.id_estado = '".$id_estado."'
                        
                        ORDER BY estadoscontrato.nombre_estado";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>