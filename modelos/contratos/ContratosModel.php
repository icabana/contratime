<?php

class ContratosModel extends ModelBase {

  
    function getTodos() {
        
        $query = "select 

                    contratos.id_contrato, 
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


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    contratistas.hijos_contratista,

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
                    estadoscontrato.nombre_estado
                
                    from contratos 
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
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getTodosxEstado($estado_contrato) {
        
        $query = "SELECT 

                    contratos.id_contrato, 
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


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    contratistas.hijos_contratista,

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
                    estadoscontrato.nombre_estado
                
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

                    WHERE estado_contrato = '".$estado_contrato."' 
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    
    function getTodosAvanzada($modalidad, $tipocontrato, $fechainicio, $fechafinal, $array_rango) {

        $where = "WHERE valor_contrato between '".$array_rango[0]."' and '".$array_rango[1]."' ";

        if($modalidad != 0){
            $where .= " and modalidad_contrato = '".$modalidad."' ";
        }
        if($tipocontrato != 0){          
            $where .= " and tipo_contrato = '".$tipocontrato."' ";           
        }
        if($fechainicio != "" && $fechafinal != ""){           
                $where .= " AND  (fechainicio_contrato BETWEEN '".$fechainicio."' AND '".$fechafinal."')";            
        }
        
        $query = "SELECT 

                    contratos.id_contrato, 
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


                    contratistas.id_contratista, 

                    contratistas.tipo_contratista,
                    contratistas.tipodocumento_contratista,
                    contratistas.documento_contratista,
                    contratistas.nombres_contratista,
                    contratistas.apellidos_contratista,

                    concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
                    contratistas.hijos_contratista,

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
                    estadoscontrato.nombre_estado
                
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

                     ".$where."
                    
                    order by contratos.numero_contrato";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_contrato) {
       
        $query = "select 

        contratos.id_contrato, 
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


        contratistas.id_contratista, 

        contratistas.tipo_contratista,
        contratistas.tipodocumento_contratista,
        contratistas.documento_contratista,
        contratistas.nombres_contratista,
        contratistas.apellidos_contratista,

        concat( contratistas.nombres_contratista,' ',contratistas.apellidos_contratista) as nombre_contratista,

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
        contratistas.hijos_contratista,

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
        estadoscontrato.nombre_estado
    
        from contratos 
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
                
                where contratos.id_contrato='".$id_contrato."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
        $numproceso_contrato,
        $valproceso_contrato,
        $fadjudicacionproceso_contrato,
        $fcierreproceso_contrato,
        $modalidad_contrato,
        $tipo_contrato,
        $objeto_contrato
    ){
                
        $query = "INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '".$numproceso_contrato."',
                        '".$valproceso_contrato."',
                        '".$fadjudicacionproceso_contrato."',
                        '".$fcierreproceso_contrato."',
                        '".$modalidad_contrato."',
                        '".$tipo_contrato."',
                        '".$objeto_contrato."',
                        '1'
                    );";
       
        return $this->crear_ultimo_id($query);
        
    }
    

    function editar(
                    $id_contrato, 
                    $numproceso_contrato,
                    $valproceso_contrato,
                    $fadjudicacionproceso_contrato,
                    $fcierreproceso_contrato,
                    $modalidad_contrato,
                    $tipo_contrato,
                    $objeto_contrato
                ) {
        
        $query = "  UPDATE contratos 

                    SET numproceso_contrato = '". $numproceso_contrato ."',
                        valproceso_contrato = '". $valproceso_contrato ."',
                        fadjudicacionproceso_contrato = '". $fadjudicacionproceso_contrato ."',
                        fcierreproceso_contrato = '". $fcierreproceso_contrato ."',
                        modalidad_contrato = '". $modalidad_contrato ."',
                        tipo_contrato = '". $tipo_contrato ."',
                        objeto_contrato = '". $objeto_contrato ."',
                        objeto_contrato = '". $objeto_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
       
        return $this->modificarRegistros($query);
       
    }

    
    
    function eliminar($id_contrato) {
        
        $query = "DELETE FROM contratos WHERE id_contrato = '". $id_contrato ."'";    

        $this->modificarRegistros($query);
        
    }

    
    function descartar($id_contrato) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '5'
                    WHERE id_contrato = '". $id_contrato ."'";    

        $this->modificarRegistros($query);
        
    }

    
    function liquidar($id_contrato) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '4'
                    WHERE id_contrato = '". $id_contrato ."'";    

        $this->modificarRegistros($query);
        
    }
    
    function adjudicar($id_contrato, $contratista) {
        
        $query = "  UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '".$contratista."'
                    WHERE id_contrato = '". $id_contrato ."'";    

        $this->modificarRegistros($query);
        
    }
    
    function celebrar($id_contrato, $numero, $fechainicio, $fechafinal, $valor) {
        
        $query = "  UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '".$numero."',
                        fechainicio_contrato = '".$fechainicio."',
                        fechafinal_contrato = '".$fechafinal."',
                        valor_contrato = '".$valor."'

                    WHERE id_contrato = '". $id_contrato ."'";    

        $this->modificarRegistros($query);
        
    }


    
    function getNumConvocados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '1'";
        
        $consulta = $this->consulta($query);

        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumAdjudicados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    WHERE estado_contrato = '2'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumCelebrados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '3'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    
    function getNumLiquidados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '4'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

    
    function getNumDescartados() {
        
        $query = "  SELECT count(*) as numero
                
                    FROM contratos 
                    
                    where estado_contrato = '5'";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0]['numero'];       
               
    }  

}

?>