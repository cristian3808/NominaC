<?php
class empleado{
private $nombre1_e;
private $nombre2_e;
private $apellido1_e;
private $apellido2_e;
private $genero_e;
private $direccion_e;
private $telefono_e;
private $correo_e;
private $fecha_ingreso_e;
private $fecha_Nacimiento_e;

function __construct($nombre1_e,$nombre2_e,$apellido1_e,$apellido2_e,$genero_e,$direccion_e,$telefono_e,$correo_e,$fecha_ingreso_e,$fecha_Nacimiento_e){
    $this->nombre1_e=$nombre1_e;
    $this->nombre2_e=$nombre2_e;
    $this->apellido1_e=$apellido1_e;
    $this->apellido2_e=$apellido2_e;
    $this->genero_e=$genero_e;
    $this->direccion_e=$direccion_e;
    $this->telefono_e=$telefono_e;
    $this->correo_e=$correo_e;
    $this->fecha_ingreso_e=$fecha_ingreso_e;
    $this->fecha_Nacimiento_e=$fecha_Nacimiento_e;
}

function getNombre1_e() {
    return $this->nombre1_e;
}


function setNombre1_e($nombre1_e) {
    $this->nombre1_e = $nombre1_e;
}

function getNombre2_e() {
    return $this->nombre2_e;
}

function setNombre2_e($nombre2_e) {
    $this->nombre2_e = $nombre2_e;
}


function getApellido1_e() {
    return $this->apellido1_e;
}

function setApellido1_e($apellido1_e) {
    $this->apellido1_e= $apellido1_e;
}

function getApellido2_e() {
    return $this->apellido2_e;
}

function setApellido2_e($apellido2_e) {
    $this->apellido2_e= $apellido2_e;
}

function getGenero_e() {
    return $this->genero_e;
}

function setGenero_e($genero_e) {
    $this->genero_e = $genero_e;
}

function getDireccion_e() {
    return $this->direccion_e;
}

function setDireccion_e($direccion_e) {
    $this->direccion_e = $direccion_e;
}

function  getTelefono_e() {
    return $this->telefono_e;
}

function  setTelefono_e($telefono_e) {
    $this->telefono_e = $telefono_e;
}

function  getCorreo_e() {
    return $this->correo_e;
}

function setCorreo_e($correo_e){
    $this->correo_e = $correo_e;
}

    function  getFecha_ingreso_e() {
        return $this->fecha_ingreso_e;

}

function  setFecha_ingreso($fecha_ingreso_e) {
    $this->fecha_ingreso_e = $fecha_ingreso_e;
}
function  getFecha_Nacimiento_e() {
    return $this->fecha_Nacimiento_e;
}

function  setFecha_Nacimiento($fecha_Nacimiento_e) {
    $this->fecha_Nacimiento_e = $fecha_Nacimiento_e;
}
}
