<?php
include('daoEmpleado.php');
include('../conexion/conexion.php');
include('../modelo/Empleado.php');

class d extends Conexion implements DaoEmpleado {
       
    public function registrar(empleado $a) { 
        try {
            if ($this->getCnx() != null) {
                $id_empleado = $a->getIdEmpleado();
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
                $sql = "INSERT INTO empleado (id_empleado, nombre1_e, nombre2_e, apellido1_e, apellido2_e, genero_e, direccion_e, telefono_e, correo_e, fecha_Ingreso_e,fecha_Nacimiento_e) VALUES (?, ?, ?, ?, ?, ?, ?, ? ,?, ?,?)";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$id_empleado ,$nombre1_e, $nombre2_e, $apellido1_e, $apellido2_e, $genero_e, $direccion_e, $telefono_e, $correo_e,$fecha_Ingreso_e ,$fecha_Nacimiento_e]);

            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }  
    }

    public function modificar(empleado $a) {    
        $id_empleado = $a->getIdEmpleado();   
        $nombre1_e = $a->getNombre1_e();
        $nombre2_e = $a->getNombre2_e();
        $apellido1_e = $a->getApellido1_e();
        $apellido2_e = $a->getApellido2_e();
        $genero_e = $a->getGenero_e();
        $direccion_e = $a->getDireccion_e();
        $telefono_e = $a->getTelefono_e();
        $correo_e = $a->getCorreo_e();
        $fecha_ingreso_e = $a->getFecha_Ingreso_e();
        $fecha_nacimiento_e = $a->getFecha_Nacimiento_e();
        
        try {
            $sql = "UPDATE empleado SET 
                    nombre1_e = ?, 
                    nombre2_e = ?, 
                    apellido1_e = ?, 
                    apellido2_e = ?, 
                    genero_e = ?, 
                    direccion_e = ?, 
                    telefono_e = ?, 
                    correo_e = ?,
                    fecha_Ingreso_e = ?,
                    fecha_Nacimiento_e = ? 
                    WHERE id_empleado = ?";
            
            $stmt = $this->getCnx()->prepare($sql);
            $stmt->execute([$nombre1_e, $nombre2_e, $apellido1_e, $apellido2_e, $genero_e, $direccion_e, $telefono_e, $correo_e, $fecha_ingreso_e ,$fecha_nacimiento_e, $id_empleado]);
        
            if ($stmt->rowCount() > 0) {
                echo "Registro modificado exitosamente.";
            } else {
                echo "No se realizó ninguna modificación en el registro.";
            }
        } catch(PDOException $e) {
            echo "Error al modificar el registro: " . $e->getMessage();
        }
    }

    public function eliminar(empleado $a) {        
        try {
            $id_empleado = $a->getIdEmpleado();
            $stmt = $this->getCnx()->prepare("DELETE FROM empleado WHERE id_empleado = ?");
            $stmt->execute([$id_empleado]);  
            header("location: ../controlador/controladorlistarEmple.php");   
        } catch(PDOException $e) {
            echo "Error al eliminar el registro: " . $e->getMessage();
        }      
    }

    public function listar() {
        $lista = null;
        try {    
            $stmt = $this->getCnx()->prepare("SELECT * FROM empleado");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key) {           
                $a = new empleado(null,null,null,null,null,null,null,null,null,null,null);
                $a->setIdEmpleado($key['id_empleado']);
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
            return $lista;        
        } catch(PDOException $e) {
            $e->getMessage().'error en listar de empleado' . $e->getMessage();
        
        return null;       
        }       
}
public function obtenerPorDocu($id_empleado) {
    try {
        $stmt = $this->getCnx()->prepare("SELECT * FROM empleado WHERE id_empleado = ?");
        $stmt->execute([$id_empleado]);

        if ($stmt->rowCount() == 1) {
            $empleado = null;
            $row = $stmt->fetch();

            $empleado = new empleado(null,null,null,null,null,null,null,null,null,null,null);
            $empleado->setIdEmpleado($row['id_empleado']);
            $empleado->setNombre1_e($row['nombre1_e']);
            $empleado->setNombre2_e($row['nombre2_e']);
            $empleado->setApellido1_e($row['apellido1_e']);
            $empleado->setApellido2_e($row['apellido2_e']);
            $empleado->setGenero_e($row['genero_e']);
            $empleado->setDireccion_e($row['direccion_e']);
            $empleado->setTelefono_e($row['telefono_e']);
            $empleado->setCorreo_e($row['correo_e']);
            $empleado->setFecha_Ingreso_e($row['fecha_Ingreso_e']);
            $empleado->setFecha_Nacimiento_e($row['fecha_Nacimiento_e']);

            return $empleado;
        } else {
            return null;
        }
    } catch(PDOException $e) {
        echo "Error al obtener la empleado: " . $e->getMessage();
        return null;
    }
}
}
?>
