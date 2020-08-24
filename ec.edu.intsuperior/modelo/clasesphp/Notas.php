<?php

namespace Clasesphp;

class Notas
{
	private $notasid;
	private $bidBimestres;
	private $categoria;
	private $fkidformaCalificacion;
	private $fkdcaid;
	private $fkidSegundaTerceraMatricula;
	private $notasOculto;
	private $notasAccion;
	private $notasfecha;
	private $notasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of notasid
	 */
	public function getNotasid()
	{
		return $this->notasid;
	}

	/**
	 * Set the value of notasid
	 *
	 * @return  self
	 */
	public function setNotasid($notasid)
	{
		$this->notasid = $notasid;

		return $this;
	}

	/**
	 * Get the value of bidBimestres
	 */
	public function getBidBimestres()
	{
		return $this->bidBimestres;
	}

	/**
	 * Set the value of bidBimestres
	 *
	 * @return  self
	 */
	public function setBidBimestres($bidBimestres)
	{
		$this->bidBimestres = $bidBimestres;

		return $this;
	}

	/**
	 * Get the value of categoria
	 */
	public function getCategoria()
	{
		return $this->categoria;
	}

	/**
	 * Set the value of categoria
	 *
	 * @return  self
	 */
	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;

		return $this;
	}

	/**
	 * Get the value of fkidformaCalificacion
	 */
	public function getFkidformaCalificacion()
	{
		return $this->fkidformaCalificacion;
	}

	/**
	 * Set the value of fkidformaCalificacion
	 *
	 * @return  self
	 */
	public function setFkidformaCalificacion($fkidformaCalificacion)
	{
		$this->fkidformaCalificacion = $fkidformaCalificacion;

		return $this;
	}

	/**
	 * Get the value of fkdcaid
	 * fkdistributivocursoasignaturaid
	 */
	public function getFkdcaid()
	{
		return $this->fkdcaid;
	}

	/**
	 * Set the value of fkdcaid
	 *fkdistributivocursoasignaturaid
	 * @return  self
	 */
	public function setFkdcaid($fkdcaid)
	{
		$this->fkdcaid = $fkdcaid;

		return $this;
	}

	/**
	 * Get the value of fkidSegundaTerceraMatricula
	 */
	public function getFkidSegundaTerceraMatricula()
	{
		return $this->fkidSegundaTerceraMatricula;
	}

	/**
	 * Set the value of fkidSegundaTerceraMatricula
	 *
	 * @return  self
	 */
	public function setFkidSegundaTerceraMatricula($fkidSegundaTerceraMatricula)
	{
		$this->fkidSegundaTerceraMatricula = $fkidSegundaTerceraMatricula;

		return $this;
	}

	/**
	 * Get the value of notasOculto
	 */
	public function getNotasOculto()
	{
		return $this->notasOculto;
	}

	/**
	 * Set the value of notasOculto
	 *
	 * @return  self
	 */
	public function setNotasOculto($notasOculto)
	{
		$this->notasOculto = $notasOculto;

		return $this;
	}

	/**
	 * Get the value of notasAccion
	 */
	public function getNotasAccion()
	{
		return $this->notasAccion;
	}

	/**
	 * Set the value of notasAccion
	 *
	 * @return  self
	 */
	public function setNotasAccion($notasAccion)
	{
		$this->notasAccion = $notasAccion;

		return $this;
	}

	/**
	 * Get the value of notasfecha
	 */
	public function getNotasfecha()
	{
		return $this->notasfecha;
	}

	/**
	 * Set the value of notasfecha
	 *
	 * @return  self
	 */
	public function setNotasfecha($notasfecha)
	{
		$this->notasfecha = $notasfecha;

		return $this;
	}

	/**
	 * Get the value of notasuser
	 */
	public function getNotasuser()
	{
		return $this->notasuser;
	}

	/**
	 * Set the value of notasuser
	 *
	 * @return  self
	 */
	public function setNotasuser($notasuser)
	{
		$this->notasuser = $notasuser;

		return $this;
	}
}
