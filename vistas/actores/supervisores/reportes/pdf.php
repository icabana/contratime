<?php

    $this->pdf = new Plantilla1();

    $this->pdf->SetCreator('LoginTime');
    $this->pdf->SetAuthor('LoginTime');
    $this->pdf->SetTitle('Reporte de Supervisores');

    $this->pdf->SetFillColor(210, 210, 210);

    $this->pdf->SetMargins("20", "15", "20");

    $this->pdf->AddPage();



    //TITULO    
    $this->pdf->SetTextColor(170, 170, 170);
    $this->pdf->SetFont('Arial', 'B', 14);
    $this->pdf->Cell(0, 10, "REPORTE DE SUPERVISORS", 0, 1, "C");
    $y = $this->pdf->GetY();    
    $this->pdf->line('50', $y, '160', $y);
    $this->pdf->ln();





    //TABLA DE SUPERVISORS
    $this->pdf->SetTextColor(0, 0, 0);
    $this->pdf->SetWidths(array(10, 55, 55, 55));
    $this->pdf->SetAligns(array('L', 'L', 'L', 'L'));



    $this->pdf->SetFont('Arial', 'B', 9);
    $this->pdf->Cell(10, 8, utf8_decode('No.'), 1, 0, "", 1);
    $this->pdf->Cell(55, 8, utf8_decode('Documento'), 1, 0, "", 1);
    $this->pdf->Cell(55, 8, utf8_decode('Nombre'), 1, 0, "", 1);
    $this->pdf->Cell(55, 8, utf8_decode('Correo Electrónico'), 1, 1, "", 1);


    $this->pdf->SetFont('Arial', '', 8);
    $cont = 1;
    foreach ($supervisores as $supervisor) {

        $this->pdf->Row(
            array(
                $cont,
                $supervisor['codigo_tipodocumento']." ".$supervisor['documento_supervisor'],
                $supervisor['nombre_supervisor'],
                $supervisor['correo_supervisor']
            )
        );

        $cont++;
    }


?>