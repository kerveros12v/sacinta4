<?php

namespace Reporte;



require_once("../fphf/fpdf.php");
class PlantillaReportes extends \FPDF\FPDF
{

    // Cabecera de página
    function Header()
    {

        // Logo
        $this->Image('../img/condorlogo.png', 0, -32, 237, 0, 'PNG');
        $this->Image('../img/logo-senescyt-educacion-superior-ecuador.png', 6, 8, 42, 17);
        // Arial bold 15
        $this->SetFont('Times', 'B', 10.5);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, -6, utf8_decode("SUBSECRETARÍA DE FORMACIÓN TÉCNICA Y TECNOLÓGICA"), 0, 0, 'C');
        $this->Ln(6);
        $this->Cell(190, -7, utf8_decode("INSTITUTO TECNOLÓGICO SUPERIOR"), 0, 0, 'C');
        $this->Ln(5);
        $this->Cell(190, -7, utf8_decode("NELSON TORRES"), 0, 0, 'C');
        $this->Ln(5);
        $this->Cell(190, -7, utf8_decode("(CÓDIGO: 2189)"), 0, 0, 'C');
        $this->Ln(9);
        $this->Cell(190, -7, utf8_decode("FORMULARIO DE MATRÍCULA"), 0, 0, 'C');
        $this->Ln(4);

        $this->Image('../img/logointformulario.png', 163, 7, 42, 17);
        // Salto de línea
        $this->Ln(1);
        $w = array(40, 35, 45, 40);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        //$this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
    //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '', $scale = false, $force = true)
    {
        //Get string width
        $str_width = $this->GetStringWidth($txt);
        if ($str_width <= 0) $str_width = 5;
        //Calculate ratio to fit cell
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $ratio = ($w - $this->cMargin * 2) / $str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit) {
            if ($scale) {
                //Calculate horizontal scaling
                $horiz_scale = $ratio * 100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET', $horiz_scale));
            } else {
                //Calculate character spacing in points
                $char_space = ($w - $this->cMargin * 2 - $str_width) / max($this->MBGetStringLength($txt) - 1, 1) * $this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET', $char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align = '';
        }

        //Pass on to Cell method
        $this->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT ' . ($scale ? '100 Tz' : '0 Tc') . ' ET');
    }

    function CellFitSpace($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, false, false);
    }

    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if ($this->CurrentFont['type'] == 'Type0') {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++) {
                if (ord($s[$i]) < 128)
                    $len++;
                else {
                    $len++;
                    $i++;
                }
            }
            return $len;
        } else
            return strlen($s);
    }
    //************** Fin del código para ajustar texto *****************
    //******************************************************************
}
