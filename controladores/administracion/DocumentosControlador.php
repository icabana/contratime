<?php

class DocumentosControlador extends ControllerBase {

    public function index() {

        $this->model->cargar("ModalidadesModel.php");
        $ModalidadesModel = new ModalidadesModel();    
        
        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();

        $datos = $ModalidadesModel->getDatos($_POST['id_modalidad']);
        $documentos = $DocumentosModel->getTodosxModalidad($_POST['id_modalidad']);

        include 'vistas/administracion/documentos/default.php';
                        
    }    
    
    public function nuevo(){
        
        $modalidad_documento = $_POST['modalidad_documento'];

        include 'vistas/administracion/documentos/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();    
    
        $datos = $DocumentosModel->getDatos($_POST['id_documento']);
            
        include 'vistas/administracion/documentos/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();            
        
        $resp = $DocumentosModel->insertar(
            $_POST["modalidad_documento_insertar"],
            $_POST["nombre_documento"]
        );        
        
        if( $resp != 0 ){

            echo 1;

        }else{

            echo 0;	

        }
        
    }
    
    public function guardar() {
        
        $this->model->cargar("DocumentosModel.php", 'administracion');
        $DocumentosModel = new DocumentosModel();
                    
        $DocumentosModel->editar(
            $_POST["id_documento"], 
            $_POST["nombre_documento"]
        );              
            
        echo 1;
        
    }   
        
    public function eliminar() {
        
        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();
        
        $DocumentosModel->eliminar($_POST["id_documento"]);
        
        echo $_POST["modalidad_documento"];        
        
    }    
    
    public function generarPdf(){
         
        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();

        $documentos = $DocumentosModel->getTodos();
                 
        include("vistas/administracion/documentos/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/documentos/documentos.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();

        $documentos = $DocumentosModel->getTodos();
                        
        $nombre_archivo = "documentos_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes".DIRECTORY_SEPARATOR."documentos".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/administracion/documentos/reportes/excel.php");        
           
        echo "archivos/reportes/documentos/".$nombre_archivo;

    }

    
    
    public function eliminarDocumento() {
        
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        unlink($_POST['archivo']);

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato_upload']);        

        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();

        $documentos = $DocumentosModel->getTodosxModalidad($contrato['modalidad_contrato']); 

        $accion = "Se ha eliminado un documento de éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato_upload'], $accion);   

        include("vistas/contratos/documentos/tabla_documentos.php");  
        echo $tabla_documentos;               
        
    }

    public function actualizarDocumento() {
                          
        require_once("controladores/contratos/TrazabilidadControlador.php");
        $TrazabilidadControlador = new TrazabilidadControlador();   

        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();
        $contrato = $ContratosModel->getDatos($_POST['id_contrato_upload']);        

        $this->model->cargar("DocumentosModel.php", "administracion");
        $DocumentosModel = new DocumentosModel();

        $accion = "Se ha Adjuntado un documento a éste contrato";

        $TrazabilidadControlador->insertarExterno($_POST['id_contrato_upload'], $accion);   

        $documentos = $DocumentosModel->getTodosxModalidad($contrato['modalidad_contrato']); 

        include("vistas/contratos/documentos/tabla_documentos.php");    
        echo $tabla_documentos;         
        
    }

           
    
    
 }