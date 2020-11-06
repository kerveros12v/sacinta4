<?php

require_once("../Crud/CrudEstudiante.php");

use Crud\CrudEstudiantes;
session_start();
function mostrarfotoestudiante($estudiante){

    $crudauximg = new CrudEstudiantes();
    return  $crudauximg->cargarImg($estudiante);
}
echo mostrarfotoestudiante($_SESSION['campbuscarest']);
?>
