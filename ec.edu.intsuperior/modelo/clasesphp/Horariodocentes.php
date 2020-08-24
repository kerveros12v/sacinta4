<?php

namespace Clasesphp;

class HorarioDocentes
{
	private $idHorarioDocentes;
	private $horasIdHoras;
	private $diasIdDias;
	private $fkdistributivocursoasignaturaid;
	private $horariodocentesOculto;
	private $horariodocentesAccion;
	private $horariodocentesfecha;
	private $horariodocentesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}


	/**
	 * Get the value of idHorarioDocentes
	 */
	public function getIdHorarioDocentes()
	{
		return $this->idHorarioDocentes;
	}

	/**
	 * Set the value of idHorarioDocentes
	 *
	 * @return  self
	 */
	public function setIdHorarioDocentes($idHorarioDocentes)
	{
		$this->idHorarioDocentes = $idHorarioDocentes;

		return $this;
	}

	/**
	 * Get the value of horasIdHoras
	 */
	public function getHorasIdHoras()
	{
		return $this->horasIdHoras;
	}

	/**
	 * Set the value of horasIdHoras
	 *
	 * @return  self
	 */
	public function setHorasIdHoras($horasIdHoras)
	{
		$this->horasIdHoras = $horasIdHoras;

		return $this;
	}

	/**
	 * Get the value of diasIdDias
	 */
	public function getDiasIdDias()
	{
		return $this->diasIdDias;
	}

	/**
	 * Set the value of diasIdDias
	 *
	 * @return  self
	 */
	public function setDiasIdDias($diasIdDias)
	{
		$this->diasIdDias = $diasIdDias;

		return $this;
	}

	/**
	 * Get the value of fkdistributivocursoasignaturaid
	 */
	public function getFkdistributivocursoasignaturaid()
	{
		return $this->fkdistributivocursoasignaturaid;
	}

	/**
	 * Set the value of fkdistributivocursoasignaturaid
	 *
	 * @return  self
	 */
	public function setFkdistributivocursoasignaturaid($fkdistributivocursoasignaturaid)
	{
		$this->fkdistributivocursoasignaturaid = $fkdistributivocursoasignaturaid;

		return $this;
	}

	/**
	 * Get the value of horariodocentesOculto
	 */
	public function getHorariodocentesOculto()
	{
		return $this->horariodocentesOculto;
	}

	/**
	 * Set the value of horariodocentesOculto
	 *
	 * @return  self
	 */
	public function setHorariodocentesOculto($horariodocentesOculto)
	{
		$this->horariodocentesOculto = $horariodocentesOculto;

		return $this;
	}

	/**
	 * Get the value of horariodocentesAccion
	 */
	public function getHorariodocentesAccion()
	{
		return $this->horariodocentesAccion;
	}

	/**
	 * Set the value of horariodocentesAccion
	 *
	 * @return  self
	 */
	public function setHorariodocentesAccion($horariodocentesAccion)
	{
		$this->horariodocentesAccion = $horariodocentesAccion;

		return $this;
	}

	/**
	 * Get the value of horariodocentesfecha
	 */
	public function getHorariodocentesfecha()
	{
		return $this->horariodocentesfecha;
	}

	/**
	 * Set the value of horariodocentesfecha
	 *
	 * @return  self
	 */
	public function setHorariodocentesfecha($horariodocentesfecha)
	{
		$this->horariodocentesfecha = $horariodocentesfecha;

		return $this;
	}

	/**
	 * Get the value of horariodocentesuser
	 */
	public function getHorariodocentesuser()
	{
		return $this->horariodocentesuser;
	}

	/**
	 * Set the value of horariodocentesuser
	 *
	 * @return  self
	 */
	public function setHorariodocentesuser($horariodocentesuser)
	{
		$this->horariodocentesuser = $horariodocentesuser;

		return $this;
	}
}
