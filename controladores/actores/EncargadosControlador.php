<?php

class EncargadosControlador extends ControllerBase {


    public function index() {        

        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();

        $encargados = $EncargadosModel->getTodos();

        include 'vistas/actores/encargados/default.php';                        

    }        


    public function nuevo(){        		

        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "maestras");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("PaisesModel.php", "maestras");
        $PaisesModel = new PaisesModel();
        $paises = $PaisesModel->getTodos();

        $this->model->cargar("DepartamentosModel.php", "maestras");
        $DepartamentosModel = new DepartamentosModel();
        $departamentos = $DepartamentosModel->getTodos();

        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos('91'); //Departamento de Amazonas == 5

        $this->model->cargar("GenerosModel.php", "maestras");
        $GenerosModel = new GenerosModel();
        $generos = $GenerosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "maestras");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("ProfesionesModel.php", "maestras");
        $ProfesionesModel = new ProfesionesModel();
        $profesiones = $ProfesionesModel->getTodos();

        include 'vistas/actores/encargados/insertar.php';        

    } 


    public function editar(){                        

        $this->model->cargar("TipospersonaModel.php", "maestras");
        $TipospersonaModel = new TipospersonaModel();
        $tipos = $TipospersonaModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "maestras");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("PaisesModel.php", "maestras");
        $PaisesModel = new PaisesModel();
        $paises = $PaisesModel->getTodos();
        
        $this->model->cargar("DepartamentosModel.php", "maestras");
        $DepartamentosModel = new DepartamentosModel();
        $departamentos = $DepartamentosModel->getTodos();

        $this->model->cargar("GenerosModel.php", "maestras");
        $GenerosModel = new GenerosModel();
        $generos = $GenerosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "maestras");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("ProfesionesModel.php", "maestras");
        $ProfesionesModel = new ProfesionesModel();
        $profesiones = $ProfesionesModel->getTodos();

        $this->model->cargar("EncargadosModel.php", 'actores');
        $EncargadosModel = new EncargadosModel();          
        $datos = $EncargadosModel->getDatos($_POST['id_encargado']);       
        
        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($datos['departamento_encargado']); //Departamento de Amazonas == 5

        include 'vistas/actores/encargados/editar.php';               

    }
    

    public function insertar() {

        $this->model->cargar("EncargadosModel.php", 'actores');
        $EncargadosModel = new EncargadosModel();                      

        $result = $EncargadosModel->getDatosPorCampo("documento_encargado", $_POST["documento_encargado"]);

        if(count($result) > 0){
            echo "error_documento";
            return;
        }

        $resp = $EncargadosModel->insertar(

            $_POST["tipo_encargado"],
            $_POST["tipodocumento_encargado"], 
            $_POST["documento_encargado"], 
            $_POST["nombres_encargado"], 
            $_POST["apellidos_encargado"], 

            $_POST["dirresidencia_encargado"], 
            $_POST["dircorrespondencia_encargado"],
            $_POST["telefono_encargado"], 
            $_POST["celular_encargado"], 
            $_POST["correo_encargado"], 
            $_POST["paginaweb_encargado"],

            $_POST["pais_encargado"],
            $_POST["departamento_encargado"],
            $_POST["municipio_encargado"], 

            $_POST["genero_encargado"],
            $_POST["estadocivil_encargado"],

            $_POST["profesion_encargado"]

        );        

        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;	
        }      
        
    }
        

    public function guardar() {

        $this->model->cargar("EncargadosModel.php", 'actores');
        $encargadosModel = new EncargadosModel();                

        $resp = $encargadosModel->editar(

            $_POST["id_encargado"], 

            $_POST["tipo_encargado"],
            $_POST["tipodocumento_encargado"], 
            $_POST["documento_encargado"], 
            $_POST["nombres_encargado"], 
            $_POST["apellidos_encargado"], 

            $_POST["dirresidencia_encargado"], 
            $_POST["dircorrespondencia_encargado"],
            $_POST["telefono_encargado"], 
            $_POST["celular_encargado"], 
            $_POST["correo_encargado"], 
            $_POST["paginaweb_encargado"],

            $_POST["pais_encargado"],
            $_POST["departamento_encargado"],
            $_POST["municipio_encargado"], 


            $_POST["genero_encargado"],
            $_POST["estadocivil_encargado"],

            $_POST["profesion_encargado"]
        );     

         if( $resp != 0 ){			     

             echo 1;             

        }else{			     

            echo 0;	            

        }          

    }         

    public function eliminar() {        

        $this->model->cargar("EncargadosModel.php", "actores");
        $encargadosModel = new EncargadosModel();        

        $encargadosModel->eliminar($_POST["id_encargado"]);        

        echo "1";                

    }           

    
    public function cargarMunicipios() {        

        $froms = new Formularios();

        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($_POST['id_departamento']); 
        
        echo $froms->Lista_Desplegable(
            $municipios,
            'nombre_municipio',
            'id_municipio',
            'municipio_encargado',
            '',
            '',
            ''
          );

    }          
    
    public function generarPdf(){
         
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();

        $encargados = $EncargadosModel->getTodos();
          
        include("vistas/actores/encargados/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/encargados/encargados_".date("Y-m-d")."_.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("EncargadosModel.php", "actores");
        $EncargadosModel = new EncargadosModel();

        $encargados = $EncargadosModel->getTodos();
                        
        $nombre_archivo = "encargados_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3)."/archivos/reportes/encargados/".$nombre_archivo;        

        include("vistas/actores/encargados/reportes/excel.php");        
           
        echo "archivos/reportes/encargados/".$nombre_archivo;

    }
    
    
 }

?>