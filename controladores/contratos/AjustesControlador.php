<?php

class AjustesControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array != 0){

                $AjustesModel->insertar(
                    $array,
                    $_POST["tipo_ajuste"],
                    $_POST["fecha_ajuste"],
                    $_POST["valor_ajuste"]
                );        
              
            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $AjustesModel->insertar(
            $_POST["id_contrato"],
            $_POST["tipo_ajuste"],
            $_POST["fecha_ajuste"],
            $_POST["valor_ajuste"]
        );        
        
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/ajustes/lista_ajustes.php");
                   
    }
   
    public function eliminar() {
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();  

        $AjustesModel->eliminar($_POST["id_ajuste"], $_POST['id_contrato']);
        
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/ajustes/lista_ajustes.php");
             
        
    }

    
    public function eliminarDocumento() {
        
        unlink($_POST['archivo']);

        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();  
        
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/ajustes/lista_ajustes.php");             
        
    }

    public function actualizarDocumento() {
        
        $this->model->cargar("AjustesModel.php", "contratos");
        $AjustesModel = new AjustesContratosModel();  
        
        $ajustes = $AjustesModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/ajustes/lista_ajustes.php");             
        
    }

             
 }