<?php
//TODO: Clase de Clientes
require_once('../config/config.php');
class Clientes{

public function todos() //select * from clientes
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `clientes`";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function uno($idClientes) //select * from provedores where id = $id
{
    $con = new ClaseConectar();
    $con = $con->ProcedimientoParaConectar();
    $cadena = "SELECT * FROM `clientes` WHERE `idClientes`=$idClientes";
    $datos = mysqli_query($con, $cadena);
    $con->close();
    return $datos;
}
public function insertar($Nombres, $Direccion, $Telefono, $Cedula, $Correo) //insert into 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "INSERT INTO `clientes` ( `Nombres`, `Direccion`, `Telefono`, `Cedula`, `Correo`) VALUES ('$Nombres','$Direccion','$Telefono','$Cedula','$Correo')";
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
 
public function actualizar($idClientes, $Nombres, $Direccion, $Telefono, $Cedula, $Correo) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "UPDATE `clientes` SET `Nombres`='$Nombres',`Direccion`='$Direccion',`Telefono`='$Telefono',`Cedula`='$Cedula',`Correo`='$Correo' WHERE `idClientes` = $idClientes";
        if (mysqli_query($con, $cadena)) {
            return $idClientes;
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
public function eliminar($idClientes) 
{
    try {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();

        // Validar que $idClientes sea un entero
        $idClientes = (int)$idClientes;

        $cadena = "DELETE FROM `clientes` WHERE `idClientes`= $idClientes";
        
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