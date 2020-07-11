<?php
require ("ajaxsselectprovincia.php");
try{
    echo cargarProvinciasporpais($_POST['id']);
}
catch(Exception $ex){
    echo $ex;
}

?>