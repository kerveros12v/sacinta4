<?php

namespace Clasesphp;

class SetecAspirante
{
    private $numeroidentificacionsetec;
    private $primerApellidosetec;
    private $segundoApellidosetec;
    private $primerNombresetec;
    private $segundoNombresetec;
    private $fechanacimiento;
    private $fkgenerosetec;
    private $fkformacionArtesano;
    private $instruccionRegistroCivil;
    private $setecaspiinstriccionseleccionada;
    private $parroquiasetec;
    private $direccionsetec;
    private $correoelectronicoSetec;
    private $telefonosetec;
    private $celularsetec;
    private $fktipodiscapacidad;
    private $fksocioempleo;
    private $idaccesodepartamento;
    private $setecaspiranteOculto;
    private $setecaspiranteAccion;
    private $setecaspirantefecha;
    private $setecaspiranteuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of numeroidentificacionsetec
     */
    public function getNumeroidentificacionsetec()
    {
        return $this->numeroidentificacionsetec;
    }

    /**
     * Set the value of numeroidentificacionsetec
     *
     * @return  self
     */
    public function setNumeroidentificacionsetec($numeroidentificacionsetec)
    {
        $this->numeroidentificacionsetec = $numeroidentificacionsetec;

        return $this;
    }

    /**
     * Get the value of primerApellidosetec
     */
    public function getPrimerApellidosetec()
    {
        return $this->primerApellidosetec;
    }

    /**
     * Set the value of primerApellidosetec
     *
     * @return  self
     */
    public function setPrimerApellidosetec($primerApellidosetec)
    {
        $this->primerApellidosetec = $primerApellidosetec;

        return $this;
    }

    /**
     * Get the value of segundoApellidosetec
     */
    public function getSegundoApellidosetec()
    {
        return $this->segundoApellidosetec;
    }

    /**
     * Set the value of segundoApellidosetec
     *
     * @return  self
     */
    public function setSegundoApellidosetec($segundoApellidosetec)
    {
        $this->segundoApellidosetec = $segundoApellidosetec;

        return $this;
    }

    /**
     * Get the value of primerNombresetec
     */
    public function getPrimerNombresetec()
    {
        return $this->primerNombresetec;
    }

    /**
     * Set the value of primerNombresetec
     *
     * @return  self
     */
    public function setPrimerNombresetec($primerNombresetec)
    {
        $this->primerNombresetec = $primerNombresetec;

        return $this;
    }

    /**
     * Get the value of segundoNombresetec
     */
    public function getSegundoNombresetec()
    {
        return $this->segundoNombresetec;
    }

    /**
     * Set the value of segundoNombresetec
     *
     * @return  self
     */
    public function setSegundoNombresetec($segundoNombresetec)
    {
        $this->segundoNombresetec = $segundoNombresetec;

        return $this;
    }

    /**
     * Get the value of fechanacimiento
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set the value of fechanacimiento
     *
     * @return  self
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get the value of fkgenerosetec
     */
    public function getFkgenerosetec()
    {
        return $this->fkgenerosetec;
    }

    /**
     * Set the value of fkgenerosetec
     *
     * @return  self
     */
    public function setFkgenerosetec($fkgenerosetec)
    {
        $this->fkgenerosetec = $fkgenerosetec;

        return $this;
    }

    /**
     * Get the value of fkformacionArtesano
     */
    public function getFkformacionArtesano()
    {
        return $this->fkformacionArtesano;
    }

    /**
     * Set the value of fkformacionArtesano
     *
     * @return  self
     */
    public function setFkformacionArtesano($fkformacionArtesano)
    {
        $this->fkformacionArtesano = $fkformacionArtesano;

        return $this;
    }

    /**
     * Get the value of instruccionRegistroCivil
     */
    public function getInstruccionRegistroCivil()
    {
        return $this->instruccionRegistroCivil;
    }

    /**
     * Set the value of instruccionRegistroCivil
     *
     * @return  self
     */
    public function setInstruccionRegistroCivil($instruccionRegistroCivil)
    {
        $this->instruccionRegistroCivil = $instruccionRegistroCivil;

        return $this;
    }

