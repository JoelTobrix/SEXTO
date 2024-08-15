<?php

//TODO: controlador de autores

require_once('../models/autores.model.php');
//error_reporting(0);
$autores = new Autores;

switch ($_GET["op"]) {
        //TODO: operaciones de autores

    case 'todos': 
        $datos = array(); 
        $datos = $autores->todos(); 
        while ($row = mysqli_fetch_assoc($datos)) 
        {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        //TODO: procedimeinto para obtener un registro de la base de datos
    case 'uno':
        $autor_id = $_POST["autor_id"];
        $datos = array();
        $datos = $autores->uno($autor_id );
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        //TODO: Procedimeinto para insertar un autor en la base de datos
    case 'insertar':
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $nacionalidad = $_POST["nacionalidad"];
        

        $datos = array();
        $datos = $autores->insertar($nombre, $apellido, $fecha_nacimiento, $nacionalidad);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para actualziar un proveedor en la base de datos
    case 'actualizar':
        $autor_id = $_POST["autor_id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $nacionalidad = $_POST["nacionalidad"];
        $datos = array();
        $datos = $autores->actualizar($autor_id, $nombre, $apellido, $fecha_nacimiento, $nacionalidad);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para eliminar un proveedor en la base de datos
    case 'eliminar':
        $autor_id = $_POST["autor_id"];
        $datos = array();
        $datos = $autores->eliminar($autor_id);
        echo json_encode($datos);
        break;
}