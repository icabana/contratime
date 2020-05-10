<?php

class TrazabilidadControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("TrazabilidadModel.php", "contratos");
        $TrazabilidadModel = new TrazabilidadModel();  

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){
/*
                $TrazabilidadModel->insertar(
                    $_POST["supervisor_supervisor"],
                    $array[0],
                ); 
                */
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