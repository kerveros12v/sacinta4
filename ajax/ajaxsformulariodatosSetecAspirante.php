<?php
require_once("../Crud/CrudSetecAspirante.php");
require_once("ajaxsselectgeneros.php");
require_once("ajaxsselectFormacionArtesanal.php");
require_once("ajaxsselectniveldeformacion.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectparroquias.php");
require_once("ajaxsselectdiscapacidad.php");
require_once("ajaxsselecttipodiscapacidad.php");
require_once("ajaxsselectSetecSocioEmpleo.php");
require_once("ajaxsselect2.php");

use Crud\CrudSetecAspirante;

function cargaSetecAspirante()
{
    $lista = '<tr>
    <td>
    ' . ajaxs_select2() . '
    <td>
    </tr>
    <tr>
    <th>Numero de Identificacion</th>
    <td>
        <input type="text" id="numeroidentificacionsetec" required="required"  />
    </td>
    </tr>
    <tr>
    <th>Primer Apellido</th>
    <td>
        <input type="text" id="primerApellidosetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Segundo Apellido</th>
    <td>
        <input type="text" id="segundoApellidosetec"   required="required"  />
    </td>
    </tr>
    <tr>
    <th>Primer Nombre</th>
    <td>
        <input type="text" id="primerNombresetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Segundo Nombre</th>
    <td>
        <input type="text" id="segundoNombresetec"   required="required"  />
    </td>
    </tr>
    <tr>
    <th>Fecha de Nacimiento</th>
    <td>
        <input type="date" id="fechanacimiento"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Genero</th>
    <td>
        <select class="selector" id="fkgenerosetec" >
    ' . cargarGeneros(0) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Formacion Artesano</th>
    <td>
        <select class="selector" id="fkformacionArtesano">
        ' . cargarFormacionArtesanal(0) . '

        </select>
    </td>
    </tr>
    <tr>
    <th>Instruccion Civil</th>
    <td>
        <select class="selector" id="instruccionRegistroCivil">
        ' . cargarNivelFormacion(0) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Instruccion Seleccionada</th>
    <td>
        <input type="text" id="setecaspiinstriccionseleccionada" required="required"  />
    </td>
    </tr>
    <tr>
    <th>Provincia</th>
    <td>
        <select class="selector" id="fkprovinciasetec" onchange="cargarCantonest1()" >
    ' . cargarProvinciasporpais(56) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Canton</th>
    <td>
        <select class="selector" id="fkcantonsetec" onchange="parroquiaRecidencia()">
        ' . cargarCanton(0, 0) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Parroquia</th>
    <td>
        <select class="selector" id="parroquiasetec">
        ' . cargarParroquia(0, 0) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Direccion</th>
    <td>
        <input type="text" id="direccionsetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Correo Electronico</th>
    <td>
        <input type="text" id="correoelectronicoSetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Telefono</th>
    <td>
        <input type="text" id="telefonosetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Celular</th>
    <td>
        <input type="text" id="celularsetec"  required="required"  />
    </td>
    </tr>
    <tr>
    <th>Tipo Discapacidad</th>
    <td>
        <select class="selector" id="fktipodiscapacidad">
    ' . cargarTipoDiscapacidad(0) . '
        </select>
    </td>
    </tr>
    <tr>
    <th>Socio Empleo</th>
    <td>
        <select class="selector" id="fksocioempleo">
        ' . cargarSetecSocioEmpleo(0) . '
        </select>
    </td>
    </tr>
    <tr>

</tr>';

    return $lista;
}
try {
    echo cargaSetecAspirante();
} catch (\Throwable $e) {
    echo $e;
}
