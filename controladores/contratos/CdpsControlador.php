<?php

class CdpsControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $datos_contrato = $ContratosModel->getDatos($array[0]);

                $CdpsModel->insertar(
                    $array[0],
                    $_POST["numero_cdp"],
                    $_POST["fecha_cdp"],
                    $_POST["valor_cdp"]
                );        
              
            }  

        }   
        
    }
      
    public function insertarEditar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
                        
        $CdpsModel->insertar(
            $_POST['id_contrato'],
            $_POST["numero_cdp"],
            $_POST["fecha_cdp"],
            $_POST["valor_cdp"]
        );               
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");

        
    }
   
    public function eliminar() {
        
        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  

        $CdpsModel->eliminar($_POST["id_cdp"], $_POST['id_contrato']);
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");
             
        
    }

    
    public function eliminarDocumento() {
        

        unlink($_POST['archivo_cdp']);

        $this->model->cargar("CdpsModel.php", "contratos");
        $CdpsModel = new CdpsContratosModel();  
        
        $cdps = $CdpsModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/cdps/lista_cdps.php");
             
        
    }

             
 }