    /**
     * Get the value of setecaspiinstriccionseleccionada
     */
    public function getSetecaspiinstriccionseleccionada()
    {
        return $this->setecaspiinstriccionseleccionada;
    }

    /**
     * Set the value of setecaspiinstriccionseleccionada
     *
     * @return  self
     */
    public function setSetecaspiinstriccionseleccionada($setecaspiinstriccionseleccionada)
    {
        $this->setecaspiinstriccionseleccionada = $setecaspiinstriccionseleccionada;

        return $this;
    }

    /**
     * Get the value of parroquiasetec
     */
    public function getParroquiasetec()
    {
        return $this->parroquiasetec;
    }

    /**
     * Set the value of parroquiasetec
     *
     * @return  self
     */
    public function setParroquiasetec($parroquiasetec)
    {
        $this->parroquiasetec = $parroquiasetec;

        return $this;
    }

    /**
     * Get the value of direccionsetec
     */
    public function getDireccionsetec()
    {
        return $this->direccionsetec;
    }

    /**
     * Set the value of direccionsetec
     *
     * @return  self
     */
    public function setDireccionsetec($direccionsetec)
    {
        $this->direccionsetec = $direccionsetec;

        return $this;
    }

    /**
     * Get the value of correoelectronicoSetec
     */
    public function getCorreoelectronicoSetec()
    {
        return $this->correoelectronicoSetec;
    }

    /**
     * Set the value of correoelectronicoSetec
     *
     * @return  self
     */
    public function setCorreoelectronicoSetec($correoelectronicoSetec)
    {
        $this->correoelectronicoSetec = $correoelectronicoSetec;

        return $this;
    }

    /**
     * Get the value of telefonosetec
     */
    public function getTelefonosetec()
    {
        return $this->telefonosetec;
    }

    /**
     * Set the value of telefonosetec
     *
     * @return  self
     */
    public function setTelefonosetec($telefonosetec)
    {
        $this->telefonosetec = $telefonosetec;

        return $this;
    }

    /**
     * Get the value of celularsetec
     */
    public function getCelularsetec()
    {
        return $this->celularsetec;
    }

    /**
     * Set the value of celularsetec
     *
     * @return  self
     */
    public function setCelularsetec($celularsetec)
    {
        $this->celularsetec = $celularsetec;

        return $this;
    }

    /**
     * Get the value of fktipodiscapacidad
     */
    public function getFktipodiscapacidad()
    {
        return $this->fktipodiscapacidad;
    }

    /**
     * Set the value of fktipodiscapacidad
     *
     * @return  self
     */
    public function setFktipodiscapacidad($fktipodiscapacidad)
    {
        $this->fktipodiscapacidad = $fktipodiscapacidad;

        return $this;
    }

    /**
     * Get the value of fksocioempleo
     */
    public function getFksocioempleo()
    {
        return $this->fksocioempleo;
    }

    /**
     * Set the value of fksocioempleo
     *
     * @return  self
     */
    public function setFksocioempleo($fksocioempleo)
    {
        $this->fksocioempleo = $fksocioempleo;

        return $this;
    }

    /**
     * Get the value of idaccesodepartamento
     */
    public function getIdaccesodepartamento()
    {
        return $this->idaccesodepartamento;
    }

    /**
     * Set the value of idaccesodepartamento
     *
     * @return  self
     */
    public function setIdaccesodepartamento($idaccesodepartamento)
    {
        $this->idaccesodepartamento = $idaccesodepartamento;

        return $this;
    }

    /**
     * Get the value of setecaspiranteOculto
     */
    public function getSetecaspiranteOculto()
    {
        return $this->setecaspiranteOculto;
    }

    /**
     * Set the value of setecaspiranteOculto
     *
     * @return  self
     */
    public function setSetecaspiranteOculto($setecaspiranteOculto)
    {
        $this->setecaspiranteOculto = $setecaspiranteOculto;

        return $this;
    }

    /**
     * Get the value of setecaspiranteAccion
     */
    public function getSetecaspiranteAccion()
    {
        return $this->setecaspiranteAccion;
    }

