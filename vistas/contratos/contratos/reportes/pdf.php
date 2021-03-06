<?php

    $this->pdf = new Plantilla2('L', 'mm', 'legal');

    $this->pdf->SetCreator('LoginTime');
    $this->pdf->SetAuthor('LoginTime');
    $this->pdf->SetTitle('Reporte de Contratos');

    $this->pdf->SetFillColor(210, 210, 210);

    $this->pdf->SetMargins("20", "15", "20");

    $this->pdf->AddPage();


    //TITULO    
    $this->pdf->SetTextColor(170, 170, 170);
    $this->pdf->SetFont('Arial', 'B', 14);
    $this->pdf->Cell(0, 10, "REPORTE DE CONTRATOS", 0, 1, "C");
    $y = $this->pdf->GetY();       
    $this->pdf->line('50', $y, '300', $y);
    $this->pdf->ln();


    //TABLA DE CONTRATISTAS
    $this->pdf->SetTextColor(0, 0, 0);
    $this->pdf->SetWidths(array(10,25,35,25,35,55,55,25,25,25));
    $this->pdf->SetAligns(array('L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L'));



    $this->pdf->SetFont('Arial', 'B', 9);

    $this->pdf->Cell(10, 10, utf8_decode('No.'),1,0, "C", 1);
    $this->pdf->Cell(25, 10, utf8_decode('No. Proceso'),1,0, "C", 1);
    $this->pdf->Cell(35, 10, utf8_decode('Valor Proceso'),1,0, "C", 1);
    $this->pdf->Cell(25, 10, utf8_decode('No. Contrato'),1,0, "C", 1);
    $this->pdf->Cell(35, 10, utf8_decode('Valor Contrato'),1,0, "C", 1);
    $this->pdf->Cell(55, 10, utf8_decode('Modalidad de Selección'),1,0, "C", 1);   
    $this->pdf->Cell(55, 10, utf8_decode('Contratista'),1,0, "C", 1);
    $this->pdf->Cell(25, 10, utf8_decode('Fecha Inicio'),1,0, "C", 1);
    $this->pdf->Cell(25, 10, utf8_decode('Fecha Final'),1, 0, "C", 1);
    $this->pdf->Cell(25, 10, utf8_decode('Estado'),1,1, "C", 1);


    $this->pdf->SetFont('Arial', '', 8);
    $cont = 1;
    foreach ($contratos as $contrato) {

        $this->pdf->Row(
            array(
                $cont,
                $contrato['numproceso_contrato'],
                "$".number_format($contrato['valproceso_contrato'],2,',','.'),
                $contrato['numero_contrato'],
                "$".number_format($contrato['valor_contrato'],2,',','.'),
                utf8_decode($contrato['nombre_modalidad']),
                utf8_decode($contrato['nombre_contratista']),
                $contrato['fechainicio_contrato'],
                $contrato['fechafinal_contrato'],
                $contrato['nombreestado_contrato']
            )
        );

        $cont++;
    }


?>