<?php
include('daousuario.php');
include ('../conexion/conexion.php');
include ('../modelo/usuario.php');

class c extends Conexion implements DaoUsuario {
       
    public function registrar(usuario $a) { 
        try {
            if ($this->getCnx() != null) {
                $id_persona = $a->getIdPersona();
                $nombre1 = $a->getNombre1();
                $nombre2 = $a->getNombre2();
                $apellido1 = $a->getApellido1();
                $apellido2 = $a->getApellido2();
                $genero = $a->getGenero();
                $direccion = $a->getDireccion();
                $telefono = $a->getTelefono();
                $fecha_Nacimiento = $a->getFecha_Nacimiento();
                
                $sql = "INSERT INTO persona (id_persona, nombre1, nombre2, apellido1, apellido2, genero, direccion, telefono, fecha_Nacimiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$id_persona, $nombre1, $nombre2, $apellido1, $apellido2, $genero, $direccion, $telefono, $fecha_Nacimiento]);
            } else {
                echo $this->getCnx() . ' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }             
    }    

    public function modificar(usuario $a) {  
        $id_persona = $a->getIdPersona();
        $nombre1 = $a->getNombre1();
        $nombre2 = $a->getNombre2();
        $apellido1 = $a->getApellido1();
        $apellido2 = $a->getApellido2();
        $genero = $a->getGenero();
        $direccion = $a->getDireccion();
        $telefono = $a->getTelefono();
        $fecha_Nacimiento = $a->getFecha_Nacimiento();
        
        try {
            $sql = "UPDATE persona SET 
                    nombre1 = ?, 
                    nombre2 = ?, 
                    apellido1 = ?, 
                    apellido2 = ?, 
                    genero = ?, 
                    direccion = ?, 
                    telefono = ?, 
                    fecha_Nacimiento = ? 
                    WHERE id_persona = ?";
            
            $stmt = $this->getCnx()->prepare($sql);
            $stmt->execute([$nombre1, $nombre2, $apellido1, $apellido2, $genero, $direccion, $telefono, $fecha_Nacimiento, $id_persona]);
        
            if ($stmt->rowCount() > 0) {
                echo "Registro modificado exitosamente.";
            } else {
                echo "No se realizó ninguna modificación en el registro.";
            }
        } catch(PDOException $e) {
            echo "Error al modificar el registro: " . $e->getMessage();
        }
    }
    

    public function eliminar(usuario $a) {        
        try {
            $id_persona = $a->getIdPersona();
            $stmt = $this->getCnx()->prepare("DELETE FROM persona WHERE id_persona = ?");
            $stmt->execute([$id_persona]);  
            header("location: ../controlador/controladorlistar.php");   
        } catch(PDOException $e) {
            echo "Error al eliminar el registro: " . $e->getMessage();
        }
    }

    public function listar() {
        try {    
            $stmt = $this->getCnx()->prepare("SELECT * FROM persona");
            $stmt->execute();
            $lista = array();
            foreach ($stmt as $key) {           
                $a = new usuario(null,null,null,null,null,null,null,null,null);
                $a->setIdPersona($key['id_persona']);
                $a->setNombre1($key['nombre1']);
                $a->setNombre2($key['nombre2']);
                $a->setApellido1($key['apellido1']);
                $a->setApellido2($key['apellido2']);
                $a->setGenero($key['genero']);
                $a->setDireccion($key['direccion']);
                $a->setTelefono($key['telefono']);
                $a->setFecha_Nacimiento($key['fecha_Nacimiento']);           
                array_push($lista,$a);            
            }        
            return $lista;       
        } catch(PDOException $e) {
            echo "Error al listar los registros: " . $e->getMessage();
            return null;
        }
    }

    public function obtenerPorDocu($id_persona) {
        try {
            $stmt = $this->getCnx()->prepare("SELECT * FROM persona WHERE id_persona = ?");
            $stmt->execute([$id_persona]);
    
            if ($stmt->rowCount() == 1) {
                $usuario = null;
                $row = $stmt->fetch();
    
                $usuario = new usuario(null,null,null,null,null,null,null,null,null);
                $usuario->setIdPersona($row['id_persona']);
                $usuario->setNombre1($row['nombre1']);
                $usuario->setNombre2($row['nombre2']);
                $usuario->setApellido1($row['apellido1']);
                $usuario->setApellido2($row['apellido1']);
                $usuario->setGenero($row['genero']);
                $usuario->setDireccion($row['direccion']);
                $usuario->setTelefono($row['telefono']);
                $usuario->setFecha_Nacimiento($row['fecha_Nacimiento']);
    
                return $usuario;
            } else {
                return null;
            }
        } catch(PDOException $e) {
            echo "Error al obtener la persona: " . $e->getMessage();
            return null;
        }
    }
}
?>
