<?php
//TODO: Clase de libros
require_once('../config/config.php');
class Libros{

public function todos() //select * from libros
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `libros`";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function uno($libro_id) //select * from libros where id = $id
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `libros` WHERE `libro_id`=$libro_id";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function insertar($titulo, $genero, $fecha_publicacion, $isbn) //insert into 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "INSERT INTO `libros` ( `titulo`, `genero`, `fecha_publicacion`, `isbn`) VALUES ('$titulo','$genero','$fecha_publicacion','$isbn')";
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
 
public function actualizar($titulo, $genero, $fecha_publicacion, $isbn) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "UPDATE `libros` SET `titulo`='$titulo',`genero`='$genero',`fecha_publicacion`='$fecha_publicacion',`isbn`='$isbn' WHERE `libro_id` = $libro_id";
        if (mysqli_query($con, $cadena)) {
            return $libro_id;
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
public function eliminar($libro_id) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();

        // Validar que $idClientes sea un entero
        $libro_id = (int)$libro_id;

        $cadena = "DELETE FROM `libros` WHERE `libro_id`= $libro_id";
        
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