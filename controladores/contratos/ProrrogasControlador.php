<?php

class ProrrogasControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $ProrrogasModel->insertar(
                    $array[0],
                    $_POST["meses_prorroga"],
                    $_POST["dias_prorroga"]
                );        
              
            }

        }
        
    }
    

    public function insertarEditar() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
                        
        $ProrrogasModel->insertar(
            $_POST['id_contrato'],
            $_POST["meses_prorroga"],
            $_POST["dias_prorroga"]
        );        
                
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");           
        
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  

        $ProrrogasModel->eliminar($_POST["id_prorroga"], $_POST['id_contrato']);
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");
             
        
    }   
    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("ProrrogasModel.php", "contratos");
        $ProrrogasModel = new ProrrogasContratosModel();  
        
        $prorrogas = $ProrrogasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/prorrogas/lista_prorrogas.php");             
        
    }
            
             
 }