<?php

class EncargadosContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos_encargados.id_encargado, 
                    contratos_encargados.contrato_encargado, 
                    contratos_encargados.encargado_encargado, 

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

                    encargados.tipo_encargado,
                    encargados.tipodocumento_encargado,
                    encargados.documento_encargado,
                    encargados.nombres_encargado,
                    encargados.apellidos_encargado,
    
                    concat( encargados.nombres_encargado,' ',encargados.apellidos_encargado) as nombre_encargado,
    
                    encargados.dirresidencia_encargado,
                    encargados.dircorrespondencia_encargado,
                    encargados.telefono_encargado,
                    encargados.celular_encargado,
                    encargados.correo_encargado,
                    encargados.paginaweb_encargado,
    
                    encargados.pais_encargado,
                    encargados.departamento_encargado,
                    encargados.municipio_encargado,
    
                    encargados.fechanacimiento_encargado,
    
                    encargados.genero_encargado,
                    encargados.estadocivil_encargado,
    
                    encargados.profesion_encargado,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_encargados 
                            left join contratos ON contratos_encargados.contrato_encargado = contratos.id_contrato
                            left join encargados ON contratos_encargados.encargado_encargado = encargados.id_encargado
                            left join paises on encargados.pais_encargado = paises.id_pais";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosxContrato($contrato_encargado) {
        
        $query = "select 

                    contratos_encargados.id_encargado, 
                    contratos_encargados.contrato_encargado, 
                    contratos_encargados.encargado_encargado, 

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

                    encargados.tipo_encargado,
                    encargados.tipodocumento_encargado,
                    encargados.documento_encargado,
                    encargados.nombres_encargado,
                    encargados.apellidos_encargado,

                    concat( encargados.nombres_encargado,' ',encargados.apellidos_encargado) as nombre_encargado,

                    encargados.dirresidencia_encargado,
                    encargados.dircorrespondencia_encargado,
                    encargados.telefono_encargado,
                    encargados.celular_encargado,
                    encargados.correo_encargado,
                    encargados.paginaweb_encargado,

                    encargados.pais_encargado,
                    encargados.departamento_encargado,
                    encargados.municipio_encargado,

                    encargados.fechanacimiento_encargado,

                    encargados.genero_encargado,
                    encargados.estadocivil_encargado,

                    encargados.profesion_encargado,

                    paises.codigo3_pais,
                    paises.nombre_pais
                
                    from contratos_encargados 
                            left join contratos ON contratos_encargados.contrato_encargado = contratos.id_contrato
                            left join encargados ON contratos_encargados.encargado_encargado = encargados.id_encargado
                            left join paises on encargados.pais_encargado = paises.id_pais       

                    
                    where contratos_encargados.contrato_encargado='".$contrato_encargado."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    function getTodosCorreosxContrato($contrato_encargado) {
        
        $query = "select 

                    encargados.correo_encargado
                
                    from contratos_encargados 
                            left join contratos ON contratos_encargados.contrato_encargado = contratos.id_contrato
                            left join encargados ON contratos_encargados.encargado_encargado = encargados.id_encargado     

                    
                    where contratos_encargados.contrato_encargado='".$contrato_encargado."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
 
    function existeEncargadoenContrato($contrato_encargado, $encargado_encargado) {
        
        $query = "SELECT  

                    count(id_encargado) as numero
                
                    FROM contratos_encargados 
                    
                    WHERE contrato_encargado='".$contrato_encargado."' and encargado_encargado='".$encargado_encargado."'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  


    function getDatos($id_encargado) {
       
        $query = "select 

                    contratos_encargados.id_encargado, 
                    contratos_encargados.contrato_encargado, 
                    contratos_encargados.encargado_encargado, 

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

                    encargados.tipo_encargado,
                    encargados.tipodocumento_encargado,
                    encargados.documento_encargado,
                    encargados.nombres_encargado,
                    encargados.apellidos_encargado,

                    concat( encargados.nombres_encargado,' ',encargados.apellidos_encargado) as nombre_encargado,

                    encargados.dirresidencia_encargado,
                    encargados.dircorrespondencia_encargado,
                    encargados.telefono_encargado,
                    encargados.celular_encargado,
                    encargados.correo_encargado,
                    encargados.paginaweb_encargado,

                    encargados.pais_encargado,
                    encargados.departamento_encargado,
                    encargados.municipio_encargado,

                    encargados.fechanacimiento_encargado,

                    encargados.genero_encargado,
                    encargados.estadocivil_encargado,
                    encargados.profesion_encargado
                
                    from contratos_encargados 
                            left join contratos ON contratos_encargados.contrato_encargado = contratos.id_contrato
                            left join encargados ON contratos_encargados.encargado_encargado = encargados.id_encargado
                    
                    where contratos_encargados.id_encargado='".$id_encargado."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
        $encargado_encargado,
        $contrato_encargado
    ){
                
        $query = "INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '".$encargado_encargado."',
                        '".$contrato_encargado."'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    
    
    function eliminar($id_encargado) {
        
        $query = "DELETE FROM contratos_encargados WHERE id_encargado = '". $id_encargado ."'";    

        $this->modificarRegistros($query);
        
    }



}

?>