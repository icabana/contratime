<?php

    $this->pdf = new Plantilla1();

    $this->pdf->SetCreator('LoginTime');
    $this->pdf->SetAuthor('LoginTime');
    $this->pdf->SetTitle('Reporte de Usuarios');

    $this->pdf->SetFillColor(210, 210, 210);

    $this->pdf->SetMargins("20", "15", "20");

    $this->pdf->AddPage();



    //TITULO    
    $this->pdf->SetTextColor(170, 170, 170);
    $this->pdf->SetFont('Arial', 'B', 14);
    $this->pdf->Cell(0, 10, "REPORTE DE FUENTES DE CONTRATACION", 0, 1, "C");
    $y = $this->pdf->GetY();    
    $this->pdf->line('50', $y, '160', $y);
    $this->pdf->ln();





    //TABLA DE FUENTES
    $this->pdf->SetTextColor(0, 0, 0);
    $this->pdf->SetWidths(array(10, 160));
    $this->pdf->SetAligns(array('C', 'L'));



    $this->pdf->SetFont('Arial', 'B', 9);
    $this->pdf->Cell(10, 8, utf8_decode('No.'), 1, 0, "C", 1);
    $this->pdf->Cell(160, 8, utf8_decode('Nombre de la Fuente de Contratación'), 1, 1, "C", 1);


    $this->pdf->SetFont('Arial', '', 8);
    $cont = 1;
    foreach ($fuentes as $fuente) {

        $this->pdf->Row(
            array(
                $cont,
                $fuente['nombre_fuente']
            )
        );

        $cont++;
    }


?>