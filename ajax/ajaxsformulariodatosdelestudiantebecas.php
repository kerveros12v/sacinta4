<?php
require_once("../Crud/CrudAplicacionBecas.php");
require_once("ajaxsselecttipobeca.php");
require_once("ajaxsselectfinanciamientobecaest.php");
require_once("ajaxsselectprimerarazon.php");
require_once("ajaxsselectsegundarazon.php");
require_once("ajaxsselecttercerarazon.php");
require_once("ajaxsselectcuartarazon.php");
require_once("ajaxsselectquintarazon.php");
require_once("ajaxsselectsexarazon.php");
require_once("ajaxsselectperiodoacademico.php");
require_once("ajaxsselect2.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Aplicacionbecas;
use Crud\CrudAplicacionbecas;

session_start();

function cargarformulariobeca($id)
{

	$crud = new CrudAplicacionbecas();
	$dato = new Aplicacionbecas();

	$r = "";
	$activo = '';
	if ($crud->existe($id) == 1) {
		$dato = $crud->obtenerBeca($id);

		//echo $dato;
		$activo = '<input type="button" class="btnunico" value="Eliminar" onclick=eliminarbeca(' . $dato->getIdAplicacionBecas() . ')>';
	}
	$r = ajaxs_select2() . '<td>
<table width=100%;>
	<tr class="tabtitulos">
		<th>
			DATOS DE LA BECA DEL ESTUDIANTE
		</th>
	</tr>
	<tr>
		<td>
			<table >
				<tr>
					<td>
						<table>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" id="fknumeroIdentificacion" name="aplicacionbecascodigo" maxlength="10" placeholder="Ingrese su N° CI/RUC" required="required" value="' . $dato->getFknumeroIdentificacion() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">NUMERO DE DOCUMENTO DE IDENTIDAD </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" id="aplicacionbecascodigo" name="aplicacionbecascodigo" placeholder="Codigo de la Beca"  required="required" value="' . $dato->getAplicacionbecascodigo() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">CODIGO </label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fktipoBecaId" name="fktipoBecaId">
																' . cargartipobeca($dato->getFktipoBecaId()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">TIPO BECA</label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fkfinanciamientoBecaid" name="fkfinanciamientoBecaid">
																' . cargarfinanciamientobeca($dato->getFkfinanciamientoBecaid()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">FINANCIAMIENTO DE LA BECA</label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
    														<select class="selector"  id="abperiodo" name="abperiodo">
        														' . cargarperiodo($dato->getAbperiodo()) . '
   															</select>
														</td>
													</tr>
													<tr>
														<th>
    														<label class="etiqueta1">PERIODO ACADEMINO </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<input type="date" class="campfecha" id="abfechainicio" name="aplicacionbecascodigo" placeholder="Fecha de Inicio"  value="' . $dato->getAbfechainicio() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">FECHA INICIO </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<input type="date" class="campfecha" id="abfechafin" name="aplicacionbecascodigo" placeholder="Fecha de Finalizacion"  value="' . $dato->getAbfechafin() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">FECHA FINALIZACION </label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
    														<select class="selector"  id="fkprimeraRazonBecaId" name="fkprimeraRazonBecaId">
        														' . cargarprimerarazon($dato->getFkprimeraRazonBecaId()) . '
															</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">PRIMERA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fksegundaRazonBecaId" name="fksegundaRazonBecaId">
																' . cargarsegundarazon($dato->getFksegundaRazonBecaId()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">SEGUNDA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fkterceraRazonBecaId" name="fkterceraRazonBecaId">
																' . cargartercerarazon($dato->getFkterceraRazonBecaId()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">TERCERA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fkcuartaRazonBecaId" name="fkcuartaRazonBecaId">
																' . cargarcuartarazonbeca($dato->getFkcuartaRazonBecaId()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">CUARTA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fkquintaRazonBecaId" name="fkquintaRazonBecaId">
																' . cargarquintarazonbeca($dato->getFkquintaRazonBecaId()) . '
										   					</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">QUINTA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="fksextaRazonBecaId" name="fksextaRazonBecaId">
																' . cargarsextarazonbeca($dato->getFksextaRazonBecaId()) . '
													   		</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">SEXTA RAZON</label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" id="montoBeca" name="montoBeca" placeholder="Monto de la Beca" required="required" value="' . $dato->getMontoBeca() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">MONTO DE BECA </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" class="camptext1" id="porcientoBecaCoberturaManuntencion" name="porcientoBecaCoberturaManuntencion" placeholder="%" required="required" value="' . $dato->getPorcientoBecaCoberturaManuntencion() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">COBERTURA DE MANUTENCION </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" class="camptext1" id="porcientoBecaCoberturaArancel" name="porcientoBecaCoberturaArancel" placeholder="%" required="required" value="' . $dato->getPorcientoBecaCoberturaArancel() . '"  />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">COBERTURA DE ARANCEL </label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<table>
													<tr>
														<td>
															<input type="text" name="abobservaciones" id="abobservaciones" value="' . $dato->getAbobservaciones() . '" />
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">OBSERVACIONES </label>
														</th>
													</tr>
												</table>
											</td>
											<td>
												<table>
													<tr>
														<td>
															<select class="selector"  id="abactivo" name="abactivo">
																' . boolestadoactual($dato->getAbactivo()) . '
												   			</select>
														</td>
													</tr>
													<tr>
														<th>
															<label class="etiqueta1">ESTADO ACTUAL DE LA BECA </label>
														</th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<input type="button" class="btnunico" value="Guardar" onclick=registrarbeca(' . $dato->getIdAplicacionBecas() . ')>
											</td>
											<td>
												' . $activo . '
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</td>';
	return $r;
}
try {
	//echo imprimecooke();
	echo cargarformulariobeca($_POST['id']);
} catch (\Throwable $e) {
	echo $e;
}
