<?php
require_once("../Crud/CrudCategoriaMigratoria.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudCategoriasMigratoria;
session_start();
function cargartablacategoriamigratoria()
{
    $r="";
    $crud = new CrudCategoriasMigratoria();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="categoriasmigratoriacodigo" name="categoriasmigratoriacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="categoriaMigratoria" name="categoriaMigratoria"  value=""/>
    </td>
    <td>
        <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
    </td>
</tr>
';

    foreach ($crud->mostrar() as $dato) {
        $r .= '
    <tr>
        <td>

        </td>
        <td>
            <input type="text" class="camptext1" id="categoriasmigratoriacodigo' . $dato->get_categoriaMigratoriaId() . '" name="categoriasmigratoriacodigo' . $dato->get_categoriaMigratoriaId() . '"  maxlength="10" value="' . $dato->get_categoriasmigratoriacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="categoriaMigratoria' . $dato->get_categoriaMigratoriaId() . '" name="categoriaMigratoria' . $dato->get_categoriaMigratoriaId() . '"  value="' . $dato->get_categoriaMigratoria() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_categoriaMigratoriaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_categoriaMigratoriaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablacategoriamigratoria();
} else{
	echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			'.tiempoExedido().'
		</td>
	</tr>';
}
