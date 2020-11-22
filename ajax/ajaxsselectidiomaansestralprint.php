<?php
require_once("ajaxsselectidiomaansestral.php");
session_start();
//if ($_SESSION['user'] != "") {
echo cargarIdiomaporEtnia($_POST['id']);
//}
