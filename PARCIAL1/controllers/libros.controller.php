<?php

//TODO: controlador de libros

require_once('../models/libros.model.php');
//error_reporting(0);
$libros = new Libros;

switch ($_GET["op"]) {
        //TODO: operaciones de libros

    case 'todos': 
        $datos = array(); 
        $datos = $libros->todos(); 
        while ($row = mysqli_fetch_assoc($datos)) 
        {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        //TODO: procedimeinto para obtener un registro de la base de datos
    case 'uno':
        $libro_id = $_POST["libro_id"];
        $datos = array();
        $datos = $libros->uno($libro_id );
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        //TODO: Procedimeinto para insertar un autor en la base de datos
    case 'insertar':
        $titulo = $_POST["titulo"];
        $genero = $_POST["genero"];
        $fecha_publicacion = $_POST["fecha_publicacion"];
        $isbn = $_POST["isbn"];
        

        $datos = array();
        $datos = $libros->insertar($titulo, $genero, $fecha_publicacion , $isbn);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para actualziar un proveedor en la base de datos
    case 'actualizar':
        $libro_id = $_POST["libro_id"];
        $titulo = $_POST["titulo"];
        $genero = $_POST["genero"];
        $fecha_publicacion = $_POST["fecha_publicacion"];
        $isbn = $_POST["isbn"];
        $datos = array();
        $datos = $libros->actualizar($libro_id, $titulo, $genero, $fecha_publicacion, $isbn);
        echo json_encode($datos);
        break;
        //TODO: Procedimeinto para eliminar un proveedor en la base de datos
    case 'eliminar':
        $libro_id = $_POST["libro_id"];
        $datos = array();
        $datos = $libros->eliminar($libro_id);
        echo json_encode($datos);
        break;
}