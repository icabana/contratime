<?php

class RpsControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $RpsModel->insertar(
                    $array[0],
                    $_POST["numero_rp"],
                    $_POST["fecha_rp"],
                    $_POST["valor_rp"]
                );        
              
            }  

        }   
        
    }

    
    public function insertarEditar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  
            
        $RpsModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_rp"],
            $_POST["fecha_rp"],
            $_POST["valor_rp"]
        );        

        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/lista_rps.php");
                     
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("RpsModel.php", "contratos");
        $RpsModel = new RpsContratosModel();  

        $RpsModel->eliminar($_POST["id_rp"], $_POST['id_contrato']);
        
        $rps = $RpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/rps/lista_rps.php");
             
        
    }

             
 }