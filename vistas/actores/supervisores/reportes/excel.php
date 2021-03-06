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
        ->setCellValue('B1', 'Tipo Persona')                    
        ->setCellValue('C1', 'Documento')                    
        ->setCellValue('D1', 'Nombre')                    
        ->setCellValue('E1', 'Dirección Residencia')                    
        ->setCellValue('F1', 'Dirección Correspondencia')                    
        ->setCellValue('G1', 'Telefono')                    
        ->setCellValue('H1', 'Celular')                    
        ->setCellValue('I1', 'Correo')                    
        ->setCellValue('J1', 'Pagina Web')                    
        ->setCellValue('K1', 'Pais')                    
        ->setCellValue('L1', 'Departamento')                    
        ->setCellValue('M1', 'Ciudad')                    
        ->setCellValue('N1', 'Fecha de Nacimiento')                    
        ->setCellValue('O1', 'Estado Civil')                    
        ->setCellValue('P1', 'Genero')                      
        ->setCellValue('Q1', 'Profesión');    

    $columna =2;    
    $cont = 1;
    
    // TABLA DEL EXCEL
    foreach($supervisores as $supervisor){

        $this->excel->setActiveSheetIndex(0)
             ->setCellValue('A'.$columna, $cont)
             ->setCellValue('B'.$columna, $supervisor['nombre_tipopersona'])                                
             ->setCellValue('C'.$columna, $supervisor['documento_supervisor'])
             ->setCellValue('D'.$columna, $supervisor['nombre_supervisor'])
             ->setCellValue('E'.$columna, $supervisor['dirresidencia_supervisor'])
             ->setCellValue('F'.$columna, $supervisor['dircorrespondencia_supervisor'])
             ->setCellValue('G'.$columna, $supervisor['telefono_supervisor'])
             ->setCellValue('H'.$columna, $supervisor['celular_supervisor'])
             ->setCellValue('I'.$columna, $supervisor['correo_supervisor'])
             ->setCellValue('J'.$columna, $supervisor['paginaweb_supervisor'])
             ->setCellValue('K'.$columna, $supervisor['nombre_pais'])
             ->setCellValue('L'.$columna, $supervisor['nombre_departamento'])
             ->setCellValue('M'.$columna, $supervisor['nombre_municipio'])
             ->setCellValue('N'.$columna, $supervisor['fechanacimiento_supervisor'])
             ->setCellValue('O'.$columna, $supervisor['nombre_estadocivil'])
             ->setCellValue('P'.$columna, $supervisor['nombre_genero'])
             ->setCellValue('Q'.$columna, $supervisor['nombre_profesion']);

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

    $this->excel->getActiveSheet()->getStyle('A1:Q1')->applyFromArray($styleArray_color);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
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
    $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);


    /////// ALMACENAR EL DOCUMENTO
    
    $this->excel->getActiveSheet()->setTitle('Reporte de Supervisores');

    $this->excel->setActiveSheetIndex(0);

    $callStartTime = microtime(true);

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
    $objWriter->save($ruta);
    $callEndTime = microtime(true);
    $callTime = $callEndTime - $callStartTime;


?>