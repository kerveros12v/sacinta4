<?php
require_once("ajaxsselectinstituto.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
if ($_SESSION['user'] != "") {
    echo cargarinstitutos(-1);
}
