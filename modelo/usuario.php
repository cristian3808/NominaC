<?php
class usuario{
private $id_persona;
private $nombre1;
private $nombre2;
private $apellido1;
private $apellido2;
private $genero;
private $direccion;
private $telefono;
private $fecha_Nacimiento;

function __construct($id_persona,$nombre1,$nombre2,$apellido1,$apellido2,$genero,$direccion,$telefono,$fecha_Nacimiento){
    $this->id_persona=$id_persona;
    $this->nombre1=$nombre1;
    $this->nombre2=$nombre2;
    $this->apellido1=$apellido1;
    $this->apellido2=$apellido2;
    $this->genero=$genero;
    $this->direccion=$direccion;
    $this->telefono=$telefono;
    $this->fecha_Nacimiento=$fecha_Nacimiento;
}

function getIdPersona() {
    return $this->id_persona;
}

function setIdPersona($id_persona) {
    $this->id_persona = $id_persona;
}

function getNombre1() {
    return $this->nombre1;
}

function setNombre1($nombre1) {
    $this->nombre1 = $nombre1;
}

function getNombre2() {
    return $this->nombre2;
}

function setNombre2($nombre2) {
    $this->nombre2 = $nombre2;
}


function getApellido1() {
    return $this->apellido1;
}

function setApellido1($apellido1) {
    $this->apellido1 = $apellido1;
}

function getApellido2() {
    return $this->apellido2;
}

function setApellido2($apellido2) {
    $this->apellido2 = $apellido2;
}

function getGenero() {
    return $this->genero;
}

function setGenero($Genero) {
    $this->genero = $Genero;
}

function getDireccion() {
    return $this->direccion;
}

function setDireccion($direccion) {
    $this->direccion = $direccion;
}

function  getTelefono() {
    return $this->telefono;
}

function  setTelefono($telefono) {
    $this->telefono = $telefono;
}

function  getFecha_Nacimiento() {
    return $this->fecha_Nacimiento;
}

function  setFecha_Nacimiento($fecha_Nacimiento) {
    $this->fecha_Nacimiento = $fecha_Nacimiento;
}
}
