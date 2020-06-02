<?php

class PagosControlador extends ControllerBase {

    
    public function insertar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();    
 
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $array_contratos = explode(",", $_POST['contratos']);

        foreach($array_contratos as $array){
    
            if($array[0] != 0){

                $PagosModel->insertar(
                    $array[0],
                    $_POST["tipo_pago"],
                    $_POST["fecha_pago"],
                    $_POST["valor_pago"]
                );        
              
                $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

                $TrazabilidadControlador->insertarExterno($array[0], $accion);   

            }

        }
        
    }
    
    public function insertarEditar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  
        
        $this->model->cargar("TipospagoModel.php", "administracion");
        $TipospagoModel = new TipospagoModel();  
                        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();  
         
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   
  
        $PagosModel->insertar(
            $_POST['id_contrato'],
            $_POST["tipo_pago"],
            $_POST["fecha_pago"],
            $_POST["valor_pago"]
        );   
        
        $tipopago = $TipospagoModel->getDatos($_POST["tipo_pago"]);

        $accion = "Se ha regitrado un pago a este contrato: Tipo de pago: ".$tipopago["nombre_tipopago"].", Valor: $".number_format($_POST["valor_pago"], 0, ',', '.');

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion);   

        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
        
            
    }
       
    public function eliminar() {
        
        $this->model->cargar("PagosModel.php", "contratos");
        $PagosModel = new PagosContratosModel();  

        $datos = $PagosModel->getDatos($_POST["id_pago"]);
         
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $PagosModel->eliminar($_POST["id_pago"], $_POST['id_contrato']);

        
        $accion = "Se ha eliminado un pago en este contrato por valor de : $".number_format($datos["valor_pago"], 0, ',', '.');

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato'], $accion); 
        
        $pagos = $PagosModel->getTodosxContrato($_POST['id_contrato']);

        include("vistas/contratos/pagos/lista_pagos.php");
             
        
    }

             
 }