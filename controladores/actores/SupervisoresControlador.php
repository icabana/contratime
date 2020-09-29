<?php

class SupervisoresControlador extends ControllerBase {


    public function index() {        

        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();

        $supervisores = $SupervisoresModel->getTodos();

        include 'vistas/actores/supervisores/default.php';                        

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

        include 'vistas/actores/supervisores/insertar.php';        

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

        $this->model->cargar("SupervisoresModel.php", 'actores');
        $SupervisoresModel = new SupervisoresModel();          
        $datos = $SupervisoresModel->getDatos($_POST['id_supervisor']);       
        
        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($datos['departamento_supervisor']); //Departamento de Amazonas == 5

        include 'vistas/actores/supervisores/editar.php';               

    }
    

    public function insertar() {

        $this->model->cargar("SupervisoresModel.php", 'actores');
        $SupervisoresModel = new SupervisoresModel();                      

        $result = $SupervisoresModel->getDatosPorCampo("documento_supervisor", $_POST["documento_supervisor"]);

        if(count($result) > 0){
            echo "error_documento";
            return;
        }

        $resp = $SupervisoresModel->insertar(

            $_POST["tipo_supervisor"],
            $_POST["tipodocumento_supervisor"], 
            $_POST["documento_supervisor"], 
            $_POST["nombres_supervisor"], 
            $_POST["apellidos_supervisor"], 

            $_POST["dirresidencia_supervisor"], 
            $_POST["dircorrespondencia_supervisor"],
            $_POST["telefono_supervisor"], 
            $_POST["celular_supervisor"], 
            $_POST["correo_supervisor"], 
            $_POST["paginaweb_supervisor"],

            $_POST["pais_supervisor"],
            $_POST["departamento_supervisor"],
            $_POST["municipio_supervisor"], 

            $_POST["genero_supervisor"],
            $_POST["estadocivil_supervisor"],
            $_POST["hijos_supervisor"],

            $_POST["profesion_supervisor"]

        );        

        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;	
        }      
        
    }
        

    public function guardar() {

        $this->model->cargar("SupervisoresModel.php", 'actores');
        $supervisoresModel = new SupervisoresModel();                

        $resp = $supervisoresModel->editar(

            $_POST["id_supervisor"], 

            $_POST["tipo_supervisor"],
            $_POST["tipodocumento_supervisor"], 
            $_POST["documento_supervisor"], 
            $_POST["nombres_supervisor"], 
            $_POST["apellidos_supervisor"], 

            $_POST["dirresidencia_supervisor"], 
            $_POST["dircorrespondencia_supervisor"],
            $_POST["telefono_supervisor"], 
            $_POST["celular_supervisor"], 
            $_POST["correo_supervisor"], 
            $_POST["paginaweb_supervisor"],

            $_POST["pais_supervisor"],
            $_POST["departamento_supervisor"],
            $_POST["municipio_supervisor"], 


            $_POST["genero_supervisor"],
            $_POST["estadocivil_supervisor"],
            $_POST["hijos_supervisor"],

            $_POST["profesion_supervisor"]
        );     

         if( $resp != 0 ){			     

             echo 1;             

        }else{			     

            echo 0;	            

        }          

    }         

    public function eliminar() {        

        $this->model->cargar("SupervisoresModel.php", "actores");
        $supervisoresModel = new SupervisoresModel();        

        $supervisoresModel->eliminar($_POST["id_supervisor"]);        

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
            'municipio_supervisor',
            '',
            '',
            ''
          );

    }          
    
    public function generarPdf(){
         
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();

        $supervisores = $SupervisoresModel->getTodos();
          
        include("vistas/actores/supervisores/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/supervisores/supervisores_".date("Y-m-d")."_.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("SupervisoresModel.php", "actores");
        $SupervisoresModel = new SupervisoresModel();

        $supervisores = $SupervisoresModel->getTodos();
                        
        $nombre_archivo = "supervisores_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3)."/archivos/reportes/supervisores/".$nombre_archivo;        

        include("vistas/actores/supervisores/reportes/excel.php");        
           
        echo "archivos/reportes/supervisores/".$nombre_archivo;

    }
    
    
 }

?>