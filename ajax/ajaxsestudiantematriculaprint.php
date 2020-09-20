<?php

require_once("../controladores/respuestasgenerales.php");
session_start();
$_SESSION['campbuscarest'] = $_POST['id'];
function opcionmatriculaestudiantes()
{
    echo '..\Templates\visorDatosEstudiante.php';
}
if ($_SESSION['user'] != "") {

    echo opcionmatriculaestudiantes();
} else
    echo tiempoExedido();
