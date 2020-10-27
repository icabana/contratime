<?php

class AlertasModel extends ModelBase {
  
    
    function getContratosxFinalizar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdefinalizarcontrato");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                contratos.id_contrato, 
                contratos.tipo_contrato,
                contratos.modalidad_contrato,
                contratos.valor_contrato,
                contratos.valproceso_contrato,
                contratos.contratista_contrato,
                contratos.fechainicio_contrato,
                contratos.fechafinal_contrato,
                contratos.favisoproceso_contrato,
                contratos.fevaluacionproceso_contrato,
                contratos.fevaluacionproceso2_contrato,
                contratos.fadjudicacionproceso_contrato,
                contratos.fcierreproceso_contrato,
                contratos.hcierreproceso_contrato,
                contratos.numero_contrato,
                contratos.numproceso_contrato,
                contratos.objeto_contrato,
                contratos.estado_contrato,


                contratistas.id_contratista, 

                contratistas.tipo_contratista,
                contratistas.tipodocumento_contratista,
                contratistas.documento_contratista,
                contratistas.nombre_contratista,

                contratistas.dirresidencia_contratista,
                contratistas.dircorrespondencia_contratista,
                contratistas.telefono_contratista,
                contratistas.celular_contratista,
                contratistas.correo_contratista,
                contratistas.paginaweb_contratista,

                contratistas.pais_contratista,
                contratistas.departamento_contratista,
                contratistas.municipio_contratista,

                contratistas.fechanacimiento_contratista,

                contratistas.genero_contratista,
                contratistas.estadocivil_contratista,
                contratistas.profesion_contratista,

                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.codigo3_pais,
                paises.nombre_pais,
                departamentos.nombre_departamento,
                municipios.nombre_municipio,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado,

                modalidades.id_modalidad, 
                modalidades.nombre_modalidad,

                tiposcontrato.id_tipocontrato, 
                tiposcontrato.nombre_tipocontrato,

                estadoscontrato.id_estado, 
                estadoscontrato.nombre_estado as nombreestado_contrato
        
                FROM contratos 
                        left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                        left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                        left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                        left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                        left join paises on contratistas.pais_contratista = paises.id_pais       
                        left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                        left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                        left join generos on contratistas.genero_contratista = generos.id_genero
                        left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                        left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                        left join estados on contratistas.estado_contratista = estados.id_estado
                        left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE DATEDIFF(contratos.fechafinal_contrato, '".$fecha_actual."') < ".$dias." and 
                                contratos.estado_contrato >= 3 and
                            contratos.fechafinal_contrato >= '".$fecha_actual."' and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
  
     
    function getContratosSupervisorxFinalizar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdefinalizarcontrato");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                contratos.id_contrato, 
                contratos.tipo_contrato,
                contratos.modalidad_contrato,
                contratos.valor_contrato,
                contratos.valproceso_contrato,
                contratos.contratista_contrato,
                contratos.fechainicio_contrato,
                contratos.fechafinal_contrato,
                contratos.favisoproceso_contrato,
                contratos.fevaluacionproceso_contrato,
                contratos.fevaluacionproceso2_contrato,
                contratos.fadjudicacionproceso_contrato,
                contratos.fcierreproceso_contrato,
                contratos.hcierreproceso_contrato,
                contratos.numero_contrato,
                contratos.numproceso_contrato,
                contratos.objeto_contrato,
                contratos.estado_contrato,


                contratistas.id_contratista, 

                contratistas.tipo_contratista,
                contratistas.tipodocumento_contratista,
                contratistas.documento_contratista,
                contratistas.nombre_contratista,

                contratistas.dirresidencia_contratista,
                contratistas.dircorrespondencia_contratista,
                contratistas.telefono_contratista,
                contratistas.celular_contratista,
                contratistas.correo_contratista,
                contratistas.paginaweb_contratista,

                contratistas.pais_contratista,
                contratistas.departamento_contratista,
                contratistas.municipio_contratista,

                contratistas.fechanacimiento_contratista,

                contratistas.genero_contratista,
                contratistas.estadocivil_contratista,

                contratistas.profesion_contratista,

                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.codigo3_pais,
                paises.nombre_pais,
                departamentos.nombre_departamento,
                municipios.nombre_municipio,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado,

                modalidades.id_modalidad, 
                modalidades.nombre_modalidad,

                tiposcontrato.id_tipocontrato, 
                tiposcontrato.nombre_tipocontrato,

