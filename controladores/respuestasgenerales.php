<?php
function guardarR()
{
    return dialogo("Guardado");
}
function actualizarR()
{
    return dialogo("Registro Actualizado");
}
function eliminarR()
{
    return dialogo("Registro Eliminado");
}
function tiempoExedido()
{
    return dialogo("Su sesión ha excedido el tiempo límite. Por favor, ingrese de nuevo.");
}
function optEliminar()
{
    return 0;
}
function actualizarFoto()
{
    return dialogo("Imagen Subida Correctamente");
}
function boolselect($o)
{
    if ($o == 1) {
        $s = " <option selected='selected' value='1'><label>Verdadero</label></option> <option  value='0'><label>Falso</label></option>";
    } else {
        $s = " <option  value='1'><label>Verdadero</label></option>"
            . " <option selected='selected' value='0'><label>Falso</label></option>";
    }

    return $s;
}
function boolestadoactual($o)
{
    $s = "";
    $lstarray = array('ACTIVO', 'NEGADO', 'EN PROCESO DE ACREDITACION', 'FINALIZADO');
    for ($i = 0; $i < 4; $i++) {
        if ($o == $i) {
            $s .= " <option selected='selected' value='" . $i . "'><label>" . $lstarray[$i] . "</label></option>";
        } else {
            $s .= " <option  value='" . $i . "'><label>" . $lstarray[$i] . "</label></option>";
        }
    }


    return $s;
}
function boolestadoactualdetalle($o)
{
    //$s = "";
    $lstarray = array('ACTIVO', 'NEGADO', 'EN PROCESO DE ACREDITACION', 'FINALIZADO');
    return $lstarray[$o];
}
function dialogo($respuesta)
{
    $resultado =  $respuesta;
    return $resultado;
}
function imprimecooke()
{

    return ("<script>console.log('Periodo Actual: {" . $_SESSION['peridoactual']
        . "}Campo de Busqueda de Periodo: {" . $_SESSION['campbuscarperiodo']
        . "}Campo de Busqueda de Estudiante: {" . $_SESSION['campbuscarest']
        . "}Tipo Usuario: {" . $_SESSION['tipouser']
        . "}Acceso: {" . $_SESSION['acceso']
        . "}est: {" . $_SESSION['est']
        . "}user: {" . $_SESSION['user']
        . "}');</script>");
}
