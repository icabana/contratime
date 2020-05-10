<?php

class SupervisoresControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresModel();  

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $SupervisoresModel->insertar(
                    $_POST["supervisor_supervisor"],
                    $array[0],
                ); 
                
            }

        }   
        
    }
    
   
    public function eliminar() {
        
        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresModel();

        $SupervisoresModel->eliminar($_POST["id_supervisor"], $_POST['id_contrato']);
        
        $supervisores = $SupervisoresModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/supervisores/lista_supervisores.php");
             
        
    }

             
 }