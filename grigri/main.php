<?php

require_once "clases/Persona.php";
require_once "clases/Usuario.php";
//require_once "clases/Barrio.php";
//require_once "clases/Contacto.php";

// guardar

//




$usuario = new Usuario();
$usuario->setUsername('gomez');
$usuario->setPassword('ac03');
$persona = new Persona();
$persona->setNombre('prueba');
$persona->setApellido('usuario');
$persona->setFechaNacimiento('5213-03-25');
//$persona->setIdTipoDocumento('tipoDocumento');
$persona->setNumeroDocumento('2222');
$persona->setSexo('f');


$usuario->actualizar(1);
/*

$persona->actualizar(15);



$barrio = new Barrio();

$barrio->setNombre('2 de abril');

$barrio->actualizar(2);
$barrio->guardar();
$barrio->eliminar(1);

highlight_string(var_export($barrio, true));


$contacto = new contacto();

$contacto->setDescripcion('falso@gmail.com');
$contacto->settipoContacto('correo');

$contacto->guardar();
*/

?>