<?php

    error_reporting(E_ALL);
    ini_set('display_errors', FALSE);
    ini_set('display_startup_errors', FALSE);
    date_default_timezone_set('Europe/London');

    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

    $this->excel = new PHPExcel();

    $this->excel->getProperties()->setCreator("ViceInvestigacion")
                                ->setLastModifiedBy("Maarten Balliauw")
                                ->setTitle("PHPExcel Test Document")
                                ->setSubject("PHPExcel Test Document")
                                ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                                ->setKeywords("office PHPExcel php")
                                ->setCategory("Test result file");




    //CONTENIDO DEL EXCEL                                
                    

    // CABECERA DEL EXCEL
    $this->excel->setActiveSheetIndex(0)            
        ->setCellValue('A1', 'No.')
        ->setCellValue('B1', 'Documento')                    
        ->setCellValue('C1', 'Correo')            
        ->setCellValue('D1', 'Estado');
    

    $columna =2;    
    $cont = 1;

    
    // TABLA DEL EXCEL
    foreach($usuarios as $usuario){                            

        if($usuario['estado_usuario']){
            $estado = "ACTIVO";
        }else{
            $estado = "INACTIVO";
        }

        $this->excel->setActiveSheetIndex(0)
             ->setCellValue('A'.$columna, $cont)
             ->setCellValue('B'.$columna, $usuario['documento_usuario'])                                
             ->setCellValue('C'.$columna, $usuario['correo_usuario'])                
             ->setCellValue('D'.$columna, $estado);

        $columna ++;
        $cont ++;
    }

          



    ///// MANEJO DE ESTILOS
    $styleArray_color = array(
        'font' => array(
            'bold' => true,
            'width'=>55
        ),
        'borders' => array(
            'top' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
            ),
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'CCFFCC'),
        
            'rotation' => 90,
            'startcolor' => array(
                'argb' => 'FF1C00',
            ),
            'endcolor' => array(
                'argb' => 'FF1C00',
            ),
        ),
    );

    $this->excel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($styleArray_color);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(45);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
    



    /////// ALMACENAR EL DOCUMENTO
    
    $this->excel->getActiveSheet()->setTitle('Reporte de Usuarios');

    $this->excel->setActiveSheetIndex(0);

    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
    $objWriter->save($ruta);
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;


?>