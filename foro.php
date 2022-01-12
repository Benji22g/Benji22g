<?php


class foro
{
    public $tForo;
    public $usuario = array();
    public $articulo = array();


    public function getTForo()
    {
        return $this->tForo;
    }


    public function setTForo($tForo)
    {
        $this->tForo = $tForo;

        return $this;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }


    public function getArticulo()
    {
        return $this->articulo;
    }


    public function setArticulo($articulo)
    {
        $this->articulo = $articulo;

        return $this;
    }
}