    /**
     * Set the value of setecaspiranteAccion
     *
     * @return  self
     */
    public function setSetecaspiranteAccion($setecaspiranteAccion)
    {
        $this->setecaspiranteAccion = $setecaspiranteAccion;

        return $this;
    }

    /**
     * Get the value of setecaspirantefecha
     */
    public function getSetecaspirantefecha()
    {
        return $this->setecaspirantefecha;
    }

    /**
     * Set the value of setecaspirantefecha
     *
     * @return  self
     */
    public function setSetecaspirantefecha($setecaspirantefecha)
    {
        $this->setecaspirantefecha = $setecaspirantefecha;

        return $this;
    }

    /**
     * Get the value of setecaspiranteuser
     */
    public function getSetecaspiranteuser()
    {
        return $this->setecaspiranteuser;
    }

    /**
     * Set the value of setecaspiranteuser
     *
     * @return  self
     */
    public function setSetecaspiranteuser($setecaspiranteuser)
    {
        $this->setecaspiranteuser = $setecaspiranteuser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'numeroidentificacionsetec' => $this->numeroidentificacionsetec,
            'primerApellidosetec' => $this->primerApellidosetec,
            'segundoApellidosetec' => $this->segundoApellidosetec,
            'primerNombresetec' => $this->primerNombresetec,
            'segundoNombresetec' => $this->segundoNombresetec,
            'fechanacimiento' => $this->fechanacimiento,
            'fkgenerosetec' => $this->fkgenerosetec,
            'fkformacionArtesano' => $this->fkformacionArtesano,
            'instruccionRegistroCivil' => $this->instruccionRegistroCivil,
            'setecaspiinstriccionseleccionada' => $this->setecaspiinstriccionseleccionada,
            'parroquiasetec' => $this->parroquiasetec,
            'direccionsetec' => $this->direccionsetec,
            'correoelectronicoSetec' => $this->correoelectronicoSetec,
            'telefonosetec' => $this->telefonosetec,
            'celularsetec' => $this->celularsetec,
            'fktipodiscapacidad' => $this->fktipodiscapacidad,
            'fksocioempleo' => $this->fksocioempleo,
            'idaccesodepartamento' => $this->idaccesodepartamento,
            'setecaspiranteOculto' => $this->setecaspiranteOculto,
            'setecaspiranteAccion' => $this->setecaspiranteAccion,
            'setecaspirantefecha' => $this->setecaspirantefecha,
            'setecaspiranteuser' => $this->setecaspiranteuser
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'numeroidentificacionsetec' => $this->numeroidentificacionsetec,
            'primerApellidosetec' => $this->primerApellidosetec,
            'segundoApellidosetec' => $this->segundoApellidosetec,
            'primerNombresetec' => $this->primerNombresetec,
            'segundoNombresetec' => $this->segundoNombresetec,
            'fechanacimiento' => $this->fechanacimiento,
            'fkgenerosetec' => $this->fkgenerosetec,
            'fkformacionArtesano' => $this->fkformacionArtesano,
            'instruccionRegistroCivil' => $this->instruccionRegistroCivil,
            'setecaspiinstriccionseleccionada' => $this->setecaspiinstriccionseleccionada,
            'parroquiasetec' => $this->parroquiasetec,
            'direccionsetec' => $this->direccionsetec,
            'correoelectronicoSetec' => $this->correoelectronicoSetec,
            'telefonosetec' => $this->telefonosetec,
            'celularsetec' => $this->celularsetec,
            'fktipodiscapacidad' => $this->fktipodiscapacidad,
            'fksocioempleo' => $this->fksocioempleo,
            'idaccesodepartamento' => $this->idaccesodepartamento,
            'setecaspiranteOculto' => $this->setecaspiranteOculto,
            'setecaspiranteAccion' => $this->setecaspiranteAccion,
            'setecaspirantefecha' => $this->setecaspirantefecha,
            'setecaspiranteuser' => $this->setecaspiranteuser
        );
        return $myarray;
    }
}
