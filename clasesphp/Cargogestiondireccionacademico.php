<?php
namespace Clasesphp;

	class Cargogestiondireccionacademico
{
	private $cargoGestionDireccionAcademicoId;
	private $cargo;
	private $cargoDirectivo_cargoDirectivoId;
	public function set_CargoGestionDireccionAcademicoId ($cargoGestionDireccionAcademicoId){$this->cargoGestionDireccionAcademicoId=$cargoGestionDireccionAcademicoId;}
	public function set_cargo($cargo){$this->cargo=$cargo;}
	public function set_CargoDirectivo_cargoDirectivoId($cargoDirectivo_cargoDirectivoId){$this->cargoDirectivo_cargoDirectivoId=$cargoDirectivo_cargoDirectivoId;}
	public function get_CargoGestionDireccionAcademicoId (){return $this->cargoGestionDireccionAcademicoId;}
	public function get_cargo(){return $this->cargo;}
	public function get_CargoDirectivo_cargoDirectivoId(){return $this->cargoDirectivo_cargoDirectivoId;}
	public function _construct(){}
}
?>