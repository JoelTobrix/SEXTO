<?php

//TODO: controlador de clientes

require_once('../models/clientes.model.php');
//error_reporting(0);
$clientes = new Clientes;

switch ($_GET["op"]) {
        //TODO: operaciones de clientes

    case 'todos': 
        $datos = array(); 
        $datos = $clientes->todos(); 
        while ($row = mysqli_fetch_assoc($datos)) 
        {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        //TODO: procedimeinto para obtener un registro de la base de datos
    case 'uno':
        $idClientes = $_POST["idClientes"];
        $datos = array();
        $datos = $clientes->uno($idClientes );
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        //TODO: Procedimeinto para insertar un cliente en la base de datos
    case 'insertar':
        $Nombres = $_POST["Nombres"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Cedula = $_POST["Cedula"];
        $Correo = $_POST["Correo"];

        $datos = array();
        $datos = $clientes->insertar($Nombres, $Direccion, $Telefono, $Cedula, $Correo);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para actualziar un proveedor en la base de datos
    case 'actualizar':
        $idClientes = $_POST["idClientes"];
        $Nombres = $_POST["Nombres"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Cedula = $_POST["Cedula"];
        $Correo = $_POST["Correo"];
        $datos = array();
        $datos = $clientes->actualizar($idClientes, $Nombres, $Direccion, $Telefono, $Cedula, $Correo);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para eliminar un proveedor en la base de datos
    case 'eliminar':
        $idClientes = $_POST["idClientes"];
        $datos = array();
        $datos = $clientes->eliminar($idClientes);
        echo json_encode($datos);
        break;
}
