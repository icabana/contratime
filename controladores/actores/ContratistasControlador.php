<?php

class ContratistasControlador extends ControllerBase {


    public function index() {        

        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/actores/contratistas/default.php';                        

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

        include 'vistas/actores/contratistas/insertar.php';        

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

        $this->model->cargar("ContratistasModel.php", 'actores');
        $ContratistasModel = new ContratistasModel();          
        $datos = $ContratistasModel->getDatos($_POST['id_contratista']);       
        
        $this->model->cargar("MunicipiosModel.php", "maestras");
        $MunicipiosModel = new MunicipiosModel();
        $municipios = $MunicipiosModel->getTodos($datos['departamento_contratista']); //Departamento de Amazonas == 5

        include 'vistas/actores/contratistas/editar.php';               

    }
    

    public function insertar() {

        $this->model->cargar("ContratistasModel.php", 'actores');
        $ContratistasModel = new ContratistasModel();                      

        $result = $ContratistasModel->getDatosPorCampo("documento_contratista", $_POST["documento_contratista"]);

        if(count($result) > 0){
            echo "error_documento";
            return;
        }

        $resp = $ContratistasModel->insertar(

            $_POST["tipo_contratista"],
            $_POST["tipodocumento_contratista"], 
            $_POST["documento_contratista"], 
            $_POST["nombres_contratista"], 
            $_POST["apellidos_contratista"], 

            $_POST["dirresidencia_contratista"], 
            $_POST["dircorrespondencia_contratista"],
            $_POST["telefono_contratista"], 
            $_POST["celular_contratista"], 
            $_POST["correo_contratista"], 
            $_POST["paginaweb_contratista"],

            $_POST["pais_contratista"],
            $_POST["departamento_contratista"],
            $_POST["municipio_contratista"], 
            $_POST["fechanacimiento_contratista"],

            $_POST["genero_contratista"],
            $_POST["estadocivil_contratista"],
            $_POST["hijos_contratista"],

            $_POST["profesion_contratista"]

        );        

        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;	
        }      
        
    }
        

    public function guardar() {

        $this->model->cargar("ContratistasModel.php", 'actores');
        $contratistasModel = new ContratistasModel();                

        $resp = $contratistasModel->editar(

            $_POST["id_contratista"], 

            $_POST["tipo_contratista"],
            $_POST["tipodocumento_contratista"], 
            $_POST["documento_contratista"], 
            $_POST["nombres_contratista"], 
            $_POST["apellidos_contratista"], 

            $_POST["dirresidencia_contratista"], 
            $_POST["dircorrespondencia_contratista"],
            $_POST["telefono_contratista"], 
            $_POST["celular_contratista"], 
            $_POST["correo_contratista"], 
            $_POST["paginaweb_contratista"],

            $_POST["pais_contratista"],
            $_POST["departamento_contratista"],
            $_POST["municipio_contratista"], 

            $_POST["fechanacimiento_contratista"],

            $_POST["genero_contratista"],
            $_POST["estadocivil_contratista"],
            $_POST["hijos_contratista"],

            $_POST["profesion_contratista"]
        );     

         if( $resp != 0 ){			     

             echo 1;             

        }else{			     

            echo 0;	            

        }          

    }         

    public function eliminar() {        

        $this->model->cargar("ContratistasModel.php", "actores");
        $contratistasModel = new ContratistasModel();        

        $contratistasModel->eliminar($_POST["id_contratista"]);        

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
            'municipio_contratista',
            '',
            '',
            ''
          );

    }           


    
    public function generarPdf(){
         
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodos();
          
        include("vistas/actores/contratistas/reportes/pdf.php");   
       
        $dirPdf = "archivos/reportes/contratistas/contratistas_".date("Y-m-d")."_.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarExcel(){
         
        $this->model->cargar("ContratistasModel.php", "actores");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodos();
                        
        $nombre_archivo = "usuarios_".date('Y-m-d_H-i-s').".xls";        

        $ruta = dirname(__FILE__, 3)."/archivos/reportes/contratistas/".$nombre_archivo;        

        include("vistas/actores/contratistas/reportes/excel.php");        
           
        echo "archivos/reportes/contratistas/".$nombre_archivo;

    }
    
    


    
 }

?>

