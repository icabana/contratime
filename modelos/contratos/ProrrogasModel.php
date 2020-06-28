<?php

class ProrrogasContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "SELECT 

                    contratos_prorrogas.id_prorroga, 
                    contratos_prorrogas.contrato_prorroga, 
                    contratos_prorrogas.fecha_prorroga, 
                    contratos_prorrogas.dias_prorroga, 

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
                
                    FROM contratos_prorrogas 
                            left join contratos ON contratos_prorrogas.contrato_prorroga = contratos.id_contrato
                            
                    ORDER BY contratos_prorrogas.fecha_prorroga";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_prorroga) {
        
        $query = "select 

                    contratos_prorrogas.id_prorroga, 
                    contratos_prorrogas.contrato_prorroga, 
                    contratos_prorrogas.fecha_prorroga, 
                    contratos_prorrogas.dias_prorroga, 

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
                
                    from contratos_prorrogas 
                            left join contratos ON contratos_prorrogas.contrato_prorroga = contratos.id_contrato

                    where contratos_prorrogas.contrato_prorroga='".$contrato_prorroga."'
                    
                    ORDER BY contratos_prorrogas.fecha_prorroga";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_prorroga) {
       
        $query = "select 

                    contratos_prorrogas.id_prorroga, 
                    contratos_prorrogas.contrato_prorroga, 
                    contratos_prorrogas.fecha_prorroga, 
                    contratos_prorrogas.dias_prorroga, 

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
                
                    from contratos_prorrogas 
                        left join contratos ON contratos_prorrogas.contrato_prorroga = contratos.id_contrato
                    
                    where contratos_prorrogas.id_prorroga='".$id_prorroga."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function getDiasProrrogas($id_contrato) {
       
        $query = "select sum(contratos_prorrogas.dias_prorroga) as dias
                
                    from contratos_prorrogas 
                    
                    where contratos_prorrogas.contrato_prorroga='".$id_contrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0]['dias'];    
        
    }
    


    function insertar(    
        $contrato_prorroga,
        $dias_prorroga
    ){
        
        $fecha_actual = date('Y-m-d H:i:s');

        $query = "INSERT INTO contratos_prorrogas (
                            contrato_prorroga,
                            fecha_prorroga,
                            dias_prorroga
                            )
                    VALUES(
                            '".$contrato_prorroga."',
                            '".$fecha_actual."',
                            '".$dias_prorroga."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_prorroga) {
        
        $query = "DELETE FROM contratos_prorrogas WHERE id_prorroga = '". $id_prorroga ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>