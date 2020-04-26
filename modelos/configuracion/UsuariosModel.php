<?php

class UsuariosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    usuarios.id_usuario, 
                    usuarios.documento_usuario, 
                    usuarios.password_usuario,
                    usuarios.correo_usuario,
                    usuarios.estado_usuario
                
                    from usuarios";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_usuario) {
       
        $query = "select 	
                    usuarios.id_usuario, 
                    usuarios.documento_usuario, 
                    usuarios.password_usuario,                    
                    usuarios.correo_usuario,
                    usuarios.estado_usuario
                
                    from usuarios 

                    where usuarios.id_usuario='".$id_usuario."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function getDatosxDocumento($documento_usuario) {
       
        $query = "select 	
                    usuarios.id_usuario, 
                    usuarios.documento_usuario, 
                    usuarios.password_usuario,                    
                    usuarios.correo_usuario,
                    usuarios.estado_usuario
                
                    from usuarios 

                    where usuarios.documento_usuario='".$documento_usuario."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $documento_usuario, 
                        $password_usuario,
                        $correo_usuario
                    ){
                
        $query = "INSERT INTO usuarios (
                        documento_usuario, 
                        password_usuario,                        
                        correo_usuario,
                        estado_usuario
                    )
                    VALUES(
                        '".$documento_usuario."', 
                        '".md5($password_usuario)."',
                        '".$correo_usuario."',
                        'A'
                    );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_usuario, 
                    $password_usuario, 
                    $password2_usuario, 
                    $correo_usuario, 
                    $estado_usuario
                ) {
        
        if($password_usuario == $password2_usuario){

            $query = "  UPDATE usuarios 
                    
                        SET correo_usuario = '". $correo_usuario ."', 
                            estado_usuario = '". $estado_usuario ."'
            
                        WHERE id_usuario = '" . $id_usuario . "'";       
            
        }else{

            $query = "  UPDATE usuarios SET correo_usuario = '". $correo_usuario ."', 
                                            password_usuario = '". md5 ($password_usuario) ."', 
                                            estado_usuario = '". $estado_usuario ."'
            
                        WHERE id_usuario = '" . $id_usuario . "'";       

        }
       
       return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_usuario) {
        
        $query = "DELETE FROM usuarios WHERE id_usuario = '". $id_usuario ."'";
        
        $this->modificarRegistros($query);

    }
    
}

?>