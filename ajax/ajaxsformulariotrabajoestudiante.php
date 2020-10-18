<?php

require_once("../Crud/CrudEstudianteTrabajo.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectsectoreconomico.php");
require_once("ajaxsselect2.php");

use Crud\CrudEstudianteTrabajo;
use Crud\CrudPeriodoacademico;

session_start();
$crud1 = new CrudPeriodoacademico();
$cedula = $_SESSION['campbuscarest'];
$periodo = ($_SESSION['campbuscarperiodo']);
function cargartrabajoestudiante($cedula, $periodo)
{
	$crud = new CrudEstudianteTrabajo();
	$dato = $crud->obtenerEstudianteTrabajo($cedula, $periodo);
	$r = ajaxs_select2();
	$r .= '
	<td>
		<table width=100%>
			<tr class="tabtitulos">
				<th>
					DATOS DE LA EMPRESA EN QUE LABORA
				</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<table>
									<tr>
    									<td >
											<input type="text" name="trabajo" id="trabajo" value="' . $dato->getNomempresa() . '" />
										</td>
									</tr>
									<tr>
										<th>
											<label class="etiqueta1">NOMBRE DE LA EMPRESA EN LA QUE LABORA</label>
										</th>
									</tr>
								</table>
							</td>
							<td >
								<table>
									<tr>
										<td >
											<select class="selector"  name="sectrabajo" id="sectrabajo">
												' . cargarsectoreconomico($dato->getSectoreconomico()) . '
											</select>
										</td>
									</tr>
									<tr>
										<th>
											<label class="etiqueta1">SECTOR ECONOMICO A LA QUE PERTENECE LA EMPRESA EN LA QUE LABORA</label>
										</th>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
 ';
	return $r;
}
try {

	echo cargartrabajoestudiante($cedula, $periodo);
} catch (\Throwable $e) {
	echo $e;
}
