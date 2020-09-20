<?php
require_once("../controladores/respuestasgenerales.php");

session_start();
$_SESSION['campbuscarest'] = $_POST['cedula'];
function opcionurlestudiantes()
{

    echo '..\Templates\actualizarEstudiante.php';
}
if ($_SESSION['user'] != "") {

    echo opcionurlestudiantes();
} else
    echo tiempoExedido();
