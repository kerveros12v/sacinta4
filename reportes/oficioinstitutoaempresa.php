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
    /***
     *pagina 1
     ****/
    //
    $pdf->AddPage();
    $pdf->Rect(165, 35, 35, 12, 'C');
    $pdf->SetXY(46, 30);
    $pdf->SetFont('Arial', 'B', 12);
    //$pdf->Rect(189, 30, 15, 8, 'C');
    $pdf->Cell(0, 0, utf8_decode('OFICIO DEL INSTITUTO TECNOLÓGICO A LA EMPRESA'), 0, 1, 'J', false);
    $pdf->SetXY(175, 38);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 1, utf8_decode('FORM'), 0, 1, 'J', false);
    $pdf->SetXY(165, 42);
    $pdf->CellFitSpace(35, 5, utf8_decode('002-' . $numsolicitud), 0, 1, 'C', false); //Auto ajustable
    $pdf->SetXY(152, 52);
    $pdf->CellFitSpace(50, 5, utf8_decode('Cayambe,' . strftime("%d de %b del %Y")), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 65);
    $pdf->CellFitSpace(160, 5, utf8_decode('Señor (es)'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 70);
    $pdf->CellFitSpace(160, 5, utf8_decode($empresa), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 85);
    $pdf->SetFont('Arial', '', 10);
    $pdf->CellFitSpace(180, 5, utf8_decode('Presente.-'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 90);
    $pdf->CellFitSpace(180, 5, utf8_decode('De mis consideraciones:'), 0, 1, 'J', false); //Auto ajustable
    $pdf->SetXY(25, 98);
    $pdf->MultiCell(160, 5, utf8_decode('El portador de la presente Sr(a) ' . $nombreestudiante . ',  con cédula de identidad número ' . $cedula . ' ,es estudiante de la escuela ' . $escuela . ', y habiendo sido acreditado por la secretaría del nivel tecnológico para la realización de las prácticas profesionales, se ha inscrito para el desarrollo del proceso de las mencionadas Prácticas.')); //Auto ajustable
    $pdf->SetXY(25, 125);
    $pdf->MultiCell(160, 5, utf8_decode('El citado estudiante ha demostrado gran interés en realizar su trabajo en esa Empresa. Por esta razón, si existiese la posibilidad efectiva de aceptarlo, les agradeceríamos la notificación respectiva. En caso de ser afirmativa esta posibilidad, les agradecemos que el estudiante tome contacto con el posible Tutor a fin de elaborar el programa de trabajo a ser desarrollado durante su estadía en la Empresa, debido a que la presentación del cronograma de trabajo es uno de los requisitos exigidos para formalizar su inscripción en el programa.')); //Auto ajustable
    $pdf->SetXY(25, 160);
    $pdf->MultiCell(160, 5, utf8_decode('Como orientación para la elaboración de dicho programa, sugerimos se le asigne la resolución de un problema específico para, de esa forma, aprovechar al máximo su tiempo disponible durante la ejecución.')); //Auto ajustable
    $pdf->SetXY(25, 180);
    $pdf->MultiCell(160, 5, utf8_decode('Agradeciéndoles su colaboración, quedo a sus órdenes para cualquier información adicional que redunde en beneficio, tanto del estudiante como de la Empresa.')); //Auto ajustable
    $pdf->SetXY(75, 210);
    $pdf->MultiCell(60, 5, utf8_decode('Atentamente,'), 0, 'C', false); //Auto ajustable
    $pdf->SetXY(75, 220);
    $pdf->MultiCell(60, 5, utf8_decode(' __________________________'), 0, 'C', false); //Auto ajustable
    $pdf->SetXY(75, 225);
    $pdf->Cell(60, 5, utf8_decode('Lic. Rebeca Rea V.'), 0, 1, 'C', false);
    $pdf->SetXY(75, 230);
    $pdf->Cell(60, 5, utf8_decode('DIRECTORA UPRAP.'), 0, 1, 'C', false);
    $pdf->Output();
} catch (\Throwable $e) {
    echo $e;
}
