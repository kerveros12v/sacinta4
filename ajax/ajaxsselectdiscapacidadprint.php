<?php
require_once("ajaxsselecttipodiscapacidad.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
if ($_SESSION['user'] != "") {
    echo cargarTipoDiscapacidadbool($_POST['id']);
} else {
    echo tiempoExedido();
}
