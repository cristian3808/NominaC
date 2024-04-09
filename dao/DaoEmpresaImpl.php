<?php
include('DaoEmpresa.php');
include ('../conexion/conexion.php');
include ('../modelo/empresa.php');

class c extends Conexion implements DaoEmpresa {
       
    public function registrar(empresa $a) { 
        try {
            if ($this->getCnx() != null) {
                $nit_empresa = $a->getNitEmpresa();
                $nombre_empresa = $a->getNombreEmpresa();
                $propietario = $a->getPropietario();
                $sector = $a->getSector();
                $fecha_Fundacion = $a->getFechaFundacion();
                $tipo_Entidad = $a->getTipoEntidad();
                
                
                $sql = "INSERT INTO empresa (nit_empresa, nombre_empresa, propietario, sector, fecha_Fundacion, Tipo_Entidad) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$nit_empresa, $nombre_empresa, $propietario, $sector, $fecha_Fundacion, $tipo_Entidad]);
            } else {
                echo $this->getCnx() . ' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }             
    }    

    public function modificar(empresa $a) {  
        $nit_empresa = $a->getNitEmpresa();
        $nombre_empresa = $a->getNombreEmpresa();
        $propietario = $a->getPropietario();
        $sector = $a->getSector();
        $fecha_Fundacion = $a->getFechaFundacion();
        $tipo_Entidad = $a->getTipoEntidad();
        
        try {
            $sql = "UPDATE empresa SET 
                    nombre_empresa = ?, 
                    propietario = ?, 
                    sector = ?, 
                    fecha_Fundacion = ?, 
                    Tipo_Entidad = ? 
                    WHERE nit_empresa = ?";
            
            $stmt = $this->getCnx()->prepare($sql);
            $stmt->execute([$nombre_empresa, $propietario, $sector, $fecha_Fundacion, $tipo_Entidad, $nit_empresa]);
        
            if ($stmt->rowCount() > 0) {
                echo "Registro modificado exitosamente.";
            } else {
                echo "No se realizó ninguna modificación en el registro.";
            }
        } catch(PDOException $e) {
            echo "Error al modificar el registro: " . $e->getMessage();
        }
    }
    

    public function eliminar(empresa $a) {        
        try {
            $nit_empresa = $a->getNitEmpresa();
            $stmt = $this->getCnx()->prepare("DELETE FROM empresa WHERE nit_empresa = ?");
            $stmt->execute([$nit_empresa]);  
            header("location: ../controlador/ctrleliminar.php");   
        } catch(PDOException $e) {
            echo "Error al eliminar el registro: " . $e->getMessage();
        }
    }

    public function listar() {
        try {    
            $stmt = $this->getCnx()->prepare("SELECT * FROM empresa");
            $stmt->execute();
            $lista = array();
            foreach ($stmt as $key) {           
                $a = new empresa(null,null,null,null,null,null);
                $a->setNitEmpresa($key['nit_empresa']);
                $a->setNombreEmpresa($key['nombre_empresa']);
                $a->setPropietario($key['propietario']);
                $a->setSector($key['sector']);
                $a->setFechaFundacion($key['fecha_Fundacion']);
                $a->setTipoEntidad($key['Tipo_Entidad']);           
                array_push($lista,$a);            
            }        
            return $lista;       
        } catch(PDOException $e) {
            echo "Error al listar los registros: " . $e->getMessage();
            return null;
        }
    }

    public function obtenerPorNit($nit_empresa) {
        try {
            $stmt = $this->getCnx()->prepare("SELECT * FROM empresa WHERE nit_empresa = ?");
            $stmt->execute([$nit_empresa]);
    
            if ($stmt->rowCount() == 1) {
                $empresa = null;
                $row = $stmt->fetch();
    
                $empresa = new empresa(null,null,null,null,null,null);
                $empresa->setNitEmpresa($row['nit_empresa']);
                $empresa->setNombreEmpresa($row['nombre_empresa']);
                $empresa->setPropietario($row['propietario']);
                $empresa->setSector($row['sector']);
                $empresa->setFechaFundacion($row['fecha_Fundacion']);
                $empresa->setTipoEntidad($row['Tipo_Entidad']);
    
                return $empresa;
            } else {
                return null;
            }
        } catch(PDOException $e) {
            echo "Error al obtener la empresa: " . $e->getMessage();
            return null;
        }
    }
}
?>
