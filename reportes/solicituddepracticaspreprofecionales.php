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
    $numsolicitud = "1";
    $nombreestudiante = "NOMBRE DE PRUEBA";
    $nivel = "QUINTO";
    $escuela = "ESCUELA DE PRUEBA";
    $empresa = "EMPRESA ELECTRICA EMELNORTE";
    $cedula = "9999999999";
    $direccionempresa = "Direccion de prueba";
    $telefonoempresa = "6666666666";
    $contacto = "Nombre del Contacto";
    $supervisor = "Nombre del Supervisor";
    $telefonosupervisor = "000000000";
    $pdf = new PlantillaReportes();

    $pdf->AddPage();
    /***
     *pagina 1
     ****/
    //

    $pdf->Rect(165, 35, 35, 12, 'C');
    $pdf->SetXY(62, 30);
    $pdf->SetFont('Arial', 'B', 12);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode('SOLICITUD DE PRÁCTICA PROFESIONAL'), 0, 1, 'J', false);
    $pdf->SetXY(175, 38);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 1, utf8_decode('FORM'), 0, 1, 'J', false);
    $pdf->SetXY(165, 42);
    $pdf->CellFitSpace(35, 5, utf8_decode('001-' . $numsolicitud), 0, 1, 'C', false); //Auto ajustable
    $pdf->SetXY(152, 52);
    $pdf->CellFitSpace(50, 5, utf8_decode('Cayambe,' . strftime("%d de %b del %Y")), 0, 1, 'J', false); //Auto ajustable

    $pdf->SetXY(25, 65);
    $pdf->CellFitSpace(50, 5, utf8_decode('Señor Econ.'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 70);
    $pdf->CellFitSpace(50, 5, utf8_decode('Juan Ushiña G. MsC.'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 75);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('RECTOR DEL INSTITUTO TECNOLÓGICO SUPERIOR "NELSON TORRES"'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 85);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Presente.-'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 90);
    $pdf->CellFitSpace(180, 5, utf8_decode('De mis consideraciones:'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 98);
    $pdf->MultiCell(160, 5, utf8_decode('Yo,' . $nombreestudiante . ', estudiante del  ' . $nivel . ' nivel de la Escuela de ' . $escuela . ' solicito de manera muy comedida, se digne autorizar a quién corresponda, la aprobación para realizar las prácticas profesionales  en la empresa/organización/institución ' . $empresa . ' previo a la obtención del título de Tecnólogo.')); //Auto ajustable
    $pdf->SetXY(25, 130);
    $pdf->MultiCell(160, 5, utf8_decode('Por la favorable atención que se digne dar a la presente le anticipo mis agradecimientos.')); //Auto ajustable
    $pdf->SetXY(25, 160);
    $pdf->MultiCell(60, 5, utf8_decode('Atentamente,'), 0, 'C', false); //Auto ajustable
    $pdf->SetXY(25, 170);
    $pdf->MultiCell(60, 5, utf8_decode(' __________________________'), 0, 'C', false); //Auto ajustable
    $pdf->SetXY(25, 175);
    $pdf->Cell(60, 5, utf8_decode($nombreestudiante), 0, 1, 'C', false);
    $pdf->SetXY(25, 180);
    $pdf->MultiCell(60, 5, utf8_decode('CI:' . $cedula), 0, 'C', false); //Auto ajustable
    $pdf->SetXY(25, 185);
    $pdf->MultiCell(60, 5, utf8_decode('Estudiante'), 0, 'C', false); //Auto ajustable
    $pdf->Rect(100, 155, 90, 40, 'C');
    $pdf->SetXY(102, 156);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Empresa: ' . $empresa), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(102, 162);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Direccion: ' . $direccionempresa), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(102, 167);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Telefono: ' . $telefonoempresa), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(102, 172);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Contacto: ' . $contacto), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(102, 177);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Supervisor: ' . $supervisor), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(102, 182);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Telefono de Supervisor: ' . $telefonosupervisor), 0, 1, 'J', false); //Auto ajustable

    $pdf->Output();
} catch (\Throwable $e) {
    echo $e;
}
