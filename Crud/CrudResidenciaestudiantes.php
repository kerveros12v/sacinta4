<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Residenciaestudiantes.php");
use Clasesphp\Residenciaestudiantes;
class CrudResidenciaestudiantes{
// constructor de la clase
		public function __construct(){

			}

		public  function mostrar(){

			$db=Db::conectar();
			$listaresidenciaestudiantes=null;
			$select=$db->query('SELECT * FROM residenciaestudiantes;');

			foreach($select->fetchAll() as $residenciaestudiantes1){

				$myresidenciaestudiantes= new Residenciaestudiantes();
				$myresidenciaestudiantes->set_residenciaEstudiantesId($residenciaestudiantes1['ResidenciaEstudiantesId']);
				$myresidenciaestudiantes->set_estudiantes_numeroIdentificacion($residenciaestudiantes1['Estudiantes_numeroIdentificacion']);
				$myresidenciaestudiantes->set_paisResidencia($residenciaestudiantes1['paisResidencia']);
				$myresidenciaestudiantes->set_provinciaResidencia($residenciaestudiantes1['provinciaResidencia']);
				$myresidenciaestudiantes->set_cantonResidencia($residenciaestudiantes1['cantonResidencia']);
				$myresidenciaestudiantes->set_direccionDomiciliariaResidencia($residenciaestudiantes1['direccionDomiciliariaResidencia']);
				$myresidenciaestudiantes->set_codigoPostal($residenciaestudiantes1['codigoPostal']);
				$myresidenciaestudiantes->set_periodo($residenciaestudiantes1['periodo']);
				$myresidenciaestudiantes->set_residenciaestudiantesOculto($residenciaestudiantes1['residenciaestudiantesOculto']);
				$myresidenciaestudiantes->set_residenciaestudiantesAccion($residenciaestudiantes1['residenciaestudiantesAccion']);
				$myresidenciaestudiantes->set_residenciaestudiantesfecha($residenciaestudiantes1['residenciaestudiantesfecha']);
				$myresidenciaestudiantes->set_residenciaestudiantesuser($residenciaestudiantes1['residenciaestudiantesuser']);
				$listaresidenciaestudiantes[]=$myresidenciaestudiantes;
			/**/
			}
			return $listaresidenciaestudiantes;
		}
		public  function existe($id,$periodo){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM residenciaestudiantes where Estudiantes_numeroIdentificacion=:id AND periodo=:per1");
			$select->bindValue('id',$id);
			$select->bindValue('per1',$periodo);
			$select->execute();
			if ($select->fetch()==0){
				echo '0';
				return 0;
			}

				return 1;
		}
		public  function obtenerresidenciaestudiantes($id,$periodo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM residenciaestudiantes WHERE Estudiantes_numeroIdentificacion=:id AND periodo=:per1');
			$select->bindValue('id',$id);
			$select->bindValue('per1',$periodo);
			$select->execute();
			$residenciaestudiantes1=$select->fetch();

				$myresidenciaestudiantes= new Residenciaestudiantes();
				$myresidenciaestudiantes->set_residenciaEstudiantesId($residenciaestudiantes1['ResidenciaEstudiantesId']);
				$myresidenciaestudiantes->set_estudiantes_numeroIdentificacion($residenciaestudiantes1['Estudiantes_numeroIdentificacion']);
				$myresidenciaestudiantes->set_paisResidencia($residenciaestudiantes1['paisResidencia']);
				$myresidenciaestudiantes->set_provinciaResidencia($residenciaestudiantes1['provinciaResidencia']);
				$myresidenciaestudiantes->set_cantonResidencia($residenciaestudiantes1['cantonResidencia']);
				$myresidenciaestudiantes->set_direccionDomiciliariaResidencia($residenciaestudiantes1['direccionDomiciliariaResidencia']);
				$myresidenciaestudiantes->set_codigoPostal($residenciaestudiantes1['codigoPostal']);
				$myresidenciaestudiantes->set_periodo($residenciaestudiantes1['periodo']);
				$myresidenciaestudiantes->set_residenciaestudiantesOculto($residenciaestudiantes1['residenciaestudiantesOculto']);
				$myresidenciaestudiantes->set_residenciaestudiantesAccion($residenciaestudiantes1['residenciaestudiantesAccion']);
				$myresidenciaestudiantes->set_residenciaestudiantesfecha($residenciaestudiantes1['residenciaestudiantesfecha']);
				$myresidenciaestudiantes->set_residenciaestudiantesuser($residenciaestudiantes1['residenciaestudiantesuser']);

			return $myresidenciaestudiantes;
		}
		public  function actualizar($residenciaestudiantes1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `residenciaestudiantes` SET `ResidenciaEstudiantesId`=:id,
			`Estudiantes_numeroIdentificacion`=:num,
			`paisResidencia`=:pais,
			`provinciaResidencia`=:provincia,
			`cantonResidencia`=:canton,
			`direccionDomiciliariaResidencia`=:direccion,
			`codigoPostal`=:codigop,
			`periodo`=:per1,
			`residenciaestudiantesOculto`=:oculto,
			`residenciaestudiantesAccion`=:accion,
			`residenciaestudiantesfecha`=:fecha,
			`residenciaestudiantesuser`=:user
			 WHERE Estudiantes_numeroIdentificacion=:id AND periodo=:per1');
			$actualizar->bindValue('id',$residenciaestudiantes1->get_residenciaEstudiantesId());
			$actualizar->bindValue('num',$residenciaestudiantes1->get_estudiantes_numeroIdentificacion());
			$actualizar->bindValue('pais',$residenciaestudiantes1->get_paisResidencia());
			$actualizar->bindValue('provincia',$residenciaestudiantes1->get_provinciaResidencia());
			$actualizar->bindValue('canton',$residenciaestudiantes1->get_cantonResidencia());
			$actualizar->bindValue('direccion',$residenciaestudiantes1->get_direccionDomiciliariaResidencia());
			$actualizar->bindValue('codigop',$residenciaestudiantes1->get_codigoPostal());
			$actualizar->bindValue('per1',$residenciaestudiantes1->get_periodo());
			$actualizar->bindValue('oculto',$residenciaestudiantes1->get_residenciaestudiantesOculto());
			$actualizar->bindValue('accion',$residenciaestudiantes1->get_residenciaestudiantesAccion());
			$actualizar->bindValue('fecha',$residenciaestudiantes1->get_residenciaestudiantesfecha());
			$actualizar->bindValue('user',$residenciaestudiantes1->get_residenciaestudiantesuser());
			$actualizar->execute();
		}
		public  function insertar($residenciaestudiantes1){
			//echo $residenciaestudiantes1->toString();
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO residenciaestudiantes
			(ResidenciaEstudiantesId,
			Estudiantes_numeroIdentificacion,
			paisResidencia,
			provinciaResidencia,
			cantonResidencia,
			direccionDomiciliariaResidencia,
			codigoPostal,
			periodo,
			residenciaestudiantesOculto,
			residenciaestudiantesAccion,
			residenciaestudiantesfecha,
			residenciaestudiantesuser)
			VALUES
			(:ResidenciaEstudiantesId1,
			:Estudiantes_numeroIdentificacion1,
			:paisResidencia1,
			:provinciaResidencia1,
			:cantonResidencia1,
			:direccionDomiciliariaResidencia1,
			:codigoPostal1,
			:periodo1,
			:residenciaestudiantesOculto1,
			:residenciaestudiantesAccion1,
			:residenciaestudiantesfecha1,
			:residenciaestudiantesuser1);');
			$insert->bindValue('ResidenciaEstudiantesId1',$residenciaestudiantes1->get_residenciaEstudiantesId());
			$insert->bindValue('Estudiantes_numeroIdentificacion1',$residenciaestudiantes1->get_estudiantes_numeroIdentificacion());
			$insert->bindValue('paisResidencia1',$residenciaestudiantes1->get_paisResidencia());
			$insert->bindValue('provinciaResidencia1',$residenciaestudiantes1->get_provinciaResidencia());
			$insert->bindValue('cantonResidencia1',$residenciaestudiantes1->get_cantonResidencia());
			$insert->bindValue('direccionDomiciliariaResidencia1',$residenciaestudiantes1->get_direccionDomiciliariaResidencia());
			$insert->bindValue('codigoPostal1',$residenciaestudiantes1->get_codigoPostal());
			$insert->bindValue('periodo1',$residenciaestudiantes1->get_periodo());
			$insert->bindValue('residenciaestudiantesOculto1',$residenciaestudiantes1->get_residenciaestudiantesOculto());
			$insert->bindValue('residenciaestudiantesAccion1',$residenciaestudiantes1->get_residenciaestudiantesAccion());
			$insert->bindValue('residenciaestudiantesfecha1',$residenciaestudiantes1->get_residenciaestudiantesfecha());
			$insert->bindValue('residenciaestudiantesuser1',$residenciaestudiantes1->get_residenciaestudiantesuser());
			$insert->execute();

 //echo "Insert Completa";
		}
		public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM residenciaestudiantes WHERE ResidenciaEstudiantesId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
	}

?>