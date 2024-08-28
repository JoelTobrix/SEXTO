<?php
//TODO: Clase de Autores
require_once('../config/config.php');
class Autores{

public function todos() //select * from autores
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `autores`";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function uno($autor_id) //select * from autores where id = $id
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `autores` WHERE `autor_id`=$autor_id";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function insertar($nombre, $apellido, $fecha_nacimiento, $nacionalidad) //insert into 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "INSERT INTO `autores` ( `nombre`, `apellido`, `fecha_nacimiento`, `nacionalidad`) VALUES ('$nombre','$apellido','$fecha_nacimiento','$nacionalidad')";
        if (mysqli_query($con, $cadena)) {
            return $con->insert_id;
        } else {
            return $con->error;
        }
    } catch (Exception $th) {
        return $th->getMessage();
    } finally {
        $con->close();
    }
}
 
public function actualizar($nombre, $apellido, $fecha_nacimiento, $nacionalidad) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "UPDATE `autores` SET `nombre`='$nombre',`apellido`='$apellido',`fecha_nacimiento`='$fecha_nacimiento',`nacionalidad`='$nacionalidad' WHERE `autor_id` = $autor_id";
        if (mysqli_query($con, $cadena)) {
            return $autor_id;
        } else {
            return $con->error;
        }
    } catch (Exception $th) {
        return $th->getMessage();
    } finally {
        $con->close();
    }
}
//cambiar
public function eliminar($autor_id) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();

        // Validar que $idClientes sea un entero
        $autor_id = (int)$autor_id;

        $cadena = "DELETE FROM `autores` WHERE `autor_id`= $autor_id";
        
        if (mysqli_query($con, $cadena)) {
            return "Registro eliminado correctamente"; // O simplemente return 1;
        } else {
            return "Error al eliminar el registro: " . mysqli_error($con);
        }
    } catch (Exception $th) {
        return "Excepción capturada: " . $th->getMessage();
    } finally {
        $con->close();
    }
}

}
?>