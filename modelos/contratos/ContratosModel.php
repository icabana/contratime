<?php

class ContratosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.contratista_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.carpeta_contrato IS NULL or contratos.carpeta_contrato = 0
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosTodos() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                    
                            order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosActivos() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.estado_contrato = '1' 
                    and (contratos.carpeta_contrato IS NULL or contratos.carpeta_contrato = 0)
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function verRadicadosResponsable($id_contratista) {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.responsable_contrato = '".$id_contratista."'
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    

    function verRadicadosDependencia($id_dependencia) {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratistas2.dependencia_contratista = '".$id_dependencia."'
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function verRadicadosTiporadicado($id_tiporadicado) {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.tiporadicado_contrato = '".$id_tiporadicado."'
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosFinalizados() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.estado_contrato = '2' and
                    (contratos.carpeta_contrato IS NULL or contratos.carpeta_contrato = 0)
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getContratosPorEstadoyFecha($estado_contrato, $fecha1, $fecha2, $remitente, $destinatario) {
        
        $consulta_fecha = "";
        
        if($fecha1 != "" && $fecha2 != ""){           
            $consulta_fecha = "and contratos.fecharadicado_contrato BETWEEN '".$fecha1."' AND  '".$fecha2."'" ;
            }else{           
            $consulta_fecha = " " ;           
        }
        
        $consulta_estado = "";
            
        if($estado_contrato == "" || $estado_contrato == "TODOS"){           
            $consulta_estado = " " ;           
        }else{           
            $consulta_estado =  " and contratos.estado_contrato = '".$estado_contrato."' ";           
        }
            
        if($remitente == "" || $remitente == "TODOS"){           
            $consulta_remitente = " " ;           
        }else{           
            $consulta_remitente =  " and contratos.remitente_contrato = '".$remitente."' ";           
        }
            
        if($destinatario == "" || $destinatario == "TODOS"){
            $consulta_destinatario = " " ;           
        }else{           
            $consulta_destinatario =  " and contratos.destinatario_contrato = '".$destinatario."' ";           
        }
               
        $query = "select 
            contratos.id_contrato, 
            contratos.numero_contrato,
            contratos.remitente_contrato,
            contratos.enviadopor_contrato,
            contratos.destinatario_contrato,
            contratos.fecharadicado_contrato,
            contratos.fechamaxima_contrato,
            contratos.prioridad_contrato,
            contratos.numerofolios_contrato,
            contratos.descripcionfolios_contrato,
            contratos.asunto_contrato,
            contratos.tiporadicado_contrato,
            contratos.responsable_contrato,
            contratos.carpeta_contrato,
            contratos.serie_contrato,
            contratos.subserie_contrato,
            contratos.tipodocumental_contrato,
            contratos.saliente_contrato,
            
            contratos.estado_contrato,
            contratos.tieneanexos_contrato,

            contratistas.id_contratista, 
            contratistas.documento_contratista, 
            contratistas.tipodocumento_contratista, 
            contratistas.nombres_contratista, 
            contratistas.apellidos_contratista, 
            contratistas.telefono_contratista, 
            contratistas.celular_contratista, 
            contratistas.correo_contratista, 
            contratistas.direccion_contratista, 
            contratistas.ciudad_contratista,

            terceros.id_tercero, 
            terceros.documento_tercero, 
            terceros.tipodocumento_tercero, 
            terceros.nombre_tercero,  
            terceros.telefono_tercero, 
            terceros.celular_tercero, 
            terceros.correo_tercero, 
            terceros.direccion_tercero, 
            terceros.ciudad_tercero,

            estadosradicados.id_estado,
            estadosradicados.nombre_estado,

            estados2.id_estado as id_estado2,
            estados2.nombre_estado as nombre_estado2
 
            from contratos 
             left join terceros ON contratos.remitente_contrato = terceros.id_tercero
             left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
             
             left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
             left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
             left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado

                where contratos.id_contrato != '' ".$consulta_estado.$consulta_fecha.$consulta_remitente.$consulta_destinatario;
        
                $consulta = $this->consulta($query);
               return $consulta;       
               
    }  

    function getTodosArchivados() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.estado_contrato = '3' and 
                    (contratos.carpeta_contrato IS NULL or contratos.carpeta_contrato = 0)
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getTodosUsuario() {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where (contratos.carpeta_contrato IS NULL or contratos.carpeta_contrato = 0) and 
                    contratos.responsable_contrato = '".$_SESSION['id_contratista']."'
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    } 


    function getTrazabilidad($radicado_trazabilidad) {
        
        $query = "select 
                    trazabilidad_contratos.id_trazabilidad, 
                    trazabilidad_contratos.radicado_trazabilidad,
                    trazabilidad_contratos.accion_trazabilidad,
                    trazabilidad_contratos.usuario_trazabilidad,
                    trazabilidad_contratos.fecha_trazabilidad,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista
                
                    from trazabilidad_contratos
                            left join contratistas ON trazabilidad_contratos.usuario_trazabilidad = contratistas.id_contratista
                            
                    where trazabilidad_contratos.radicado_trazabilidad = '".$radicado_trazabilidad."'
                    
                    order by trazabilidad_contratos.fecha_trazabilidad desc";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getTodosPorCarpeta($carpeta_contrato) {
        
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado
                            
                    where contratos.carpeta_contrato = '".$carpeta_contrato."'
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }

    function getDatos($id_contrato) {
       
        $query = "select 
                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato,
                    
                    contratos.estado_contrato,
                    contratos.tieneanexos_contrato,

                    contratistas.id_contratista, 
                    contratistas.documento_contratista, 
                    contratistas.tipodocumento_contratista, 
                    contratistas.nombres_contratista, 
                    contratistas.apellidos_contratista, 
                    contratistas.telefono_contratista, 
                    contratistas.celular_contratista, 
                    contratistas.correo_contratista, 
                    contratistas.direccion_contratista, 
                    contratistas.ciudad_contratista,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                        tiposradicado.id_tiporadicado,
                    tiposradicado.id_tiporadicado,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from contratos 
                            left join terceros ON contratos.remitente_contrato = terceros.id_tercero
                            left join contratistas ON contratos.destinatario_contrato = contratistas.id_contratista
                            left join tiposradicado ON contratos.tiporadicado_contrato = tiposradicado.id_tiporadicado
                            left join contratistas as contratistas2 ON contratos.responsable_contrato = contratistas2.id_contratista
                            left join estadosradicados ON contratos.estado_contrato = estadosradicados.id_estado
                            left join estados2 ON contratos.tieneanexos_contrato = estados2.id_estado

                    where contratos.id_contrato='".$id_contrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    
    function getDatosArchivo($id_contrato) {
       
        $query = "select 

                    contratos_archivo.id_archivo,  
                    contratos_archivo.contrato_archivo,
                    contratos_archivo.archivador_archivo, 
                    contratos_archivo.fechainicio_archivo, 
                    contratos_archivo.fechafinal_archivo, 
                    contratos_archivo.unidad_archivo, 
                    contratos_archivo.codigo_archivo, 
                    contratos_archivo.folios_archivo, 
                    contratos_archivo.anexos_archivo, 

                    contratos.id_contrato, 
                    contratos.numero_contrato,
                    contratos.remitente_contrato,
                    contratos.enviadopor_contrato,
                    contratos.destinatario_contrato,
                    contratos.fecharadicado_contrato,
                    contratos.fechamaxima_contrato,
                    contratos.prioridad_contrato,
                    contratos.numerofolios_contrato,
                    contratos.descripcionfolios_contrato,
                    contratos.asunto_contrato,
                    contratos.tiporadicado_contrato,
                    contratos.responsable_contrato,
                    contratos.carpeta_contrato,
                    contratos.serie_contrato,
                    contratos.subserie_contrato,
                    contratos.tipodocumental_contrato,
                    contratos.saliente_contrato
                
                    from contratos_archivo
                            left join contratos ON contratos_archivo.contrato_archivo = contratos.id_contrato

                    where contratos.id_contrato='".$id_contrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
                        $consecutivo_contrato,
                        $numero_contrato,
                        $remitente_contrato,
                        $enviadopor_contrato,
                        $destinatario_contrato,
                        $fecharadicado_contrato,
                        $fechamaxima_contrato,
                        $prioridad_contrato,
                        $numerofolios_contrato,
                        $descripcionfolios_contrato,
                        $asunto_contrato,
                        $tiporadicado_contrato,
                        $responsable_contrato,
                        $serie_contrato,
                        $subserie_contrato,
                        $tipodocumental_contrato,
                        $saliente_contrato,
                        $tieneanexos_contrato
                    ){
                
        $query = "INSERT INTO contratos (
                                consecutivo_contrato,
                                numero_contrato,
                                remitente_contrato,
                                enviadopor_contrato,
                                destinatario_contrato,
                                fecharadicado_contrato,
                                fechamaxima_contrato,
                                prioridad_contrato,
                                numerofolios_contrato,
                                descripcionfolios_contrato,
                                asunto_contrato,
                                tiporadicado_contrato,
                                responsable_contrato,
                                serie_contrato,
                                subserie_contrato,
                                tipodocumental_contrato,
                                saliente_contrato,
                                tieneanexos_contrato
                            )
                            VALUES(
                                '".$consecutivo_contrato."',
                                '".$numero_contrato."',
                                '".$remitente_contrato."',
                                '".$enviadopor_contrato."',
                                '".$destinatario_contrato."',
                                '".$fecharadicado_contrato."',
                                '".$fechamaxima_contrato."',
                                '".$prioridad_contrato."',
                                '".$numerofolios_contrato."',
                                '".$descripcionfolios_contrato."',
                                '".$asunto_contrato."',
                                '".$tiporadicado_contrato."',
                                '".$responsable_contrato."',
                                '".$serie_contrato."',
                                '".$subserie_contrato."',
                                '".$tipodocumental_contrato."',
                                '".$saliente_contrato."',
                                '".$tieneanexos_contrato."'
                            );";
       
       return $this->crear_ultimo_id($query);
        
    }
    
    function editar(
                    $id_contrato, 
                    $numero_contrato,
                    $remitente_contrato,
                    $enviadopor_contrato,
                    $destinatario_contrato,
                    $fecharadicado_contrato,
                    $fechamaxima_contrato,
                    $prioridad_contrato,
                    $numerofolios_contrato,
                    $descripcionfolios_contrato,
                    $asunto_contrato,
                    $tiporadicado_contrato,
                    $responsable_contrato,
                    $serie_contrato,
                    $subserie_contrato,
                    $tipodocumental_contrato,
                    $tieneanexos_contrato
                ) {
        
        $query = "  UPDATE contratos 

                    SET numero_contrato = '". $numero_contrato ."',
                        remitente_contrato = '". $remitente_contrato ."',
                        enviadopor_contrato = '". $enviadopor_contrato ."',
                        destinatario_contrato = '". $destinatario_contrato ."',
                        fecharadicado_contrato = '". $fecharadicado_contrato ."',
                        fechamaxima_contrato = '". $fechamaxima_contrato ."',
                        prioridad_contrato = '". $prioridad_contrato ."',
                        numerofolios_contrato = '". $numerofolios_contrato ."',
                        descripcionfolios_contrato = '". $descripcionfolios_contrato ."',
                        asunto_contrato = '". $asunto_contrato ."',
                        tiporadicado_contrato = '". $tiporadicado_contrato ."',
                        responsable_contrato = '". $responsable_contrato ."',
                        serie_contrato = '". $serie_contrato ."',
                        subserie_contrato = '". $subserie_contrato ."',
                        tipodocumental_contrato = '". $tipodocumental_contrato ."',
                        tieneanexos_contrato = '". $tieneanexos_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
       
        return $this->modificarRegistros($query);
       
    }


    function mover(
                $id_contrato, 
                $carpeta_contrato
    ) {

        $query = "  UPDATE contratos 

                SET carpeta_contrato = '". $carpeta_contrato ."'

                WHERE id_contrato = '" . $id_contrato . "'";

        return $this->modificarRegistros($query);

    }



    function nuevoDocumento(
        $contrato_documento, 
        $nombre_documento
    ) {

        $query = "  INSERT INTO documentos(contrato_documento, nombre_documento)

                VALUES('". $contrato_documento ."', '". $nombre_documento ."')";

        return $this->modificarRegistros($query);

    }


    function mover_default(
                $radicados, 
                $carpeta_contrato
    ) {

        $query = "UPDATE contratos 

                SET carpeta_contrato = '". $carpeta_contrato ."'

                WHERE id_contrato in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }

    
    function cambiar(
                $id_contrato, 
                $responsable_contrato
    ) {

        $query = "  UPDATE contratos 

                SET responsable_contrato = '". $responsable_contrato ."'

                WHERE id_contrato = '" . $id_contrato . "'";

        return $this->modificarRegistros($query);

    }
    

    
    function cambiar_default(
                $radicados, 
                $responsable_contrato
    ) {

        $query = "UPDATE contratos 

                    SET responsable_contrato = '". $responsable_contrato ."'

                    WHERE id_contrato in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }
    
        
    
    function cambiarestado_default(
        $radicados, 
        $estado_contrato
) {

$query = "UPDATE contratos 

            SET estado_contrato = '". $estado_contrato ."'

            WHERE id_contrato in (" . $radicados . ")";

return $this->modificarRegistros($query);

}

    function eliminar($radicados) {
        
        $query = "DELETE FROM contratos WHERE id_contrato IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }
    
        
    function enviarBandejaContrato($radicados) {
        
        $query = "UPDATE contratos SET carpeta_contrato = null WHERE id_contrato IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }
        
    function actualizarSaliente($id_contrato, $saliente_contrato) {
        
        $query = "UPDATE contratos SET saliente_contrato = '".$saliente_contrato."' 
                    WHERE id_contrato = '". $id_contrato ."'";        
        $this->modificarRegistros($query);
        
    }



    /// CONSULTAS EXTRAS

    function buscarRemitente() {
        
        $query = "select terceros.nombre_tercero
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function buscarDestinatario() {
        
        $query = "select CONCAT(contratistas.nombres_contratista, ' ', contratistas.apellidos_contratista) 
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function getConsecutivo() {
        
        $query = "select max(contratos.consecutivo_contrato) as consecutivo
                
                    from contratos";
        
        $consulta = $this->consulta($query);

        if(isset($consulta[0]['consecutivo'])){
            return $consulta[0]['consecutivo'];
        }
               
    }
    

    function getNumeroRadicadosPorResponsable($responsable_contrato) {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos 
                    
                    where responsable_contrato = '".$responsable_contrato."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorDependencia($dependencia_contrato) {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos left join contratistas on contratos.responsable_contrato = contratistas.id_contratista
                    
                    where contratistas.dependencia_contratista = '".$dependencia_contrato."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorTiporadicado($tiporadicado_contrato) {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos 
                    
                    where tiporadicado_contrato = '".$tiporadicado_contrato."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }


    function getNumeroContratos() {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }
               
    }  

    function getNumeroContratosActivos() {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos 
                    
                    where estado_contrato = '1'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }  
               
    }  

    function getNumeroContratosFinalizados() {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos 
                    
                    where estado_contrato = '2'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }      
               
    }

    function getNumeroContratosArchivados() {
        
        $query = "select count(contratos.id_contrato) as numero
                
                    from contratos 
                    
                    where estado_contrato = '3'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }        
               
    }

    
    function getRadicadosPorUsuario() {
        
        $query = "  contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,
                    count(contratos.id_contrato) as cantidad
                
                    from contratos 
                        left join contratistas ON contratos.responsable_contrato = contratistas.id_contratista
                    
                    where ano_contrato = '".$_SESSION['ano']."'
                    
                    group by contratos.responsable_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }
    
    
    function getRadicadosPorDependencias() {
        
        $query = "  dependencias.nombre_dependencia,
                    count(contratos.id_contrato) as cantidad
                
                    from contratos 
                        left join contratistas ON contratos.responsable_contrato = contratistas.id_contratista
                        left join dependencias ON contratistas.dependencia_contratista = dependencias.id_dependencia
                    
                    where ano_contrato = '".$_SESSION['ano']."'
                    
                    group by dependencias.id_dependencia";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function insertar_trazabilidad(
            $radicado_trazabilidad,
            $accion_trazabilidad
    ){

        $query = "INSERT INTO trazabilidad_contratos (
                radicado_trazabilidad,
                accion_trazabilidad,
                fecha_trazabilidad,
                usuario_trazabilidad
            )
            VALUES(
                '".$radicado_trazabilidad."',
                '".$accion_trazabilidad."',
                '".date('Y-m-d H:i:s')."',
                '".$_SESSION['id_contratista']."'
            );";

        return $this->crear_ultimo_id($query);

    }


    

    function insertar_archivar(
        $radicados,
        $archivador,
        $fechainicio,
        $fechafinal,
        $unidad,
        $codigo,
        $folios,
        $anexos
){

    $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){

                $id_contrato = $array[0];

    $query = "INSERT INTO contratos_archivo (
            contrato_archivo,
            archivador_archivo,
            fechainicio_archivo,
            fechafinal_archivo,
            unidad_archivo,
            codigo_archivo,
            folios_archivo,
            anexos_archivo
        )
        VALUES(
            '".$id_contrato."',
            '".$archivador."',
            '".$fechainicio."',
            '".$fechafinal."',
            '".$unidad."',
            '".$codigo."',
            '".$folios."',
            '".$anexos."'
        );";

        $this->crear_ultimo_id($query);

        $query = "  UPDATE contratos 
                SET estado_contrato = '3'
                WHERE id_contrato = '".$id_contrato."'";

        $this->modificarRegistros($query);


    }
    }

}




function guardarDatosArchivo(
    $contrato_archivo, 
    $archivador_archivo,
    $fechainicio_archivo,
    $fechafinal_archivo,
    $unidad_archivo,
    $codigo_archivo,
    $folios_archivo,
    $anexos_archivo
) {

$query = "  UPDATE contratos_archivo

    SET archivador_archivo = '". $archivador_archivo ."',
        fechainicio_archivo = '". $fechainicio_archivo ."',
        fechafinal_archivo = '". $fechafinal_archivo ."',
        unidad_archivo = '". $unidad_archivo ."',
        codigo_archivo = '". $codigo_archivo ."',
        folios_archivo = '". $folios_archivo ."',
        anexos_archivo = '". $anexos_archivo ."'

    WHERE contrato_archivo = '" . $contrato_archivo . "'";

return $this->modificarRegistros($query);

}






}

?>