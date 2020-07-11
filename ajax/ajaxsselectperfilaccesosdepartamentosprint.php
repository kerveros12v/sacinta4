<?php
require_once ("ajaxsselectperfilaccesosdepartamentos.php");
try{
    echo cargarlstaccesodepcodigo(-1);
}
catch(Exception $ex){
    echo $ex;
}

?>