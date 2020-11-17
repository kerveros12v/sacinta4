<?php
require '../vendor/autoload.php';

//use PhpOffice\PhpSpreadsheet\IOFactory;

function nuevoestudiante($cedula)
{

    try {
        $ruta = '../recursosexecl/postulantes.xls';
        $spreadsheet = PhpOffice\PhpSpreadsheet\IOFactory::load($ruta);
        $xls_data = $spreadsheet->getSheet(0)->toArray(null, true, true, true);
        $nr = count($xls_data); //number of rows
        for ($i = 0; $i <= $nr; $i++) {
            while ($ced = current($array)) {
                if ($ced == $cedula) {
                    echo "<script>console.log('existe la cedula >>" . $cedula . "');</script> ";
                }
                next($xls_data[$i]);
            }
            //echo  "</br>";
        }
        // code...
    } catch (\Throwable $e) {
        // throw ;
    }
}
nuevoestudiante('1724675598');
