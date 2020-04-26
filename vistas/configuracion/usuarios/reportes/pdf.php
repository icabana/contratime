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
    $this->pdf->Cell(0, 10, "REPORTE DE USUARIOS", 0, 1, "C");
    $y = $this->pdf->GetY();    
    $this->pdf->line('50', $y, '160', $y);
    $this->pdf->ln();





    //TABLA DE USUARIOS
    $this->pdf->SetTextColor(0, 0, 0);
    $this->pdf->SetWidths(array(10, 40, 80, 40));
    $this->pdf->SetAligns(array('C', 'C', 'L', 'C'));



    $this->pdf->SetFont('Arial', 'B', 9);
    $this->pdf->Cell(10, 8, utf8_decode('No.'), 1, 0, "C", 1);
    $this->pdf->Cell(40, 8, utf8_decode('Documento'), 1, 0, "C", 1);
    $this->pdf->Cell(80, 8, utf8_decode('Correo Electrónico'), 1, 0, "C", 1);
    $this->pdf->Cell(40, 8, utf8_decode('Estado'), 1, 1, "C", 1);


    $this->pdf->SetFont('Arial', '', 8);
    $cont = 1;
    foreach ($usuarios as $usuario) {

        if($usuario['estado_usuario'] == "A"){
            $estado = "ACTIVO";
        }else{
            $estado = "INACTIVO";
        }

        $this->pdf->Row(
            array(
                $cont,
                $usuario['documento_usuario'],
                $usuario['correo_usuario'],
                $estado
            )
        );

        $cont++;
    }


?>