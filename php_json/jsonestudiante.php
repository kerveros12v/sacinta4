<?php
require_once("../crud/CrudEstudiante.php");
$id=$_POST['id'];
    $jsonest=new CrudEstudiantes();
    $est1=$jsonest->obtenerEstudiantes($id);
    echo ($est1->formatoJSON());

?> 