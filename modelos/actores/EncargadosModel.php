<?php

class EncargadosModel extends ModelBase {  

    function getTodos() {        

        $query = "

            SELECT 	
                encargados.id_encargado, 

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


                encargados.genero_encargado,
                encargados.estadocivil_encargado,

                encargados.profesion_encargado,
            
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

                estados.nombre_estado

            FROM encargados
                    
                left join tipospersona on encargados.tipo_encargado = tipospersona.id_tipopersona
                left join tiposdocumento on encargados.tipodocumento_encargado = tiposdocumento.id_tipodocumento
                left join paises on encargados.pais_encargado = paises.id_pais       
                left join departamentos on encargados.departamento_encargado = departamentos.id_departamento
                left join municipios on encargados.municipio_encargado = municipios.id_municipio
                left join generos on encargados.genero_encargado = generos.id_genero
                left join estadoscivil on encargados.estadocivil_encargado = estadoscivil.id_estadocivil
                left join profesiones on encargados.profesion_encargado = profesiones.id_profesion
                left join estados on encargados.estado_encargado = estados.id_estado
                
                ORDER BY encargados.nombres_encargado";

        $consulta = $this->consulta($query);
        return $consulta;                    

    }  
  

    function getLIKE($texto) {       

        $query = "

        select 	
                encargados.id_encargado, 

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
                

                encargados.genero_encargado,
                encargados.estadocivil_encargado,
                encargados.profesion_encargado,
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from encargados
                    
                left join tipospersona on encargados.tipo_encargado = tipospersona.id_tipopersona
                left join tiposdocumento on encargados.tipodocumento_encargado = tiposdocumento.id_tipodocumento
                left join paises on encargados.pais_encargado = paises.id_pais       
                left join departamentos on encargados.departamento_encargado = departamentos.id_departamento
                left join municipios on encargados.municipio_encargado = municipios.id_municipio
                left join generos on encargados.genero_encargado = generos.id_genero
                left join estadoscivil on encargados.estadocivil_encargado = estadoscivil.id_estadocivil
                left join profesiones on encargados.profesion_encargado = profesiones.id_profesion
                left join estados on encargados.estado_encargado = estados.id_estado

                    where encargados.NOMBRE_encargado LIKE '%".$texto."%'" ;        

        $consulta = $this->consulta($query);
        return $consulta;                     

    }  
  

    function getDatos($id_encargado) {       

     $query = "
                select 	
                encargados.id_encargado, 

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
                

                encargados.genero_encargado,
                encargados.estadocivil_encargado,

                encargados.profesion_encargado,
            
                tiposdocumento.codigo_tipodocumento,
                tiposdocumento.nombre_tipodocumento,

                paises.nombre_pais,

                generos.nombre_genero,

                estadoscivil.nombre_estadocivil,

                profesiones.nombre_profesion,

                tipospersona.nombre_tipopersona,

                estados.nombre_estado

            from encargados
                    
                left join tipospersona on encargados.tipo_encargado = tipospersona.id_tipopersona
                left join tiposdocumento on encargados.tipodocumento_encargado = tiposdocumento.id_tipodocumento
                left join paises on encargados.pais_encargado = paises.id_pais       
                left join departamentos on encargados.departamento_encargado = departamentos.id_departamento
                left join municipios on encargados.municipio_encargado = municipios.id_municipio
                left join generos on encargados.genero_encargado = generos.id_genero
                left join estadoscivil on encargados.estadocivil_encargado = estadoscivil.id_estadocivil
                left join profesiones on encargados.profesion_encargado = profesiones.id_profesion
                left join estados on encargados.estado_encargado = estados.id_estado

            where encargados.id_encargado='".$id_encargado."'";        

        $consulta = $this->consulta($query);
        return $consulta[0];            

    }   

    
    function getDatosxDocumento($documento_encargado) {       

        $query = "
                   select 	
                   encargados.id_encargado, 
   
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
                   
   
                   encargados.genero_encargado,
                   encargados.estadocivil_encargado,
   
                   encargados.profesion_encargado,
               
                   tiposdocumento.codigo_tipodocumento,
                   tiposdocumento.nombre_tipodocumento,
   
                   paises.nombre_pais,
   
                   generos.nombre_genero,
   
                   estadoscivil.nombre_estadocivil,
   
                   profesiones.nombre_profesion,
   
                   tipospersona.nombre_tipopersona,
   
                   estados.nombre_estado
   
               from encargados
                       
                   left join tipospersona on encargados.tipo_encargado = tipospersona.id_tipopersona
                   left join tiposdocumento on encargados.tipodocumento_encargado = tiposdocumento.id_tipodocumento
                   left join paises on encargados.pais_encargado = paises.id_pais       
                   left join departamentos on encargados.departamento_encargado = departamentos.id_departamento
                   left join municipios on encargados.municipio_encargado = municipios.id_municipio
                   left join generos on encargados.genero_encargado = generos.id_genero
                   left join estadoscivil on encargados.estadocivil_encargado = estadoscivil.id_estadocivil
                   left join profesiones on encargados.profesion_encargado = profesiones.id_profesion
                   left join estados on encargados.estado_encargado = estados.id_estado
   
               where encargados.documento_encargado='".$documento_encargado."'";        
   
           $consulta = $this->consulta($query);
           return $consulta[0];            
   
       }   

    
    function getDatosPorCampo($campo, $valor) {       

        $query = "
        select 	
        encargados.id_encargado, 

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
        

        encargados.genero_encargado,
        encargados.estadocivil_encargado,

        encargados.profesion_encargado,
    
        tiposdocumento.codigo_tipodocumento,
        tiposdocumento.nombre_tipodocumento,

        paises.nombre_pais,

        generos.nombre_genero,

        estadoscivil.nombre_estadocivil,

        profesiones.nombre_profesion,

        tipospersona.nombre_tipopersona,

        estados.nombre_estado

    from encargados
            
        left join tipospersona on encargados.tipo_encargado = tipospersona.id_tipopersona
        left join tiposdocumento on encargados.tipodocumento_encargado = tiposdocumento.id_tipodocumento
        left join paises on encargados.pais_encargado = paises.id_pais       
        left join departamentos on encargados.departamento_encargado = departamentos.id_departamento
        left join municipios on encargados.municipio_encargado = municipios.id_municipio
        left join generos on encargados.genero_encargado = generos.id_genero
        left join estadoscivil on encargados.estadocivil_encargado = estadoscivil.id_estadocivil
        left join profesiones on encargados.profesion_encargado = profesiones.id_profesion
        left join estados on encargados.estado_encargado = estados.id_estado
                
               where encargados.".$campo."='".$valor."'";        
   
           $consulta = $this->consulta($query);
           return $consulta;            
   
       }   
   
   

