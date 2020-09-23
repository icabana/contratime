<?php

class PlanesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();

        $planes = $PlanesModel->getTodos();

        include 'vistas/administracion/planes/default.php';
                        
    }    
    
    public function nuevo(){
        
        include 'vistas/administracion/planes/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("PlanesModel.php");
        $PlanesModel = new PlanesModel();    
    
        $datos = $PlanesModel->getDatos($_POST['id_plan']);
            
        include 'vistas/administracion/planes/editar.php';
               
    }
    
         
    public function documentos(){
    
        $this->model->cargar("PlanesModel.php");
        $PlanesModel = new PlanesModel();    
        
        $this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();    
    
        $datos = $PlanesModel->getDatos($_POST['id_plan']);
        //$documentos = $DocumentosModel->getTodosxPlan($_POST['id_plan']);
            
        include 'vistas/administracion/documentos/default.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();            
        
        $resp = $PlanesModel->insertar(
            $_POST["ano_plan"],
            $_POST["contacto_plan"],
            $_POST["valor_plan"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("PlanesModel.php", 'administracion');
        $PlanesModel = new PlanesModel();
                    
        $PlanesModel->editar(
            $_POST["id_plan"], 
            $_POST["contacto_plan"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();
        
        $PlanesModel->eliminar($_POST["id_plan"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();

        $planes = $PlanesModel->getTodos();
                 
        include("vistas/administracion/planes/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/planes/planes.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("PlanesModel.php", "administracion");
        $PlanesModel = new PlanesModel();

        $planes = $PlanesModel->getTodos();
                        
        $nombre_archivo = "planes_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."planes".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/planes/reportes/excel.php");        
           
        echo "archivos/reportes/planes/".$nombre_archivo;

    }
    
    
 }