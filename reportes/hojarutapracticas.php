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
    $fecha = date('Y-m-d H:i:s');
    $lstestudiantes = $arrayName = array('estudiante' => "nuevo estudiante", 'estudiante' => "nuevo estudiante", 'estudiante' => "nuevo estudiante", 'estudiante' => "nuevo estudiante");
    $empresa = "empresa de prueba";
    $reprecentanteempresa = "NOMBRE DEL FUNCIONARIO DE LA EMPRESA de prueba";
    $reprecentanteint = "NOMBRE DE FUNCIONARIO DEL INT de prueba";
    $horaingreso = "00:00:00";
    $horasalida = "00:00:00";
    $motivovisita = "Motivo de prueba";
    //inicio pdf
    $numestudiantes = 1;
    $nummotivos = 1;
    $posicion = 40 + (10 * $numestudiantes);
    $posmotivo = 10 + $posicion + (10 * $nummotivos);
    $pdf = new PlantillaReportes();

    $pdf->AddPage();
    /***
     *pagina 1
     ****/
    //$pdf->Rect(15, 38, 40, 100, 'C');
    $pdf->Rect(15, 38, 180, 10, 'C');
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
    $pdf->SetXY(88, 28);
    $pdf->SetFont('Arial', 'B', 12);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode('HOJA DE RUTA'), 0, 1, 'J', false);
    $pdf->SetXY(15, 35);
    $pdf->SetFont('Arial', '', 10);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 1, utf8_decode('PARA: DOCENTE TUTOR O MIEMBRO UNIDAD DE PRACTICAS PRE PROFESIONALES'), 0, 1, 'J', false);
    //1. FECHA
    $pdf->SetXY(18, 40);
    $pdf->SetFont('Arial', 'B', 12); //B
    $pdf->Cell(1, 5, utf8_decode('FECHA: '), 0, 1);
    $pdf->SetXY(80, 42);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 0, utf8_decode($fecha), 0, 1);
    //2.ESTUDIANTE(S)
    $pdf->SetXY(18, 53);
    $pdf->SetFont('Arial', 'B', 12); //B

    $pdf->Cell(0, 0, utf8_decode('ESTUDIANTE(S):'), 0, 1);
    $pdf->SetXY(80, 53);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 0, $lstestudiantes, 0, 1); //Celda
    //3. EMPRESA
    $pdf->SetXY(18, 13 + $posicion);
    $pdf->SetFont('Arial', 'B', 12); //B
    $pdf->Cell(0, 0, utf8_decode('EMPRESA'), 0, 1);
    $pdf->SetXY(80, 13 + $posicion);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 0, utf8_decode($empresa), 0, 1);
    //4.NOMBRE DEL FUNCIONARIO DE LA EMPRESA
    $pdf->SetXY(18, 23 + $posicion);
    $pdf->SetFont('Arial', 'B', 11); //B
    // $pdf->Rect(141, 46, 62, 16, 'C');
    $pdf->MultiCell(0, 0, utf8_decode('FUNCIONARIO DE LA EMPRESA'), 0, 1);
    $pdf->SetXY(80, 23 + $posicion);
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(0, 0, utf8_decode($reprecentanteempresa), 0, 1);

    //5. NOMBRE DE FUNCIONARIO DEL INT
    $pdf->SetXY(18, 33 + $posicion);
    $pdf->SetFont('Arial', 'B', 11); //B
    //$pdf->Rect(6, 62, 197, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode('FUNCIONARIO DEL INT'), 0, 1);
    $pdf->SetXY(80, 33 + $posicion);
    $pdf->SetFont('Arial', '', 11);
    // $pdf->Rect(6, 38, 197, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode($reprecentanteint), 0, 1);
    //6. HORA DE INGRESO
    $pdf->SetXY(18, 43 + $posicion);
    $pdf->SetFont('Arial', 'B', 12); //B
    $pdf->Cell(0, 0, utf8_decode('HORA DE INGRESO'), 0, 1);
    $pdf->SetXY(70, 43 + $posicion);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 0, $horaingreso, 0, 1);
    //7. HORA DE SALIDA
    $pdf->SetXY(100, 43 + $posicion);

    $pdf->SetFont('Arial', 'B', 12); //B
    //$pdf->Rect(6, 70, 98, 16, 'C');
    $pdf->Cell(0, 0, utf8_decode('HORA DE SALIDA'), 0, 1);
    $pdf->SetXY(140, 43 + $posicion);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(20, 0, $horasalida, 0, 1);
    //8.Motivo de Visita

    $pdf->SetXY(18, 53 + $posicion);
    $pdf->SetFont('Arial', 'B', 12); //B
    //$pdf->Rect(6, 70, 98, 16, 'C');

    $pdf->Cell(0, 0, utf8_decode('MOTIVO DE VISITA'), 0, 1);
    $pdf->SetXY(80,  53 + $posicion);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 0, $motivovisita, 0, 1);
    //FIRMA ESTUDIANTE:
    $pdf->SetXY(20, 63 + $posmotivo);
    $pdf->SetFont('Arial', '', 12);
    //$pdf->Rect(6, 70, 98, 16, 'C');
    $pdf->Cell(0, 0, '________________________', 0, 1);
    $pdf->SetXY(22, 68 + $posmotivo);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 0, utf8_decode('Firma Tutor Empresarial'), 0, 1);
    $pdf->SetXY(25, 75 + $posmotivo);
    $pdf->Cell(0, 0, utf8_decode(' Y Sello Institución:'), 0, 1);
    //FIRMA ESTUDIANTE:
    $pdf->SetXY(130, 63 + $posmotivo);
    $pdf->SetFont('Arial', '', 12);
    //$pdf->Rect(6, 70, 98, 16, 'C');
    $pdf->Cell(0, 0, '________________________', 0, 1);
    $pdf->SetXY(135, 68 + $posmotivo);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 0, utf8_decode('Firma tutor o miembro'), 0, 1);
    $pdf->SetXY(140, 75 + $posmotivo);
    $pdf->Cell(0, 0, utf8_decode('de la UPRAP-INT:'), 0, 1);
    $pdf->Output();
} catch (\Throwable $e) {
    echo $e;
}