    function insertar(
        $tipo_encargado,    
        $tipodocumento_encargado,
        $documento_encargado,
        $nombres_encargado,
        $apellidos_encargado,

        $dirresidencia_encargado,
        $dircorrespondencia_encargado,
        $telefono_encargado,
        $celular_encargado,
        $correo_encargado,
        $paginaweb_encargado,

        $pais_encargado,
        $departamento_encargado,
        $municipio_encargado,


        $genero_encargado,
        $estadocivil_encargado,

        $profesion_encargado
    ) {
               
    $query = "
        INSERT INTO encargados (

            tipo_encargado,
            tipodocumento_encargado,
            documento_encargado,
            nombres_encargado,
            apellidos_encargado,

            dirresidencia_encargado,
            dircorrespondencia_encargado,                            
            telefono_encargado,
            celular_encargado,
            correo_encargado,
            paginaweb_encargado,

            pais_encargado,
            departamento_encargado,
            municipio_encargado,


            genero_encargado,
            estadocivil_encargado,

            profesion_encargado
        )

        VALUES(
            '". $tipo_encargado."',
            '". $tipodocumento_encargado."', 
            '". $documento_encargado."',
            '". strtoupper(utf8_decode($nombres_encargado))."', 
            '". strtoupper(utf8_decode($apellidos_encargado))."', 

            '". utf8_decode($dirresidencia_encargado)."', 
            '". utf8_decode($dircorrespondencia_encargado)."', 
            '". $telefono_encargado."', 
            '". $celular_encargado."',
            '". $correo_encargado."', 
            '". $paginaweb_encargado."',

            '". $pais_encargado."', 
            '". $departamento_encargado."', 
            '". $municipio_encargado."', 

            '". $genero_encargado."',
            '". $estadocivil_encargado."',

            '". $profesion_encargado."'

        );";


        return $this->crear_ultimo_id($query);


    }


    function editar(

        $id_encargado,

        $tipo_encargado,    
        $tipodocumento_encargado,
        $documento_encargado,
        $nombres_encargado,
        $apellidos_encargado,

        $dirresidencia_encargado,
        $dircorrespondencia_encargado,
        $telefono_encargado,
        $celular_encargado,
        $correo_encargado,
        $paginaweb_encargado,

        $pais_encargado,
        $departamento_encargado,
        $municipio_encargado,

        
        $genero_encargado,
        $estadocivil_encargado,

        $profesion_encargado

    ) {

    $query = "  
        UPDATE encargados  
               
        SET 
        
        tipo_encargado = '".$tipo_encargado."',
        tipodocumento_encargado = '".$tipodocumento_encargado."', 
        documento_encargado = '".$documento_encargado."', 
        nombres_encargado = '".strtoupper(utf8_decode($nombres_encargado))."',
        apellidos_encargado = '".strtoupper(utf8_decode($apellidos_encargado))."', 

        dirresidencia_encargado = '".utf8_decode($dirresidencia_encargado)."', 
        dircorrespondencia_encargado = '".utf8_decode($dircorrespondencia_encargado)."', 
        telefono_encargado = '".$telefono_encargado."', 
        celular_encargado = '".$celular_encargado."', 
        correo_encargado = '".$correo_encargado."', 
        paginaweb_encargado = '".$paginaweb_encargado."',

        pais_encargado = '".$pais_encargado."', 
        departamento_encargado = '".$departamento_encargado."', 
        municipio_encargado = '".$municipio_encargado."', 


        genero_encargado = '".$genero_encargado."', 
        estadocivil_encargado = '".$estadocivil_encargado."', 
        
        profesion_encargado = '".$profesion_encargado."'

        WHERE id_encargado = '" . $id_encargado . "'";

       return $this->modificarRegistros($query);       
      
    }


    function eliminar($id_encargado) {

        $query = "DELETE FROM encargados WHERE id_encargado = '". $id_encargado ."'";

        $this->modificarRegistros($query);

    }

}







?>