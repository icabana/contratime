<?php

class UsuariosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();

        $usuarios = $UsuariosModel->getTodos();

        include 'vistas/configuracion/usuarios/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();

        $roles = $RolesModel->getTodos();

        include 'vistas/configuracion/usuarios/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';
                    
        $this->model->cargar("UsuariosModel.php");
        $UsuariosModel = new UsuariosModel();    

        $this->model->cargar("RolesModel.php");
        $RolesModel = new RolesModel();    

        $this->model->cargar("PerfilesModel.php");
        $PerfilesModel = new PerfilesModel();    
        
        $perfiles = $PerfilesModel->getTodos($_POST['id_usuario']);      
        $roles = $RolesModel->getTodos();
        
        $datos = $UsuariosModel->getDatos($_POST['id_usuario']);
            
        include 'vistas/configuracion/usuarios/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();            
      
        $this->model->cargar("PerfilesModel.php", "configuracion");
        $PerfilesModel = new PerfilesModel();            
        
        $resp = $UsuariosModel->insertar(
            $_POST["documento_usuario"], 
            $_POST["password_usuario"],
            $_POST["correo_usuario"]
        );        
        
        if( $resp != 0 ){

            $PerfilesModel->eliminar($resp);

            $roles = str_replace(",0", "", $_POST['roles']);

            $array_roles = explode(',', $roles);

            foreach($array_roles as $rol){

                $PerfilesModel->insertar($resp, $rol);

            }

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("UsuariosModel.php", 'configuracion');
        $UsuariosModel = new UsuariosModel();
        
        $this->model->cargar("PerfilesModel.php", "configuracion");
        $PerfilesModel = new PerfilesModel();            
            
        $UsuariosModel->editar(
            $_POST["id_usuario"], 
            $_POST["password_usuario"], 
            $_POST["password2_usuario"], 
            $_POST["correo_usuario"], 
            $_POST["estado_usuario"]
        );              
            
        $PerfilesModel->eliminar($_POST["id_usuario"]);

        $roles = str_replace(",0", "", $_POST['roles']);

        $array_roles = explode(',', $roles);

        foreach($array_roles as $rol){

            $PerfilesModel->insertar($_POST["id_usuario"], $rol);

        }

        echo 1;

        
    }    
        
    public function seleccionarPerfil() {
        
        $_SESSION['rol'] = $_POST['id_rol'];
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();
        
        $UsuariosModel->eliminar($_POST["id_usuario"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();

        $usuarios = $UsuariosModel->getTodos();
                 
        include("vistas/configuracion/usuarios/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/usuarios/usuarios.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();

        $usuarios = $UsuariosModel->getTodos();
                        
        $nombre_archivo = "usuarios_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."usuarios".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/configuracion/usuarios/reportes/excel.php");        
           
        echo "archivos/reportes/usuarios/".$nombre_archivo;

    }
    
    
 }