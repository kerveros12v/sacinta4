<?php
require_once("../Crud/CrudSetecCertificacion.php");
require_once("ajaxsselectSetecPerfil.php");
require_once("ajaxsselect2.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudSetecCertificacion;

session_start();
function cargartablaCertificaciones()
{
    $r = "";
    $crud = new CrudSetecCertificacion();
    $r .= '
    <tr class="ui-widget-header">
    <th>' . ajaxs_select2() . '</th>
    <th>Perfil</th>
    <th>Fecha de la prueba</th>
    <th>Hora de la prueba</th>
    <th>Costo</th>
    <th>Lugar donde sera Examinado</th>
    <th>Nombre de la Empresa/Lugar</th>
    <th>Direccion de la Empresa</th>
    <th>Telefono de la Empresa</th>
    <th></th>
    </tr>
    <tr>
    <td></td>
    <td>
    <select class="selector" id="fkidsetecperfil" name="fkidsetecperfil">
    ' . cargarPerfil(0) . '
    </select>
    </td>
    <td><input type="date" class="campfecha" id="fechaprueba" name="fechaprueba" value=""/>    </td>
    <td><input type="text" class="camptext1" id="horaprueba" name="horaprueba"   value=""/>    </td>

    <td><input type="number" class="campnum" id="costoCertidicacion" name="costoCertidicacion"   value=""/>    </td>

    <td><input type="text"  id="setecLugardondeExaminado" name="setecLugardondeExaminado"  value=""/>    </td>

    <td><input type="text"  id="setecnombreEmpresaLugar" name="setecnombreEmpresaLugar"   value=""/>    </td>
    <td><input type="text"  id="setecdireccionEmpresa" name="setecdireccionEmpresa"   value=""/>    </td>
    <td><input type="text"  class="camptext1" id="setecTelefonoEmpresa" name="setecTelefonoEmpresa"   value=""/>    </td>
    <td class="unilinea">
    <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">

    </td>
</tr>
   ';

    foreach ($crud->mostrar() as $dato) {

        $r .= '
        <tr>
        <td></td>
        <td>
        <select class="selector" id="fkidsetecperfil' . $dato->getIdsetecCertificacion() . '" name="fkidsetecperfil' . $dato->getIdsetecCertificacion() . '">
        ' . cargarPerfil($dato->getFkidsetecperfil()) . '
        </select>
        </td>
        <td><input type="date" class="campfecha" id="fechaprueba' . $dato->getIdsetecCertificacion() . '" name="fechaprueba' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getFechaprueba() . '"/>    </td>
        <td><input type="text" class="camptext1" id="horaprueba' . $dato->getIdsetecCertificacion() . '" name="horaprueba' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getHoraprueba() . '"/>    </td>
        <td><input type="number" class="campnum" id="costoCertidicacion' . $dato->getIdsetecCertificacion() . '" name="costoCertidicacion' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getCostoCertidicacion() . '"/>    </td>
        <td><input type="text"  id="setecLugardondeExaminado' . $dato->getIdsetecCertificacion() . '" name="setecLugardondeExaminado' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getSetecLugardondeExaminado() . '"/>    </td>
        <td><input type="text"  id="setecnombreEmpresaLugar' . $dato->getIdsetecCertificacion() . '" name="setecnombreEmpresaLugar' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getSetecnombreEmpresaLugar() . '"/>    </td>
        <td><input type="text"  id="setecdireccionEmpresa' . $dato->getIdsetecCertificacion() . '" name="setecdireccionEmpresa' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getSetecdireccionEmpresa() . '"/>    </td>
        <td><input type="text"  class="camptext1" id="setecTelefonoEmpresa' . $dato->getIdsetecCertificacion() . '" name="setecTelefonoEmpresa' . $dato->getIdsetecCertificacion() . '"   value="' . $dato->getSetecTelefonoEmpresa() . '"/>    </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsetecCertificacion() . ')">
        <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdsetecCertificacion() . ')">

        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaCertificaciones();
} else {
    echo '<tr>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
