<?php

class CdpsContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_cdps.id_cdp, 
                    contratos_cdps.contrato_cdp, 
                    contratos_cdps.numero_cdp, 
                    contratos_cdps.fecha_cdp, 
                    contratos_cdps.valor_cdp, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato
                
                    from contratos_cdps 
                            inner join contratos ON contratos_cdps.contrato_cdp = contratos.id_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_cdp) {
        
        $query = "select 
                    contratos_cdps.id_cdp, 
                    contratos_cdps.contrato_cdp, 
                    contratos_cdps.numero_cdp, 
                    contratos_cdps.fecha_cdp, 
                    contratos_cdps.valor_cdp, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato
                
                    from contratos_cdps 
                            inner join contratos ON contratos_cdps.contrato_cdp = contratos.id_contrato    

                    
                    where contratos_cdps.contrato_cdp='".$contrato_cdp."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_cdp) {
       
        $query = "select 
                    contratos_cdps.id_cdp, 
                    contratos_cdps.contrato_cdp, 
                    contratos_cdps.numero_cdp, 
                    contratos_cdps.fecha_cdp, 
                    contratos_cdps.valor_cdp, 

                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato
                
                    from contratos_cdps 
                            inner join contratos ON contratos_cdps.contrato_cdp = contratos.id_contrato    
                    
                    where contratos_cdps.id_cdp='".$id_cdp."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(    
        $contrato_cdp,
        $numero_cdp,
        $fecha_cdp,
        $valor_cdp
    ){
                
        $query = "INSERT INTO contratos_cdps (
                            contrato_cdp,
                            numero_cdp,
                            fecha_cdp,
                            valor_cdp
                            )
                    VALUES(
                            '".$contrato_cdp."',
                            '".$numero_cdp."',
                            '".$fecha_cdp."',
                            '".$valor_cdp."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_cdp) {
        
        $query = "DELETE FROM contratos_cdps WHERE id_cdp = '". $id_cdp ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>