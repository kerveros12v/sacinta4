<?php
require_once("ajaxsselectgeneros.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
if ($_SESSION['user'] != "") {
    echo cargarGeneros(0);
}
