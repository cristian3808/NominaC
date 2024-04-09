<?php
class empresa {
    private $nit_empresa;
    private $nombre_empresa;
    private $propietario;
    private $sector;
    private $fecha_Fundacion;
    private $Tipo_Entidad;

    function __construct($nit_empresa, $nombre_empresa, $propietario, $sector, $fecha_Fundacion, $Tipo_Entidad) {
        $this->nit_empresa = $nit_empresa;
        $this->nombre_empresa = $nombre_empresa;
        $this->propietario = $propietario;
        $this->sector = $sector;
        $this->fecha_Fundacion = $fecha_Fundacion;
        $this->Tipo_Entidad = $Tipo_Entidad;
    }

    function getNitEmpresa() {
        return $this->nit_empresa;
    }

    function setNitEmpresa($nit_empresa) {
        $this->nit_empresa = $nit_empresa;
    }

    function getNombreEmpresa() {
        return $this->nombre_empresa;
    }

    function setNombreEmpresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    function getSector() {
        return $this->sector;
    }

    function setSector($sector) {
        $this->sector = $sector;
    }

    function getFechaFundacion() {
        return $this->fecha_Fundacion;
    }

    function setFechaFundacion($fecha_Fundacion) {
        $this->fecha_Fundacion = $fecha_Fundacion;
    }

    function getTipoEntidad() {
        return $this->Tipo_Entidad;
    }

    function setTipoEntidad($Tipo_Entidad) {
        $this->Tipo_Entidad = $Tipo_Entidad;
    }
}
?>
