<?php 
interface DaoEmpresa {
    public function registrar(empresa $a);
    public function modificar(empresa $a);
    public function eliminar(empresa $a);
    public function listar();
}
?>