                estadoscontrato.id_estado, 
                estadoscontrato.nombre_estado as nombreestado_contrato
        
                FROM contratos 
                        left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                        left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                        left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                        left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                        left join paises on contratistas.pais_contratista = paises.id_pais       
                        left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                        left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                        left join generos on contratistas.genero_contratista = generos.id_genero
                        left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                        left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                        left join estados on contratistas.estado_contratista = estados.id_estado
                        left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE DATEDIFF(contratos.fechafinal_contrato, '".$fecha_actual."') < ".$dias." and 
                                contratos.estado_contrato >= 3 and
                            contratos.fechafinal_contrato >= '".$fecha_actual."' and 
                            id_contrato in (select contrato_supervisor 
                            from contratos_supervisores left join supervisores 
                                on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                            where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."') and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
  

    function getContratosxFinalizarXContratista() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdefinalizarcontrato");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                contratos.id_contrato, 
                contratos.tipo_contrato,
                contratos.modalidad_contrato,
                contratos.valor_contrato,
                contratos.valproceso_contrato,
                contratos.contratista_contrato,
                contratos.fechainicio_contrato,
                contratos.fechafinal_contrato,
                contratos.favisoproceso_contrato,
                contratos.fevaluacionproceso_contrato,
                contratos.fevaluacionproceso2_contrato,
                contratos.fadjudicacionproceso_contrato,
                contratos.fcierreproceso_contrato,
                contratos.hcierreproceso_contrato,
                contratos.numero_contrato,
                contratos.numproceso_contrato,
                contratos.objeto_contrato,
                contratos.estado_contrato,


                contratistas.id_contratista, 

                contratistas.tipo_contratista,
                contratistas.tipodocumento_contratista,
                contratistas.documento_contratista,
                contratistas.nombre_contratista,

                contratistas.dirresidencia_contratista,
                contratistas.dircorrespondencia_contratista,
                contratistas.telefono_contratista,
                contratistas.celular_contratista,
                contratistas.correo_contratista,
                contratistas.paginaweb_contratista,

                contratistas.pais_contratista,
                contratistas.departamento_contratista,
                contratistas.municipio_contratista,

                contratistas.fechanacimiento_contratista,

                contratistas.genero_contratista,
                contratistas.estadocivil_contratista,

                contratistas.profesion_contratista,

                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.codigo3_pais,
                paises.nombre_pais,
                departamentos.nombre_departamento,
                municipios.nombre_municipio,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado,

                modalidades.id_modalidad, 
                modalidades.nombre_modalidad,

                tiposcontrato.id_tipocontrato, 
                tiposcontrato.nombre_tipocontrato,

                estadoscontrato.id_estado, 
                estadoscontrato.nombre_estado as nombreestado_contrato
        
                FROM contratos 
                        left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                        left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                        left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                        left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                        left join paises on contratistas.pais_contratista = paises.id_pais       
                        left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                        left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                        left join generos on contratistas.genero_contratista = generos.id_genero
                        left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                        left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                        left join estados on contratistas.estado_contratista = estados.id_estado
                        left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                    WHERE contratistas.documento_contratista = '".$_SESSION['documento_usuario']."' and
                    
                            DATEDIFF(contratos.fechafinal_contrato, '".$fecha_actual."') < ".$dias." and 
                                contratos.estado_contrato >= 3 and
                            contratos.fechafinal_contrato >= '".$fecha_actual."' and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    
    function getContratosFinalizadosSinPagar() {
        
        $params = new Parametros();

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                      
                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombre_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,

                    contratistas.profesion_contratista,

                        estadoscontrato.id_estado, 
                        estadoscontrato.nombre_estado,

                        (select sum(contratos_pagos.valor_pago) from contratos_pagos where contrato_pago = contratos.id_contrato) as total_pagos
                
                        FROM contratos                             
                                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  
                                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                        WHERE contratos.fechafinal_contrato < '".$fecha_actual."' and contratos.estado_contrato = 3 and

                        (contratos.valor_contrato > (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato)  or  (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato) is null)  and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'

                    ";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

      
     
    function getContratosSupervisorFinalizadosSinPagar() {
        
        $params = new Parametros();

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                      
                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombre_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,

                    contratistas.profesion_contratista,

                        estadoscontrato.id_estado, 
                        estadoscontrato.nombre_estado,

                        (select sum(contratos_pagos.valor_pago) from contratos_pagos where contrato_pago = contratos.id_contrato) as total_pagos
                
                        FROM contratos                             
                                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  
                                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                        WHERE contratos.fechafinal_contrato < '".$fecha_actual."' and contratos.estado_contrato = 3 and

                                (contratos.valor_contrato > (select sum(contratos_pagos.valor_pago) as total 
                                        from contratos_pagos where contrato_pago = contratos.id_contrato)  
                                                or  (select sum(contratos_pagos.valor_pago) as total from contratos_pagos 
                                                where contrato_pago = contratos.id_contrato) is null) and 
                            id_contrato in (select contrato_supervisor 
                        from contratos_supervisores left join supervisores 
                            on contratos_supervisores.supervisor_supervisor = supervisores.id_supervisor
                        where supervisores.documento_supervisor = '".$_SESSION['documento_usuario']."') and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

      

    function getContratosFinalizadosSinPagarXContratista() {
        
        $params = new Parametros();

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

                      
                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.valproceso_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.favisoproceso_contrato,
                    contratos.fevaluacionproceso_contrato,
                    contratos.fevaluacionproceso2_contrato,
                    contratos.fadjudicacionproceso_contrato,
                    contratos.fcierreproceso_contrato,
                    contratos.hcierreproceso_contrato,
                    contratos.numero_contrato,
                    contratos.numproceso_contrato,
                    contratos.objeto_contrato,
                    contratos.estado_contrato,


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombre_contratista,

                    contratistas.dirresidencia_contratista,
                    contratistas.dircorrespondencia_contratista,
                    contratistas.telefono_contratista,
                    contratistas.celular_contratista,
                    contratistas.correo_contratista,
                    contratistas.paginaweb_contratista,

                    contratistas.pais_contratista,
                    contratistas.departamento_contratista,
                    contratistas.municipio_contratista,

                    contratistas.fechanacimiento_contratista,

                    contratistas.genero_contratista,
                    contratistas.estadocivil_contratista,

                    contratistas.profesion_contratista,

                        estadoscontrato.id_estado, 
                        estadoscontrato.nombre_estado,

                        (select sum(contratos_pagos.valor_pago) from contratos_pagos where contrato_pago = contratos.id_contrato) as total_pagos
                
                        FROM contratos                             
                                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  
                                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado

                        WHERE 
                            contratistas.documento_contratista = '".$_SESSION['documento_usuario']."' and
                        
                            contratos.fechafinal_contrato < '".$fecha_actual."' and contratos.estado_contrato = 3 and

                        (contratos.valor_contrato > (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato)  or  (select sum(contratos_pagos.valor_pago) as total from contratos_pagos where contrato_pago = contratos.id_contrato) is null) and 
                            contratos.estado_contrato != '6' and 
                            contratos.estado_contrato != '5'

                    ";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    
    

    function getProcesosxEvaluar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdeevaluarproceso");

        $fecha_actual = date("Y-m-d");

        $query = "SELECT 

        contratos.id_contrato, 
        contratos.tipo_contrato,
        contratos.modalidad_contrato,
        contratos.valor_contrato,
        contratos.valproceso_contrato,
        contratos.contratista_contrato,
        contratos.fechainicio_contrato,
        contratos.fechafinal_contrato,
        contratos.favisoproceso_contrato,
        contratos.fevaluacionproceso_contrato,
        contratos.fevaluacionproceso2_contrato,
        contratos.fadjudicacionproceso_contrato,
        contratos.fcierreproceso_contrato,
        contratos.hcierreproceso_contrato,
        contratos.numero_contrato,
        contratos.numproceso_contrato,
        contratos.objeto_contrato,
        contratos.estado_contrato,


        contratistas.id_contratista, 

        contratistas.tipo_contratista,
        contratistas.tipodocumento_contratista,
        contratistas.documento_contratista,
        contratistas.nombre_contratista,

        contratistas.dirresidencia_contratista,
        contratistas.dircorrespondencia_contratista,
        contratistas.telefono_contratista,
        contratistas.celular_contratista,
        contratistas.correo_contratista,
        contratistas.paginaweb_contratista,

        contratistas.pais_contratista,
        contratistas.departamento_contratista,
        contratistas.municipio_contratista,

        contratistas.fechanacimiento_contratista,

        contratistas.genero_contratista,
        contratistas.estadocivil_contratista,

        contratistas.profesion_contratista,

        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.codigo3_pais,
        paises.nombre_pais,
        departamentos.nombre_departamento,
        municipios.nombre_municipio,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado,

        modalidades.id_modalidad, 
        modalidades.nombre_modalidad,

        tiposcontrato.id_tipocontrato, 
        tiposcontrato.nombre_tipocontrato,

        estadoscontrato.id_estado, 
        estadoscontrato.nombre_estado as nombreestado_contrato

        FROM contratos 
                left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                left join paises on contratistas.pais_contratista = paises.id_pais       
                left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                left join generos on contratistas.genero_contratista = generos.id_genero
                left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                left join estados on contratistas.estado_contratista = estados.id_estado
                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado


                    WHERE DATEDIFF(contratos.fevaluacionproceso2_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fevaluacionproceso2_contrato >= '".$fecha_actual."' and 
                            (contratos.estado_contrato = '1' or 
                            contratos.estado_contrato = '2')";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    
    function getProcesosxCerrar() {
        
        $params = new Parametros();

        $dias = $params->valor("diasantesdecerrarproceso");

        $fecha_actual = date("Y-m-d");
        $hora_actual = date("H:i");
        $hora = strtotime('-5 hour', strtotime($hora_actual));
        $hora_actual = date("H:i:s", $hora);


        $query = "SELECT 

        contratos.id_contrato, 
        contratos.tipo_contrato,
        contratos.modalidad_contrato,
        contratos.valor_contrato,
        contratos.valproceso_contrato,
        contratos.contratista_contrato,
        contratos.fechainicio_contrato,
        contratos.fechafinal_contrato,
        contratos.favisoproceso_contrato,
        contratos.fevaluacionproceso_contrato,
        contratos.fevaluacionproceso2_contrato,
        contratos.fadjudicacionproceso_contrato,
        contratos.fcierreproceso_contrato,
        contratos.hcierreproceso_contrato,
        contratos.numero_contrato,
        contratos.numproceso_contrato,
        contratos.objeto_contrato,
        contratos.estado_contrato,


        contratistas.id_contratista, 

        contratistas.tipo_contratista,
        contratistas.tipodocumento_contratista,
        contratistas.documento_contratista,
        contratistas.nombre_contratista,

        contratistas.dirresidencia_contratista,
        contratistas.dircorrespondencia_contratista,
        contratistas.telefono_contratista,
        contratistas.celular_contratista,
        contratistas.correo_contratista,
        contratistas.paginaweb_contratista,

        contratistas.pais_contratista,
        contratistas.departamento_contratista,
        contratistas.municipio_contratista,

        contratistas.fechanacimiento_contratista,

        contratistas.genero_contratista,
        contratistas.estadocivil_contratista,

        contratistas.profesion_contratista,

        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.codigo3_pais,
        paises.nombre_pais,
        departamentos.nombre_departamento,
        municipios.nombre_municipio,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado,

        modalidades.id_modalidad, 
        modalidades.nombre_modalidad,

        tiposcontrato.id_tipocontrato, 
        tiposcontrato.nombre_tipocontrato,

        estadoscontrato.id_estado, 
        estadoscontrato.nombre_estado as nombreestado_contrato

        FROM contratos 
                left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipocontrato
                left join modalidades ON contratos.modalidad_contrato = modalidades.id_modalidad
                left join contratistas ON contratos.contratista_contrato = contratistas.id_contratista  left join tipospersona on contratistas.tipo_contratista = tipospersona.id_tipopersona
                left join tiposdocumento on contratistas.tipodocumento_contratista = tiposdocumento.id_tipodocumento
                left join paises on contratistas.pais_contratista = paises.id_pais       
                left join departamentos on contratistas.departamento_contratista = departamentos.id_departamento
                left join municipios on contratistas.municipio_contratista = municipios.id_municipio
                left join generos on contratistas.genero_contratista = generos.id_genero
                left join estadoscivil on contratistas.estadocivil_contratista = estadoscivil.id_estadocivil
                left join profesiones on contratistas.profesion_contratista = profesiones.id_profesion
                left join estados on contratistas.estado_contratista = estados.id_estado
                left join estadoscontrato ON contratos.estado_contrato = estadoscontrato.id_estado


                    WHERE DATEDIFF(contratos.fcierreproceso_contrato, '".$fecha_actual."') < ".$dias." and 
                            contratos.fcierreproceso_contrato >= '".$fecha_actual."' and 
                            contratos.hcierreproceso_contrato >= '".$hora_actual."' and
                            (contratos.estado_contrato = '1' or 
                            contratos.estado_contrato = '2')";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

  
    
}

?>