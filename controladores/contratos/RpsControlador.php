<?php

class RpsControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $RpsModel->insertar(
                    $array[0],
                    $_POST["numero_rp"],
                    $_POST["fecha_rp"],
                    $_POST["valor_rp"]
                );        
                
                $accion = "Se ha asociado el RP No. ".$_POST["numero_rp"]." a éste contrato";

                $TrazabilidadControlador->insertarExterno($array[0], $accion);   
              
            }  

        }   
        
    }

    
    public function insertarEditar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
            
        $RpsModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_rp"],
            $_POST["fecha_rp"],
            $_POST["valor_rp"]
        );        

        $accion = "Se ha asociado el RP No. ".$_POST["numero_rp"]." a éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  

        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/lista_rps.php");
                     
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
        
        $datos_rp = $RpsModel->getDatos($_POST["id_rp"]);

        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $RpsModel->eliminar($_POST["id_rp"], $_POST['id_contrato']);
        
        $accion = "Se ha eliminado la asociación del RP No. ".$datos_rp["numero_rp"]." en éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);  
        
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/lista_rps.php");
             
        
    }

    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
        
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/tabla_rps.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
        
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/tabla_rps.php");             
        
    }

           
    

             
 }