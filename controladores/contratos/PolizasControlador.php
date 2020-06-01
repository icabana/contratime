<?php

class PolizasControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $PolizasModel->insertar(
                    $array[0],
                    $_POST["numero_poliza"],
                    $_POST["fechaexp_poliza"],
                    $_POST["fechainicio_poliza"],
                    $_POST["fechafinal_poliza"]
                );        
              
            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $PolizasModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_poliza"],
            $_POST["fechaexp_poliza"],
            $_POST["fechainicio_poliza"],
            $_POST["fechafinal_poliza"]
        );   

        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");
            
    }
       
    public function eliminar() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  

        $PolizasModel->eliminar($_POST["id_poliza"], $_POST['id_contrato']);
        
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");
             
        
    }

    
    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
        
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("PolizasModel.php", "contratos");
        $PolizasModel = new PolizasContratosModel();  
        
        $polizas = $PolizasModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/polizas/lista_polizas.php");             
        
    }

           

             
 }