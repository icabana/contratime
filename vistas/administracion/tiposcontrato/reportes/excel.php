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
        ->setCellValue('B1', 'Tipo de Contrato');
    

    $columna =2;    
    $cont = 1;

    
    // TABLA DEL EXCEL
    foreach($tiposcontrato as $tipocontrato){                            

        $this->excel->setActiveSheetIndex(0)
             ->setCellValue('A'.$columna, $cont)
             ->setCellValue('B'.$columna, $tipocontrato['nombre_tipocontrato']);

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

    $this->excel->getActiveSheet()->getStyle('A1:B1')->applyFromArray($styleArray_color);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(80);
    



    /////// ALMACENAR EL DOCUMENTO
    
    $this->excel->getActiveSheet()->setTitle('Tipos de Contrato');

    $this->excel->setActiveSheetIndex(0);

    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
    $objWriter->save($ruta);
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;


?>