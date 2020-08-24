<?php

namespace Clasesphp;

class Parroquia
{
    private $idparroquias;
    private $parroquiascodigo;
    private $parroquia;
    private $parroquiasCanton;
    private $parroquiaOculto;
    private $parroquiaAccion;
    private $parroquiafecha;
    private $parroquiasUsuario;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }
    /*
public function formatoJSON(){
    $myarray=array(
        'idparroquias'=>$this->idparroquias,
        'parroquiascodigo'=>$this->parroquiascodigo,
        'parroquia'=>$this->parroquia,
        'parroquiasCanton'=>$this->parroquiasCanton,
        'parroquiaOculto'=>$this->parroquiaOculto,
        'parroquiaAccion'=>$this->parroquiaAccion,
        'parroquiafecha'=>$this->parroquiafecha,
        'parroquiasUsuario'=>$this->parroquiasUsuario);
        return json_encode($myarray);
}
public function formatoArray(){
     $myarray=array(
     'idparroquias'=>$this->idparroquias,
     'parroquiascodigo'=>$this->parroquiascodigo,
     'parroquia'=>$this->parroquia,
     'parroquiasCanton'=>$this->parroquiasCanton,
     'parroquiaOculto'=>$this->parroquiaOculto,
     'parroquiaAccion'=>$this->parroquiaAccion,
     'parroquiafecha'=>$this->parroquiafecha,
     'parroquiasUsuario'=>$this->parroquiasUsuario);
     return $myarray;
}*/

    /**
     * Get the value of idparroquias
     */
    public function getIdparroquias()
    {
        return $this->idparroquias;
    }

    /**
     * Set the value of idparroquias
     *
     * @return  self
     */
    public function setIdparroquias($idparroquias)
    {
        $this->idparroquias = $idparroquias;

        return $this;
    }

    /**
     * Get the value of parroquiascodigo
     */
    public function getParroquiascodigo()
    {
        return $this->parroquiascodigo;
    }

    /**
     * Set the value of parroquiascodigo
     *
     * @return  self
     */
    public function setParroquiascodigo($parroquiascodigo)
    {
        $this->parroquiascodigo = $parroquiascodigo;

        return $this;
    }

    /**
     * Get the value of parroquia
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Set the value of parroquia
     *
     * @return  self
     */
    public function setParroquia($parroquia)
    {
        $this->parroquia = $parroquia;

        return $this;
    }

    /**
     * Get the value of parroquiasCanton
     */
    public function getParroquiasCanton()
    {
        return $this->parroquiasCanton;
    }

    /**
     * Set the value of parroquiasCanton
     *
     * @return  self
     */
    public function setParroquiasCanton($parroquiasCanton)
    {
        $this->parroquiasCanton = $parroquiasCanton;

        return $this;
    }

    /**
     * Get the value of parroquiaOculto
     */
    public function getParroquiaOculto()
    {
        return $this->parroquiaOculto;
    }

    /**
     * Set the value of parroquiaOculto
     *
     * @return  self
     */
    public function setParroquiaOculto($parroquiaOculto)
    {
        $this->parroquiaOculto = $parroquiaOculto;

        return $this;
    }

    /**
     * Get the value of parroquiaAccion
     */
    public function getParroquiaAccion()
    {
        return $this->parroquiaAccion;
    }

    /**
     * Set the value of parroquiaAccion
     *
     * @return  self
     */
    public function setParroquiaAccion($parroquiaAccion)
    {
        $this->parroquiaAccion = $parroquiaAccion;

        return $this;
    }

    /**
     * Get the value of parroquiafecha
     */
    public function getParroquiafecha()
    {
        return $this->parroquiafecha;
    }

    /**
     * Set the value of parroquiafecha
     *
     * @return  self
     */
    public function setParroquiafecha($parroquiafecha)
    {
        $this->parroquiafecha = $parroquiafecha;

        return $this;
    }

    /**
     * Get the value of parroquiasUsuario
     */
    public function getParroquiasUsuario()
    {
        return $this->parroquiasUsuario;
    }

    /**
     * Set the value of parroquiasUsuario
     *
     * @return  self
     */
    public function setParroquiasUsuario($parroquiasUsuario)
    {
        $this->parroquiasUsuario = $parroquiasUsuario;

        return $this;
    }
}
