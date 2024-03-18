<?php 
interface DaoEmpleado{
    public function registrar(empleado $a);
    public function modificar(empleado $a);
    public function eliminar(empleado $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>