<?php

class ContratosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 

                    contratos.id_contrato, 
                    contratos.tipo_contrato,
                    contratos.modalidad_contrato,
                    contratos.valor_contrato,
                    contratos.contratista_contrato,
                    contratos.fechainicio_contrato,
                    contratos.fechafinal_contrato,
                    contratos.numero_contrato,
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

                    tiposcontrato.id_tipo, 
                    tiposcontrato.nombre_tipo,

                    estadoscontrato.id_estado, 
                    estadoscontrato.nombre_estado
                
                    from contratos 
                            left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipo
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

    function getDatos($id_contrato) {
       
        $query = "select 

        contratos.id_contrato, 
        contratos.tipo_contrato,
        contratos.modalidad_contrato,
        contratos.valor_contrato,
        contratos.contratista_contrato,
        contratos.fechainicio_contrato,
        contratos.fechafinal_contrato,
        contratos.numero_contrato,
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

        tiposcontrato.id_tipo, 
        tiposcontrato.nombre_tipo,

        estadoscontrato.id_estado, 
        estadoscontrato.nombre_estado
    
        from contratos 
                left join tiposcontrato ON contratos.tipo_contrato = tiposcontrato.id_tipo
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
                    $id_contrato, 
                    $tipo_contrato,
                    $modalidad_contrato,
                    $valor_contrato,
                    $contratista_contrato,
                    $fechainicio_contrato,
                    $fechafinal_contrato,
                    $numero_contrato,
                    $objeto_contrato,
                    $estado_contrato
                    ){
                
        $query = "INSERT INTO contratos (
                        id_contrato, 
                        tipo_contrato,
                        modalidad_contrato,
                        valor_contrato,
                        contratista_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        numero_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                            VALUES(
                                '".$id_contrato."',
                                '".$tipo_contrato."',
                                '".$modalidad_contrato."',
                                '".$valor_contrato."',
                                '".$contratista_contrato."',
                                '".$fechainicio_contrato."',
                                '".$fechafinal_contrato."',
                                '".$numero_contrato."',
                                '".$objeto_contrato."',
                                '".$estado_contrato."'
                            );";
       
       return $this->crear_ultimo_id($query);
        
    }
    
    function editar(
                    $id_contrato, 
                    $tipo_contrato,
                    $modalidad_contrato,
                    $valor_contrato,
                    $contratista_contrato,
                    $fechainicio_contrato,
                    $fechafinal_contrato,
                    $numero_contrato,
                    $objeto_contrato,
                    $estado_contrato
                ) {
        
        $query = "  UPDATE contratos 

                    SET tipo_contrato = '". $tipo_contrato ."',
                        modalidad_contrato = '". $modalidad_contrato ."',
                        valor_contrato = '". $valor_contrato ."',
                        contratista_contrato = '". $contratista_contrato ."',
                        fechainicio_contrato = '". $fechainicio_contrato ."',
                        fechafinal_contrato = '". $fechafinal_contrato ."',
                        numero_contrato = '". $numero_contrato ."',
                        objeto_contrato = '". $objeto_contrato ."',
                        estado_contrato = '". $estado_contrato ."'

                    WHERE id_contrato = '" . $id_contrato . "'";
       
        return $this->modificarRegistros($query);
       
    }



}

?>