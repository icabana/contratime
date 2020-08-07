<?php

class PerfilesModel extends ModelBase {
      
    
    function getTodos($usuario_perfil) {
       
        $query = "select 	
                    perfiles.id_perfil, 
                    perfiles.usuario_perfil, 
                    perfiles.rol_perfil,

                    roles.id_rol,
                    roles.nombre_rol
                
                    from perfiles LEFT JOIN roles on perfiles.rol_perfil = roles.id_rol

                    where perfiles.usuario_perfil='".$usuario_perfil."'";
        
         $consulta = $this->consulta($query);
        return $consulta;    
        
    }
    

    function insertar(                               
                        $usuario_perfil,
                        $rol_perfil
                    ){
                
        $query_insertar = "INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '".utf8_decode($usuario_perfil)."',
                                '".$rol_perfil."'
                            );";
       
        return $this->crear_ultimo_id($query_insertar);       
        
    }    

     
    function eliminar(                               
                        $usuario_perfil
                    ){

        $query_eliminar = "DELETE FROM perfiles WHERE usuario_perfil = '". $usuario_perfil ."'";        
       
        return $this->modificarRegistros($query_eliminar);

    }      

}       

?>