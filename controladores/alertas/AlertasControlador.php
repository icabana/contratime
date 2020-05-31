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

            $correos_supervisores[] = $param->valor('correosupervisor1');
            $correos_supervisores[] = $param->valor('correosupervisor2');
        
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
    
 }