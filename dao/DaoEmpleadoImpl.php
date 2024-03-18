<?php
include('daoEmpleado.php');
include('../conexion/conexion.php');
include('../modelo/Empleado.php');

class DaoEmpleadoImpl extends Conexion implements DaoEmpleado {
       
    public function registrar(Empleado $a) { 
        try {
            if ($this->getCnx() != null) {
                $nombre1_e = $a->getNombre1_e();
                $nombre2_e = $a->getNombre2_e();
                $apellido1_e = $a->getApellido1_e();
                $apellido2_e = $a->getApellido2_e();
                $genero_e = $a->getGenero_e();
                $direccion_e = $a->getDireccion_e();
                $telefono_e = $a->getTelefono_e();
                $correo_e = $a->getCorreo_e();
                $fecha_Ingreso_e = $a->getFecha_Ingreso_e();
                $fecha_Nacimiento_e = $a->getFecha_Nacimiento_e();
                $sql = "INSERT INTO empleado (nombre1_e, nombre2_e, apellido1_e, apellido2_e, genero_e, direccion_e, telefono_e, correo_e, fecha_Ingreso_e,fecha_Nacimiento_e) VALUES (?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$nombre1_e, $nombre2_e, $apellido1_e, $apellido2_e, $genero_e, $direccion_e, $telefono_e, $correo_e,$fecha_Ingreso_e ,$fecha_Nacimiento_e]);

            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }  
    }

    public function modificar(Empleado $a) {        
        $nombre1_e=$_GET['nombre1_e'];
        $nombre2_e=$_GET['nombre2_e'];
        $apellido1_e=$_GET['apellido1_e'];
        $apellido2_e=$_GET['apellido2_e'];
        $genero_e=$_GET['genero_e'];
        $direccion_e=$_GET['direccion_e'];
        $telefono_e=$_GET['telefono_e'];
        $correo_e=$_GET['correo_e'];
        $fecha_Ingreso_e=$_GET['fecha_Ingreso_e'];
        $fecha_Nacimiento_e=$_GET['fecha_Nacimiento_e'];
        $stmt=$this->getCnx()->prepare("UPDATE empleado SET nombre1_e = ?, nombre2_e = ?, apellido1_e = ?, apellido2_e = ?, genero_e = ?, direccion_e = ?, telefono_e = ?, correo_e = ?, fecha_Ingreso_e = ?, fecha_Nacimiento_e = ? WHERE id_empleado = ?");
        $stmt->execute([$nombre1_e, $nombre2_e, $apellido1_e, $apellido2_e, $genero_e, $direccion_e, $telefono_e, $correo_e, $fecha_Ingreso_e, $fecha_Nacimiento_e, $id_empleado]);       
    }

    public function eliminar(empleado $a) {        
        $id_empleado=$a->getIdempleado();
        $stmt=$this->getCnx()->prepare("delete from empleado where id_empleado=?");
        $stmt->execute([$id_empleado]);        
    }

    public function listar() {
        $lista = null;
        try {    
            $stmt = $this->getCnx()->prepare("select * from empleado");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key) {           
                $a = new Empleado(null,null,null,null,null,null,null,null);
                $a->setNombre1_e($key['nombre1_e']);
                $a->setNombre2_e($key['nombre2_e']);
                $a->setApellido1_e($key['apellido1_e']);
                $a->setApellido2_e($key['apellido2_e']);
                $a->setGenero_e($key['genero_e']);
                $a->setDireccion_e($key['direccion_e']);
                $a->setTelefono_e($key['telefono_e']);
                $a->setCorreo_e($key['correo_e']);
                $a->setFecha_Ingreso_e($key['fecha_Ingreso_e']);
                $a->setFecha_Nacimiento_e($key['fecha_Nacimiento_e']);           
                array_push($lista, $a);            
            }        
        } catch(PDOException $e) {
            $e->getMessage().'error en listar de DaoEmpleadoImpl';
        } 
        return $lista;       
    }       
}
?>
