<?php

class TrazabilidadModel extends ModelBase {

  
    function getTodos() {
        
        $query = "SELECT 

                    contratos_trazabilidad.id_trazabilidad, 
                    contratos_trazabilidad.contrato_trazabilidad, 
                    contratos_trazabilidad.fecha_trazabilidad, 
                    contratos_trazabilidad.accion_trazabilidad, 
                    contratos_trazabilidad.usuario_trazabilidad, 

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
                    contratos.estado_contrato,

                    usuarios.id_usuario,
                    usuarios.documento_usuario
                
                    FROM contratos_trazabilidad 
                            inner join contratos ON contratos_trazabilidad.contrato_trazabilidad = contratos.id_contrato
                            inner join usuarios ON contratos_trazabilidad.usuario_trazabilidad = usuarios.id_usuario
                            
                    ORDER BY contratos_trazabilidad.fecha_trazabilidad DESC";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_trazabilidad) {
        
        $query = "SELECT 

                    contratos_trazabilidad.id_trazabilidad, 
                    contratos_trazabilidad.contrato_trazabilidad, 
                    contratos_trazabilidad.fecha_trazabilidad, 
                    contratos_trazabilidad.accion_trazabilidad, 
                    contratos_trazabilidad.usuario_trazabilidad, 

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
                    contratos.estado_contrato,

                    usuarios.id_usuario,
                    usuarios.documento_usuario
                
                    FROM contratos_trazabilidad 
                            inner join contratos ON contratos_trazabilidad.contrato_trazabilidad = contratos.id_contrato
                            inner join usuarios ON contratos_trazabilidad.usuario_trazabilidad = usuarios.id_usuario 
                    
                    WHERE contratos_trazabilidad.contrato_trazabilidad='".$contrato_trazabilidad."'

                    ORDER BY contratos_trazabilidad.fecha_trazabilidad DESC";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function getDatos($id_trazabilidad) {
       
        $query = "select 

                    contratos_trazabilidad.id_trazabilidad, 
                    contratos_trazabilidad.contrato_trazabilidad, 
                    contratos_trazabilidad.fecha_trazabilidad, 
                    contratos_trazabilidad.accion_trazabilidad, 
                    contratos_trazabilidad.usuario_trazabilidad, 

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
                    contratos.estado_contrato,

                    usuarios.id_usuario,
                    usuarios.documento_usuario
                
                    from contratos_trazabilidad 
                            inner join contratos ON contratos_trazabilidad.contrato_trazabilidad = contratos.id_contrato
                            inner join usuarios ON contratos_trazabilidad.usuario_trazabilidad = usuarios.id_usuario 
                    
                    where contratos_trazabilidad.id_trazabilidad='".$id_trazabilidad."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
        $accion_trazabilidad,
        $contrato_trazabilidad,
        $usuario_trazabilidad
    ){
                
        $query = "INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        '".utf8_decode($accion_trazabilidad)."',
                        '".$contrato_trazabilidad."',
                        '".date("Y-m-d H:i:s")."',
                        '".$usuario_trazabilidad."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_trazabilidad) {
        
        $query = "DELETE FROM contratos_trazabilidad WHERE id_trazabilidad = '". $id_trazabilidad ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>