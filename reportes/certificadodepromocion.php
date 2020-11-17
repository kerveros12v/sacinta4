<?php
require_once("PlantillaReportes.php");

use Reporte\PlantillaReportes;

function caluloEdadr($f1, $f2)
{

    $edad1 = abs(strtotime($f2) - strtotime($f1));
    $years = floor($edad1 / (365 * 60 * 60 * 24));
    $months = floor(($edad1 - ($years * 365 * 60 * 60 * 24)) / (30 * 60 * 60 * 24));
    $day = floor(($edad1 - ($years * 365 * 60 * 60 * 24) - ($months * 30 * 60 * 60 * 24)) / (60 * 60 * 24));
    return $years . " AÑOS ";
}
try {
    $nombreestudiante = "Vinueza Pozo Gabriel Fernando";
    $cedulaestudiante = "1003854179";
    $nivel = "PRIMERO";
    $paralelo = "A";
    $carrera = "Carrera de Prueba";
    $pdf = new PlantillaReportes();

    $pdf->AddPage();
    /***
     *pagina 1
     ****/
    //$pdf->Rect(15, 38, 40, 100, 'C');
    /*$pdf->Rect(15, 38, 180, 10, 'C');
    $pdf->Rect(15, 38, 65, 40 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 38, 180, 10 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 38, 180, 20 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 38, 180, 30 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 38, 180, 40 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 38, 180, 50 + (10 * $numestudiantes), 'C');
    $pdf->Rect(15, 28 + $posmotivo, 65, (10 * $nummotivos), 'C');
    $pdf->Rect(15, 38, 180,  $posmotivo, 'C');

    $pdf->Rect(15, 38, 180, 40 + ($posmotivo), 'C');
    $pdf->Rect(15, 38 + ($posmotivo), 90, 40, 'C');
*/    $pdf->SetXY(72, 30);
    $pdf->SetFont('Arial', 'B', 12);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode('CERTIFICADO DE PROMOCIÓN'), 0, 1, 'J', false);
    $pdf->SetXY(50, 35);
    $pdf->SetFont('Arial', 'B', 12);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 1, utf8_decode('PERÍODO ACADÉMICO NOVIEMBRE 2017 - ABRIL 2018'), 0, 1, 'J', false);
    $pdf->SetXY(25, 45);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(160, 5, utf8_decode('El suscrito Rector conjuntamente con la Secretaria del Instituto Tecnológico Superior "Nelson Torres", en forma legal CERTIFICAN:')); //Auto ajustable
    $pdf->SetXY(25, 60);
    $pdf->MultiCell(160, 5, utf8_decode('Que, el señor (a) (ita): ' . $nombreestudiante . ' , con C.C. ' . $cedulaestudiante . ' alumno(a) del ' . $nivel . ' nivel, paralelo "' . $paralelo . '" de la carrera de ' . $carrera . ' ha merecido las calificaciones finales en el presente periodo académico que al pie se expresan:')); //Auto ajustable
    $pdf->SetXY(25, 87);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 0, utf8_decode(' 1. -EJE  ACADÉMICO'), 0, 1, 'J', false);

    $pdf->Output();
} catch (\Throwable $e) {
    echo $e;
}
