<?php

class ContratosControlador extends ControllerBase {


    public function index() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosActivos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default.php';
                        
    }    


    

    public function verRadicadosResponsable() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->verRadicadosResponsable($_POST['id_responsable']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default.php';
                        
    }    



    
    
    public function verRadicadosDependencia() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->verRadicadosDependencia($_POST['id_dependencia']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default.php';
                        
    }    



    
    
    public function verRadicadosTipoRadicado() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->verRadicadosTipoRadicado($_POST['id_tiporadicado']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();


        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default.php';
                        
    }    





    public function indexFinalizados() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosFinalizados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default_finalizados.php';
                        
    }    







    public function indexFinalizados2() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosFinalizados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("UnidadesModel.php", "archivos");
        $UnidadesModel = new UnidadesModel();
        $unidades = $UnidadesModel->getTodos();

        $this->model->cargar("ArchivadoresModel.php", "archivos");
        $ArchivadoresModel = new ArchivadoresModel();
        $archivadores = $ArchivadoresModel->getTodos();

        include 'vistas/radicados/contratos/default_por_archivar.php';
                        
    }    





    public function indexArchivados() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosArchivados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        include 'vistas/radicados/contratos/default_archivados.php';
                        
    }    




    public function indexArchivados2() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosArchivados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("UnidadesModel.php", "archivos");
        $UnidadesModel = new UnidadesModel();
        $unidades = $UnidadesModel->getTodos();

        $this->model->cargar("ArchivadoresModel.php", "archivos");
        $ArchivadoresModel = new ArchivadoresModel();
        $archivadores = $ArchivadoresModel->getTodos();

        include 'vistas/radicados/contratos/default_ver_archivados.php';
                        
    }    




    
    public function indexUsuario() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosUsuario();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        include 'vistas/radicados/contratos/default_usuario.php';
                        
    }    





    public function index_carpeta() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosPorCarpeta($_POST['id_carpeta']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        include 'vistas/radicados/contratos/default.php';
                        
    }    





    public function index_carpeta_usuarios() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosPorCarpeta($_POST['id_carpeta']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        include 'vistas/radicados/contratos/default_usuario.php';
                        
    }    





    public function nuevo(){

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($series[0]['id_serie']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($subseries[0]['id_subserie']);

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();
        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        $this->model->cargar("Estados2Model.php", "configuracion");
        $Estados2Model = new Estados2Model();
        $estados2 = $Estados2Model->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;

        $saliente_contrato = $_POST['saliente_contrato'];

        $numero_contrato = date("Ymd").$consecutivo;

        include 'vistas/radicados/contratos/insertar.php';
        
    }

         


    public function nuevo_finalizados(){

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($series[0]['id_serie']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($subseries[0]['id_subserie']);

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();
        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;

        $saliente_contrato = $_POST['saliente_contrato'];

        $numero_contrato = date("Ymd").$consecutivo;

        include 'vistas/radicados/contratos/insertar_finalizados.php';
        
    }

         

    

    public function nuevo_archivados(){

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($series[0]['id_serie']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($subseries[0]['id_subserie']);

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();
        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;

        $saliente_contrato = $_POST['saliente_contrato'];

        $numero_contrato = date("Ymd").$consecutivo;

        include 'vistas/radicados/contratos/insertar_archivados.php';
        
    }

         


    public function nuevo_desde_salida(){

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($series[0]['id_serie']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($subseries[0]['id_subserie']);

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();
        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;

        $saliente_contrato = $_POST['saliente_contrato'];

        $numero_contrato = date("Ymd").$consecutivo;

        include 'vistas/radicados/contratos/insertar_2.php';
        
    }

         
    
    
    
    public function editar(){

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("Estados2Model.php", "configuracion");
        $Estados2Model = new Estados2Model();
        $estados2 = $Estados2Model->getTodos();

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("ContratosModel.php");
        $ContratosModel = new ContratosModel();         
        $datos = $ContratosModel->getDatos($_POST['id_contrato']);
        $trazabilidad = $ContratosModel->getTrazabilidad($_POST['id_contrato']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_contrato']);

        
        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        
        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();

        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($datos['serie_contrato']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($datos['subserie_contrato']);

        include 'vistas/radicados/contratos/editar.php';
               
    }
         

    
    
    public function editarDatosArchivo(){

        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        $contratos = $ContratosModel->getTodosFinalizados();

        $datos_archivo = $ContratosModel->getDatosArchivo($_POST['id_contrato']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("UnidadesModel.php", "archivos");
        $UnidadesModel = new UnidadesModel();
        $unidades = $UnidadesModel->getTodos();

        $this->model->cargar("ArchivadoresModel.php", "archivos");
        $ArchivadoresModel = new ArchivadoresModel();
        $archivadores = $ArchivadoresModel->getTodos();

        include 'vistas/radicados/contratos/editar_archivo.php';
               
    }
         





         
    
    
    
    public function editar_finalizados(){

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("Estados2Model.php", "configuracion");
        $Estados2Model = new Estados2Model();
        $estados2 = $Estados2Model->getTodos();

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("ContratosModel.php");
        $ContratosModel = new ContratosModel();         
        $datos = $ContratosModel->getDatos($_POST['id_contrato']);
        $trazabilidad = $ContratosModel->getTrazabilidad($_POST['id_contrato']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_contrato']);

        
        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();


        
        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();

        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($datos['serie_contrato']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($datos['subserie_contrato']);

        include 'vistas/radicados/contratos/editar_finalizados.php';
               
    }
         


         
    
    
    
    public function editar_archivados(){

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("Estados2Model.php", "configuracion");
        $Estados2Model = new Estados2Model();
        $estados2 = $Estados2Model->getTodos();

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("ContratosModel.php");
        $ContratosModel = new ContratosModel();         
        $datos = $ContratosModel->getDatos($_POST['id_contrato']);
        $trazabilidad = $ContratosModel->getTrazabilidad($_POST['id_contrato']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_contrato']);

        
        $this->model->cargar("RolesModel.php", "configuracion");
        $RolesModel = new RolesModel();
        $roles = $RolesModel->getTodos();

        
        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();

        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        $series = $SeriesModel->getTodos();

        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        $subseries = $SubseriesModel->getTodosPorSerie($datos['serie_contrato']);

        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($datos['subserie_contrato']);

        include 'vistas/radicados/contratos/editar_archivados.php';
               
    }
         




    public function editarArchivo(){

        include 'vistas/radicados/contratos/archivo.php';
               
    }
    
    


    public function actualizarUpload(){
        
        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_contrato']);

        $id_contrato = $_POST['id_contrato'];
        include 'vistas/radicados/contratos/tabla_documentos.php';
        echo $tabla_documentos;
               
    }
 



    public function actualizarTrazabilidad(){

        $this->model->cargar("ContratosModel.php");
        $ContratosModel = new ContratosModel();         
        $trazabilidad = $ContratosModel->getTrazabilidad($_POST['id_contrato']);

        include 'vistas/radicados/contratos/tabla_trazabilidad.php';
        echo $tabla_trazabilidad;
               
    }


    public function eliminarArchivo(){
        
        unlink($_POST['archivo']);

        $id_contrato = $_POST['id_contrato'];
        include 'vistas/radicados/contratos/tabla_documentos.php';
        echo $tabla_documentos;
               
    }

    


    public function actualizarDocumentos(){
        
        $id_contrato = $_POST['id_contrato'];
        include 'vistas/radicados/contratos/tabla_documentos.php';
        echo $tabla_documentos;
               
    }

    
    

    public function editarUsuario(){
    
        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();
        $contratistas = $ContratistasModel->getTodos();


        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();
        
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        $this->model->cargar("ContratosModel.php");
        $ContratosModel = new ContratosModel();         
        $datos = $ContratosModel->getDatos($_POST['id_contrato']);

        $trazabilidad = $ContratosModel->getTrazabilidad($_POST['id_contrato']);

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_contrato']);
        
        include 'vistas/radicados/contratos/editar_usuario.php';
               
    }

    



    public function buscarRemitente() {

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTercerosLIKE($_POST['texto']);

        $tabla_terceros = "<table id='tabla_terceros'  class='table table-hover'>

            <thead>
                <tr>     
                    <th><center>NOMBRE</center></th> 
                </tr>
                </thead>
            <tbody>";

        foreach ($terceros as $clave => $valor) {

            $tabla_terceros .= "<tr onclick='seleccionar_remitente(" . $valor['id_tercero'] . ", \"" . ($valor['nombre_tercero']) . "\");'>";  
            $tabla_terceros .= "<td><strong>" . $valor['nombre_tercero'] . "</strong></td>";
            $tabla_terceros .= "</tr>";

        }

       $tabla_terceros .= "

            </tbody></table>";

        echo $tabla_terceros;

    }


    
      
    
    public function buscarDestinatario() {

        $this->model->cargar("ContratistasModel.php", "administracion");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getContratistasLIKE($_POST['texto']);

        $tabla_contratistas = "<table id='tabla_contratistas'  class='table table-hover'>

        <thead>
            <tr>     
                <th><center>NOMBRE</center></th> 
            </tr>
            </thead>
        <tbody>";

        foreach ($contratistas as $clave => $valor) {

            $tabla_contratistas .= "<tr onclick='seleccionar_destinatario(" . $valor['id_contratista'] . ", \"" . $valor['nombres_contratista'] . "\", \"" . $valor['apellidos_contratista'] . "\");'>";  
            $tabla_contratistas .= "<td><strong>" . $valor['nombres_contratista']." ".$valor['apellidos_contratista'] . "</strong></td>";
            $tabla_contratistas .= "</tr>";

        }

       $tabla_contratistas .= "

        </tbody></table>";

        echo $tabla_contratistas;

      }



    public function insertar() {
      
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();                 

        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();                 

        $max_consecutivo = $ContratosModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_contrato = date("Ymd").$consecutivo;
        
        $resp = $ContratosModel->insertar(
                                    $max_consecutivo,
                                    $numero_contrato,
                                    $_POST["remitente_contrato"],
                                    $_POST["enviadopor_contrato"],
                                    $_POST["destinatario_contrato"],
                                    $_POST["fecharadicado_contrato"],
                                    $_POST["fechamaxima_contrato"],
                                    $_POST["prioridad_contrato"],
                                    $_POST["numerofolios_contrato"],
                                    $_POST["descripcionfolios_contrato"],
                                    $_POST["asunto_contrato"],
                                    $_POST["tiporadicado_contrato"],
                                    $_POST["responsable_contrato"],
                                    $_POST["serie_contrato"],
                                    $_POST["subserie_contrato"],
                                    $_POST["tipodocumental_contrato"],
                                    $_POST["saliente_contrato"],
                                    $_POST["tieneanexos_contrato"]
                                );        
        
        $SalientesModel->actualizarContrato($_POST["saliente_contrato"], $resp);

        if( $resp != 0 ){
            
            mkdir('archivos/uploads/contratos/'.$resp);

            $ContratosModel->insertar_trazabilidad(
                $resp,
                "Registró el Radicado No. ".$numero_contrato
            );    

            $radicado = $ContratosModel->getDatos($resp);

            
            $mensaje = "Se le ha asignado un nuevo radicado, el cual se detalla a continuación: <br><br>";             



            $mensaje .= "Radicado No.: ". $radicado['numero_radicado']."<br>";
            $mensaje .= "Remitente: ".$radicado['nombre_tercero']."<br>";
            $mensaje .= "Destinatario: ". $radicado['nombres_contratista']." ".$radicado['apellidos_contratista']."<br>";
         
            
            $mensaje .= "<br><br><br><br>"; 

          

            
            $mensaje .= "<center>Sistema Estratégico de Transporte Público de Santa Marta S.A.S.</center><br>";      
            $mensaje .= "<center>PBX. (57-5) 4317777 </center><br>";      
            $mensaje .= "<center>Cl. 24 No. 3-99, Edificio Banco de Bogotá – Oficina 1202</center><br>";      
            $mensaje .= "<center>www.setpsantamarta.gov.co</center><br>";    



            $correo1 = "icabana@solati.com.co";
            $nombre1 = "Ismael";



            //echo $this->EnviarCorreo($mensaje, $asunto, $correo1, $nombre1);
            
  

            echo $resp;

        }else{

            echo 0;			

        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->editar(
                                    $_POST["id_contrato"], 
                                    $_POST["numero_contrato"],
                                    $_POST["remitente_contrato"],
                                    $_POST["enviadopor_contrato"],
                                    $_POST["destinatario_contrato"],
                                    $_POST["fecharadicado_contrato"],
                                    $_POST["fechamaxima_contrato"],
                                    $_POST["prioridad_contrato"],
                                    $_POST["numerofolios_contrato"],
                                    $_POST["descripcionfolios_contrato"],
                                    $_POST["asunto_contrato"],
                                    $_POST["tiporadicado_contrato"],
                                    $_POST["responsable_contrato"],
                                    $_POST["serie_contrato"],
                                    $_POST["subserie_contrato"],
                                    $_POST["tipodocumental_contrato"],
                                    $_POST["tieneanexos_contrato"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Modificó la información del radicado"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function guardarDatosArchivo() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->guardarDatosArchivo(
                                    $_POST["contrato_archivo"], 
                                    $_POST["archivador_archivo"],
                                    $_POST["fechainicio_archivo"],
                                    $_POST["fechafinal_archivo"],
                                    $_POST["unidad_archivo"],
                                    $_POST["codigo_archivo"],
                                    $_POST["folios_archivo"],
                                    $_POST["anexos_archivo"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Se Modificó la información de Archivo"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        

    public function mover() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->mover(
                                    $_POST["id_contrato"], 
                                    $_POST["carpeta_contrato"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Movió el radicado de carpeta"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    


    public function nuevoDocumento() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->nuevoDocumento(
                                    $_POST["id_contrato"], 
                                    $_POST["documento"]
                                );        
      
        if( $resp != 0 ){

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Agregó un nuevo documento"
            ); 

             echo 1; 

        }else{
            echo 0;		
        }
        
    }    


    public function cambiar() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiar(
                                    $_POST["id_contrato"], 
                                    $_POST["responsable_contrato"]
                                );        
      
       

            $ContratosModel->insertar_trazabilidad(
                $_POST["id_contrato"],
                "Cambió el responsable del radicado"
            ); 

        
    }    

    public function nueva() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();            
    
        $ContratosModel->insertar_trazabilidad(
            $_POST["id_contrato"],
            $_POST["bitacora_contrato_editar"]
        ); 
        
    }    



    public function mover_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->mover_default(
                                    $_POST["radicados"], 
                                    $_POST["carpeta_contrato"]
                                );        
      
        if( $resp != 0 ){
            
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Movió el radicado de carpeta"
                    ); 
                }
            }

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    

    public function cambiar_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiar_default(
                                    $_POST["radicados"], 
                                    $_POST["responsable_contrato"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el responsable del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_contrato"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $ContratosModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el estado del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    

    
    public function archivar_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->insertar_archivar(
                                    $_POST["radicados"], 
                                    $_POST["archivador"],
                                    $_POST["fechainicio"],
                                    $_POST["fechafinal"],
                                    $_POST["unidad"],
                                    $_POST["codigo"],
                                    $_POST["folios"],
                                    $_POST["anexos"]
                                );        

             echo 1;    
       
        
    }    



    public function cambiarestado() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();
            
        $resp = $ContratosModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_contrato"]
                                );        

                   
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){
                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    "Se modificó el estado del Radicado"
                ); 
            }
        }

            echo 1;    
        
    }    



    public function nueva_default() {
        
        $this->model->cargar("ContratosModel.php", 'radicados');
        $ContratosModel = new ContratosModel();   
        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    $_POST["bitacora_contrato"]
                ); 
                
            }

        }
        
    }    


    public function eliminar() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->eliminar($_POST["radicados"]);
        
        echo "1";        
        
    }
   

    public function enviarBandejaContrato() {
        
        $this->model->cargar("ContratosModel.php", "radicados");
        $ContratosModel = new ContratosModel();
        
        $ContratosModel->enviarBandejaContrato($_POST["radicados"]);

        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $ContratosModel->insertar_trazabilidad(
                    $array[0],
                    "Envió el radicado nuevamente a la Bandeja de Entrada"
                ); 
                
            }

        }
        
        echo "1";        
        
    }
   

    
    function EnviarCorreo($mensaje, $asunto, $correo1='', $nombre1=''){
                         
        $mails = new Correos();
        
        if($correo1 != ""){
            $mails->AddBCC( $correo1, $nombre1 );        
        }
           
                        
        $mails->Subject = $asunto;          
        $mails->Body = $mensaje;              
                 
        $enviado = $mails->Send();         
            
        if($enviado){
            echo   "EL MENSAJE FUE ENVIADO ".$mails->ErrorInfo;                     
        }else{
            echo "NO FUE POSIBLE ENVIAR EL MENSAJE ".$mails->ErrorInfo;             
        }  
        
    }

    
    public function cargarSubseriesContratos() {
        
        $froms = new Formularios();
         
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodosPorSerie($_POST['id_serie_contrato']);

        echo $froms->Lista_Desplegable(
            $subseries,
            'nombre_subserie',
            'id_subserie',
            'subserie_contrato',
            '',
            '',
            'cargar_tiposdocumentales_contratos()'
        );

    }       
             
        
    public function cargarTiposdocumentalesContratos() {
        
        $froms = new Formularios();
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();

        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($_POST['id_subserie_contrato']);

        echo $froms->Lista_Desplegable(
            $tiposdocumentales,
            'nombre_tipodocumental',
            'id_tipodocumental',
            'tipodocumental_contrato',
            '',
            '',
            ''
        );

    }     

             
 }