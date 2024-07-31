<?php
//1.-Declaracion de variables
//tipo entero
$numeroentero=3;
//tipo flotante
$floatnumero=3.1;
//tipo objeto cadena
$nombre= "Pedro";
$apellido="Fernandez";
//boolean
$verdadero= true;
$falso= false;
//variables array
$genero = array("masculino","femenino");

//2. Operaciones Aritmeticas
echo " El numero entero es " . $numeroentero;
echo " El numero decimal es: " . $floatnumero;
echo " Hola: " . $nombre;
echo " Con apellido: " . $apellido;
echo " La opcion es: " . $verdadero;
echo " La segunda opcion es: " . $falso;

   foreach($genero  as $g){
    echo $g . "<br>";
   }
//3. Manipulacion de cadenas
echo " Cadena concatenada con las variables mencionadas: " . " Hola: " . $nombre . $apellido . " Su nombre mencionado es: " . $verdadero;
$cadena="Hola amigos";
$cadenaconcatenada= $cadena;
echo="Cadena concatenada" . $cadenaconcatenada . "<br>";
//Obtencion de la longitud
$longitud = strlen($cadenaConcatenada);
echo=" La longitud de la cadena concatenada: " . $longitud;
//4. Uso de condicionales true y false

if($verdadero){
  echo="La condicion es verdadera";
}else{
   echo="La condicion es falsa";
}
//5. Creacion de un Array
$mostrargenero="true";
if($mostragenero){
 echo=" Los Generos son: <br>";
 foreach($genero as $generos){
   echo $generos . "<br>";

 }
}else{
  
   echo="No hay generos"
}
 ?>