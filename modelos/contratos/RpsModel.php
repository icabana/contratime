<?php

class RpsContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_rps.id_rp, 
                    contratos_rps.contrato_rp, 
                    contratos_rps.numero_rp, 
                    contratos_rps.fecha_rp, 
                    contratos_rps.valor_rp, 

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
                
                    from contratos_rps 
                            inner join contratos ON contratos_rps.contrato_rp = contratos.id_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_rp) {
        
        $query = "select 
                    contratos_rps.id_rp, 
                    contratos_rps.contrato_rp, 
                    contratos_rps.numero_rp, 
                    contratos_rps.fecha_rp, 
                    contratos_rps.valor_rp, 

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
                
                    from contratos_rps 
                            inner join contratos ON contratos_rps.contrato_rp = contratos.id_contrato    

                    
                    where contratos_rps.contrato_rp='".$contrato_rp."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_rp) {
       
        $query = "select 
                    contratos_rps.id_rp, 
                    contratos_rps.contrato_rp, 
                    contratos_rps.numero_rp, 
                    contratos_rps.fecha_rp, 
                    contratos_rps.valor_rp, 

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
                
                    from contratos_rps 
                            inner join contratos ON contratos_rps.contrato_rp = contratos.id_contrato    
                    
                    where contratos_rps.id_rp='".$id_rp."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(    
        $contrato_rp,
        $numero_rp,
        $fecha_rp,
        $valor_rp
    ){
                
        $query = "INSERT INTO contratos_rps (
                            contrato_rp,
                            numero_rp,
                            fecha_rp,
                            valor_rp
                            )
                    VALUES(
                            '".$contrato_rp."',
                            '".$numero_rp."',
                            '".$fecha_rp."',
                            '".$valor_rp."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_rp) {
        
        $query = "DELETE FROM contratos_rps WHERE id_rp = '". $id_rp ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>