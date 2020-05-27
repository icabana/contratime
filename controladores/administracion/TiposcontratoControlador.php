<?php

class TiposcontratoControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $TiposcontratoModel = new TiposcontratoModel();

        $tiposcontrato = $TiposcontratoModel->getTodos();

        include 'vistas/administracion/tiposcontrato/default.php';
                        
    }    
    
    public function nuevo(){
        
        include 'vistas/administracion/tiposcontrato/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("TiposcontratoModel.php");
        $TiposcontratoModel = new TiposcontratoModel();    
    
        $datos = $TiposcontratoModel->getDatos($_POST['id_tipocontrato']);
            
        include 'vistas/administracion/tiposcontrato/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $TiposcontratoModel = new TiposcontratoModel();            
        
        $resp = $TiposcontratoModel->insertar(
            $_POST["nombre_tipocontrato"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("TiposcontratoModel.php", 'administracion');
        $TiposcontratoModel = new TiposcontratoModel();
                    
        $TiposcontratoModel->editar(
            $_POST["id_tipocontrato"], 
            $_POST["nombre_tipocontrato"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $TiposcontratoModel = new TiposcontratoModel();
        
        $TiposcontratoModel->eliminar($_POST["id_tipocontrato"]);
        
        echo "1";        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $TiposcontratoModel = new TiposcontratoModel();

        $tiposcontrato = $TiposcontratoModel->getTodos();
                 
        include("vistas/administracion/tiposcontrato/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/tiposcontrato/tiposcontrato.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("TiposcontratoModel.php", "administracion");
        $TiposcontratoModel = new TiposcontratoModel();

        $tiposcontrato = $TiposcontratoModel->getTodos();
                        
        $nombre_archivo = "tiposcontrato_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."tiposcontrato".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/tiposcontrato/reportes/excel.php");        
           
        echo "archivos/reportes/tiposcontrato/".$nombre_archivo;

    }
    
    
 }