<?php
require_once("../Crud/Crud​Estudiantestitulotercernivel.php");
require_once("ajaxsselecttitulotercernivel.php");
require_once("ajaxsselect2.php");

session_start();

function cargarestudiantetitulotercernivel($cedula)
{
	$crud = new \Crud\CrudEstudiantestitulotercernivel();
	$dato = $crud->obtenerEstudiantestitulotercernivel($cedula);
	$r = ajaxs_select2() . '
	<td>
		<table width=100%>
			<tr class="tabtitulos">
				<th>
					ESTUDIOS ADICIONALES
				</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<select class="selector"  name="tituloSuperior" id="tituloSuperior">
									' . cargartituloTercerNivel($dato->getEtnTituloTercerNivelId()) . '
								</select>
							</td>
						</tr>
						<tr>
                			<th>
							<label class="etiqueta1">TITULO DE TERCER NIVEL</label>
                			</th>
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
	$cedula = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
	echo cargarestudiantetitulotercernivel($cedula);
} catch (\Throwable $e) {
	echo $e;
}
