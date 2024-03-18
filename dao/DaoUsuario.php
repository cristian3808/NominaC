<?php 
interface DaoUsuario{
    public function registrar(usuario $a);
    public function modificar(usuario $a);
    public function eliminar(usuario $a);
    //public function buscar($campo,$dato);
    public function listar();
    public function obtenerpordocu(usuario $a);
}
?>