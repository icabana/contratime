<?php

class Plantilla1 extends FPDF
{
    
    function Header()
    {

        $params = Parametros::singleton();

        $empresa = $params->valor("empresa");
        $nit = $params->valor("nit");
        $telefono = $params->valor("telefono");
        $direccion = $params->valor("direccion");
        $correo = $params->valor("correo");
        $paginaweb = $params->valor("paginaweb");
        
        
        $this->Image('imagenes/logos/logo.jpg', 15, 13, 27, 16);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 5, utf8_decode($empresa), 0, 1, 'C');

        $this->SetTextColor(170, 170, 170);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(0, 5, "NIT: ".$nit, 0, 1, 'C');
        
        
        $this->SetY(15);
        

        $this->SetFont('Arial', '', 7);
        $this->Cell(0, 4, utf8_decode("Teléfono: ").$telefono, 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode("Dirección: ").$direccion, 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode("Correo: ").$correo, 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode("Página Web: ").$paginaweb, 0, 1, 'R');



        $this->Ln();
        $this->Ln();

    }

    function Footer()
    {
        $params = Parametros::singleton();

        $eslogan = $params->valor("eslogan");
        $telefono = $params->valor("telefono");
        $direccion = $params->valor("direccion");
        $ciudad = $params->valor("ciudad");
        $correo = $params->valor("correo");
        $paginaweb = $params->valor("paginaweb");

        $this->SetY(-30);
        $this->SetFont('Arial', 'I', 8);

        $this->Cell(0, 6, $eslogan, 0, 1, 'C');

        $y = $this->GetY();

        $this->line('25', $y, '185', $y);

        $this->SetFont('Arial', 'B', 8);

        $this->Cell(0, 4, utf8_decode("Teléfono: ").$telefono.utf8_decode("    -    Dirección: ").$direccion."    -    Ciudad: ".$ciudad, 0, 1, 'C');

        $this->Cell(0, 4, "Correo: ".$correo.utf8_decode("    -    Página Web: ").$paginaweb, 0, 1, 'C');


    }

}