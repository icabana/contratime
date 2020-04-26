<?php

class TipospersonaModel extends ModelBase {

    function getTodos(){
        
        $query = "select    tipospersona.id_tipopersona, 
                            tipospersona.nombre_tipopersona
            	                 
                            from tipospersona
                        
                        ORDER BY tipospersona.nombre_tipopersona";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_tipopersona){
        
        $query = "select    tipospersona.id_tipopersona, 
                            tipospersona.nombre_tipopersona
            	                 
                        from tipospersona
                             
                        where tipospersona.id_tipopersona = '".$id_tipopersona."'
                        
                        ORDER BY tipospersona.nombre_tipopersona";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>