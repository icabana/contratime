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
        ->setCellValue('B1', 'Número de Proceso')                    
        ->setCellValue('C1', 'Valor del Proceso')                    
        ->setCellValue('D1', 'Número de Contrato')                    
        ->setCellValue('E1', 'Valor del Contrato')                    
        ->setCellValue('F1', 'Modalidad')                    
        ->setCellValue('G1', 'Tipo de Contrato')                    
        ->setCellValue('H1', 'Contratista')                    
        ->setCellValue('I1', 'Valor')                    
        ->setCellValue('J1', 'Fecha de Inicio')                    
        ->setCellValue('K1', 'Fecha Final')                    
        ->setCellValue('L1', 'Objeto')    
        ->setCellValue('M1', 'Estado');    

    $columna =2;    
    $cont = 1;
    
    // TABLA DEL EXCEL
    foreach($contratos as $contrato){

        $this->excel->setActiveSheetIndex(0)
             ->setCellValue('A'.$columna, $cont)
             ->setCellValue('B'.$columna, $contrato['numproceso_contrato'])      
             ->setCellValue('C'.$columna, $contrato['valproceso_contrato'])      
             ->setCellValue('D'.$columna, $contrato['numero_contrato'])      
             ->setCellValue('E'.$columna, $contrato['valor_contrato'])      
             ->setCellValue('F'.$columna, utf8_encode($contrato['nombre_modalidad']))
             ->setCellValue('G'.$columna, utf8_encode($contrato['nombre_tipocontrato']))
             ->setCellValue('H'.$columna, utf8_encode($contrato['nombres_contratista']." ".$contrato['apellidos_contratista']))
             ->setCellValue('I'.$columna, $contrato['valor_contrato'])
             ->setCellValue('J'.$columna, $contrato['fechainicio_contrato'])
             ->setCellValue('K'.$columna, $contrato['fechafinal_contrato'])
             ->setCellValue('L'.$columna, utf8_encode($contrato['objeto_contrato']))
             ->setCellValue('M'.$columna, $contrato['nombreestado_contrato']);

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

    $this->excel->getActiveSheet()->getStyle('A1:M1')->applyFromArray($styleArray_color);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);

    /////// ALMACENAR EL DOCUMENTO
    
    $this->excel->getActiveSheet()->setTitle('Reporte de Contratos');

    $this->excel->setActiveSheetIndex(0);

    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
    $objWriter->save($ruta);
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;


?>