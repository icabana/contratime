<?php

class TrazabilidadControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();  

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $TrazabilidadModel->insertar(
                    $_POST["accion_trazabilidad"],
                    $array,
                    $_SESSION['id_usuario']
                ); 
                
            }

        }                
        
    }

    
    public function insertarEditar() {
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();  

        $TrazabilidadModel->insertar(
            $_POST["accion_trazabilidad"],
            $_POST['id_contrato'],
            $_SESSION['id_usuario']
        ); 

        $trazabilidad = $TrazabilidadModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/trazabilidad/lista_trazabilidad.php");     
           
    }

    
    public function insertarExterno($contratos, $accion) {
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();  

        $array_contratos = explode(",", $contratos);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $TrazabilidadModel->insertar(
                    $accion,
                    $array,
                    $_SESSION['id_usuario']
                ); 
                
            }

        }
        
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();

        $TrazabilidadModel->eliminar($_POST["id_trazabilidad"], $_POST['id_contrato']);
        
        $trazabilidad = $TrazabilidadModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/trazabilidad/lista_trazabilidad.php");             
        
    }

             
 }