<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Estudianteocupacion.php");
use Clasesphp\Estudianteocupacion;
class CrudEstudianteOcupacion{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();

			}
		public function mostrar(){
			$db=Db::conectar();
			$listaestudianteocupacion=null;
			$select=$db->query("SELECT * FROM estudianteocupacion;");
			foreach($select->fetchAll() as $o){
				$myestudianteocupacion= new Estudianteocupacion();
				$myestudianteocupacion->set_estudianteOcupacionId($o['estudianteOcupacionId']);
				$myestudianteocupacion->set_estudianteocupacioncodigo($o['estudianteocupacioncodigo']);
				$myestudianteocupacion->set_estudianteOcupacion($o['estudianteOcupacion']);
				$myestudianteocupacion->set_estudianteocupacionOculto($o['estudianteocupacionOculto']);
				$myestudianteocupacion->set_estudianteocupacionAccion($o['estudianteocupacionAccion']);
				$myestudianteocupacion->set_estudianteocupacionfecha($o['estudianteocupacionfecha']);
				$myestudianteocupacion->set_estudianteocupacionuser($o['estudianteocupacionuser']);
				$listaestudianteocupacion[]=$myestudianteocupacion;
			}
			return $listaestudianteocupacion;
		}
		   public function obtenerOcupacion($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$o=$select->fetch();
			$myestudianteocupacion= new Estudianteocupacion();
			$myestudianteocupacion->set_estudianteOcupacionId($o['estudianteOcupacionId']);
				$myestudianteocupacion->set_estudianteocupacioncodigo($o['estudianteocupacioncodigo']);
				$myestudianteocupacion->set_estudianteOcupacion($o['estudianteOcupacion']);
				$myestudianteocupacion->set_estudianteocupacionOculto($o['estudianteocupacionOculto']);
				$myestudianteocupacion->set_estudianteocupacionAccion($o['estudianteocupacionAccion']);
				$myestudianteocupacion->set_estudianteocupacionfecha($o['estudianteocupacionfecha']);
				$myestudianteocupacion->set_estudianteocupacionuser($o['estudianteocupacionuser']);

			return $myestudianteocupacion;
		}
		public function eliminar($id)
		{
			$db = Db::conectar();
			$eliminar = $db->prepare('DELETE FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
			$eliminar->bindValue('id', $id);
			$eliminar->execute();
		}
		 public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estudianteocupacion=$select->fetch();
			$myestudianteocupacion=($estudianteocupacion['estudianteOcupacion']);

			return $myestudianteocupacion;
		}
		public function insertar($estudianteocupacion)
		{
			$aux=$this->mostrar();
			$auxid=0;
			foreach ($aux as $key) {
				$auxid=$key->get_estudianteOcupacionId();
			}
			$auxid=$auxid+1;
			$db = Db::conectar();
			$insert = $db->prepare('INSERT INTO `estudianteocupacion`
			(`estudianteOcupacionId`,
			`estudianteocupacioncodigo`,
			`estudianteOcupacion`,
			`estudianteocupacionOculto`,
			`estudianteocupacionAccion`,
			`estudianteocupacionfecha`,
			`estudianteocupacionuser`)
			VALUES
			(:estudianteOcupacionId1,
			:estudianteocupacioncodigo1,
			:estudianteOcupacion1,
			:estudianteocupacionOculto1,
			:estudianteocupacionAccion1,
			:estudianteocupacionfecha1,
			:estudianteocupacionuser1);');
			$insert->bindValue('estudianteOcupacionId1', $auxid);
			$insert->bindValue('estudianteocupacioncodigo1', $estudianteocupacion->get_estudianteocupacioncodigo());
			$insert->bindValue('estudianteOcupacion1',$estudianteocupacion->get_estudianteOcupacion() );
			$insert->bindValue('estudianteocupacionOculto1', $estudianteocupacion->get_estudianteocupacionOculto());
			$insert->bindValue('estudianteocupacionAccion1', $estudianteocupacion->get_estudianteocupacionAccion());
			$insert->bindValue('estudianteocupacionfecha1', $estudianteocupacion->get_estudianteocupacionfecha());
			$insert->bindValue('estudianteocupacionuser1', $estudianteocupacion->get_estudianteocupacionuser());

			$insert->execute();
		}
		public function actualizar($estudianteocupacion)
		{
			$db = Db::conectar();
			$actualizar = $db->prepare('UPDATE `estudianteocupacion`
			SET
			`estudianteOcupacionId` = :estudianteOcupacionId1,
			`estudianteocupacioncodigo` = :estudianteocupacioncodigo1,
			`estudianteOcupacion` = :estudianteOcupacion1,
			`estudianteocupacionOculto` = :estudianteocupacionOculto1,
			`estudianteocupacionAccion` = :estudianteocupacionAccion1,
			`estudianteocupacionfecha` = :estudianteocupacionfecha1,
			`estudianteocupacionuser` = :estudianteocupacionuser1
			WHERE `estudianteOcupacionId` = :estudianteOcupacionId1;');
			$actualizar->bindValue('estudianteOcupacionId1', $estudianteocupacion->get_estudianteOcupacionId());
			$actualizar->bindValue('estudianteocupacioncodigo1', $estudianteocupacion->get_estudianteocupacioncodigo());
			$actualizar->bindValue('estudianteOcupacion1',$estudianteocupacion->get_estudianteOcupacion() );
			$actualizar->bindValue('estudianteocupacionOculto1', $estudianteocupacion->get_estudianteocupacionOculto());
			$actualizar->bindValue('estudianteocupacionAccion1', $estudianteocupacion->get_estudianteocupacionAccion());
			$actualizar->bindValue('estudianteocupacionfecha1', $estudianteocupacion->get_estudianteocupacionfecha());
			$actualizar->bindValue('estudianteocupacionuser1', $estudianteocupacion->get_estudianteocupacionuser());

			$actualizar->execute();
		}

}

?>

