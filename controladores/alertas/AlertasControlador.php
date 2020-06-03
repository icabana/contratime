<?php

class AlertasControlador extends ControllerBase {


    public function contratosxFinalizar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  

        $contratos = $AlertasModel->getContratosxFinalizar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $mensaje = file_get_contents("plantillas/correos/plantilla3/index.html");

            $numero_contrato = $contrato['numero_contrato'];

            $asunto = "Contrato No. ".$numero_contrato." esta por finalizar";

            $correos_supervisores = $SupervisoresModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_supervisores[] = $param->valor('correoalertas1');
            $correos_supervisores[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $fechas->diasEntreFechas($contrato['fechafinal_contrato'], date("Y-m-d")), $mensaje);
            $mensaje = str_replace("#numero_contrato#", $numero_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#fechainicio_contrato#", $contrato['fechainicio_contrato'], $mensaje);
            $mensaje = str_replace("#fechafinal_contrato#", $contrato['fechafinal_contrato'], $mensaje);
            $mensaje = str_replace("#valor_contrato#", "$".number_format($contrato['valor_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_supervisores);
        }
                        
    }    


    
    public function contratosMitadEjecucion() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("SupervisoresModel.php", "contratos");
        $SupervisoresModel = new SupervisoresContratosModel();  

        $contratos = $AlertasModel->getContratosMitadEjecucion();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $mensaje = file_get_contents("plantillas/correos/plantilla4/index.html");

            $numero_contrato = $contrato['numero_contrato'];

            $asunto = "Contrato No. ".$numero_contrato." tiene un 50% de su tiempo de Ejecución";

            $correos_supervisores = $SupervisoresModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_supervisores[] = $param->valor('correoalertas1');
            $correos_supervisores[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#numero_contrato#", $numero_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fechainicio_contrato#", $contrato['fechainicio_contrato'], $mensaje);
            $mensaje = str_replace("#fechafinal_contrato#", $contrato['fechafinal_contrato'], $mensaje);
            $mensaje = str_replace("#valor_contrato#", "$".number_format($contrato['valor_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_supervisores);

        }
                        
    }    

    
    
    
    public function procesosxAvisar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  

        $contratos = $AlertasModel->getProcesosxAvisar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $dias = $fechas->diasEntreFechas($contrato['favisoproceso_contrato'], date("Y-m-d"));

            $mensaje = file_get_contents("plantillas/correos/plantilla8/index.html");

            $numproceso_contrato = $contrato['numproceso_contrato'];

            $asunto = "La Fecha Máxima para Aviso/Invitación de la Convocatoria es en ".$dias." días";

            $correos_encargados = $EncargadosModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_encargados[] = $param->valor('correoalertas1');
            $correos_encargados[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $dias, $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $numproceso_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_encargados);
        }
                        
    }    
        
    public function procesosxPresentar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  

        $contratos = $AlertasModel->getProcesosxPresentar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $dias = $fechas->diasEntreFechas($contrato['fpresentacionproceso_contrato'], date("Y-m-d"));

            $mensaje = file_get_contents("plantillas/correos/plantilla9/index.html");

            $numproceso_contrato = $contrato['numproceso_contrato'];

            $asunto = "La Fecha Máxima para Presentación de las propuestas es en ".$dias." días";

            $correos_encargados = $EncargadosModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_encargados[] = $param->valor('correoalertas1');
            $correos_encargados[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $dias, $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $numproceso_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_encargados);
        }
                        
    }    

    public function procesosxEvaluar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();   

        $contratos = $AlertasModel->getProcesosxEvaluar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $dias = $fechas->diasEntreFechas($contrato['fevaluacionproceso_contrato'], date("Y-m-d"));

            $mensaje = file_get_contents("plantillas/correos/plantilla7/index.html");

            $numproceso_contrato = $contrato['numproceso_contrato'];

            $asunto = "La Fecha Máxima de Evaluación es en ".$dias." días";

            $correos_encargados = $EncargadosModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_encargados[] = $param->valor('correoalertas1');
            $correos_encargados[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $dias, $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $numproceso_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_encargados);
        }
                        
    }    

    
    public function procesosxAdjudicar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();   

        $contratos = $AlertasModel->getProcesosxAdjudicar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $dias = $fechas->diasEntreFechas($contrato['fadjudicacionproceso_contrato'], date("Y-m-d"));

            $mensaje = file_get_contents("plantillas/correos/plantilla5/index.html");

            $numproceso_contrato = $contrato['numproceso_contrato'];

            $asunto = "La Fecha Máxima de Adjudicación es en ".$dias." días";

            $correos_encargados = $EncargadosModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_encargados[] = $param->valor('correoalertas1');
            $correos_encargados[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $dias, $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $numproceso_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);    
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);        
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_encargados);
        }
                        
    }    


    
    
    public function procesosxCerrar() {
        
        $this->model->cargar("ContratosModel.php", "contratos");
        $ContratosModel = new ContratosModel();

        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $this->model->cargar("EncargadosModel.php", "contratos");
        $EncargadosModel = new EncargadosContratosModel();  

        $contratos = $AlertasModel->getProcesosxCerrar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $asunto = "";   
        $mensaje = "";

        foreach($contratos as $contrato){

            $dias = $fechas->diasEntreFechas($contrato['fcierreproceso_contrato'], date("Y-m-d"));

            $mensaje = file_get_contents("plantillas/correos/plantilla6/index.html");

            $numproceso_contrato = $contrato['numproceso_contrato'];

            $asunto = "La Fecha de Cierre del Proceso es en ".$dias." días";

            $correos_encargados = $EncargadosModel->getTodosCorreosxContrato($contrato['id_contrato']);

            $correos_encargados[] = $param->valor('correoalertas1');
            $correos_encargados[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $dias, $mensaje);
            $mensaje = str_replace("#numproceso_contrato#", $numproceso_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);     
            $mensaje = str_replace("#favisoproceso_contrato#", $contrato['favisoproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fpresentacionproceso_contrato#", $contrato['fpresentacionproceso_contrato'], $mensaje);   
            $mensaje = str_replace("#fevaluacionproceso_contrato#", $contrato['fevaluacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fadjudicacionproceso_contrato#", $contrato['fadjudicacionproceso_contrato'], $mensaje);
            $mensaje = str_replace("#fcierreproceso_contrato#", $contrato['fcierreproceso_contrato'], $mensaje);
            $mensaje = str_replace("#valproceso_contrato#", "$".number_format($contrato['valproceso_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            $correo->EnviarCorreo($mensaje, $asunto, $correos_encargados);
        }
                        
    }    



    
 }