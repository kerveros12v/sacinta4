<?php
require("ajaxsselectpueblo.php");
try {
    //echo cargarPuebloporEtnia($_POST['id']);
    echo cargarPuebloporEtnia($_POST['id']);
} catch (\Throwable $ex) {
    echo $ex;
}
