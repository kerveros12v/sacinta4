<?php
require ("ajaxsselectTipoColegios.php");
try{
    echo cargartipoColegio($_POST['id']);
}
catch(Exception $ex){
    echo $ex;
}

?>