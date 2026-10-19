<?php
echo "Hola, mundo desde PHP <br>";

// Comentario de una linea
# Otro comentario de una linea
/* Comentario
   de varias lineas */


echo "Hola <br>";          // imprime texto
print "Adios <br>";        // tambien imprime


$nombre = "Laura";      // string (texto)
$edad = 25;             // int (entero)
$altura = 1.65;         // float (decimal)
$esEstudiante = true;   // bool (verdadero/falso)


echo "Me llamo $nombre y tengo $edad años <br>";   // comillas dobles: interpreta variables
echo 'Me llamo $nombre <br>';                      // comillas simples: imprime tal cual
echo "Hola <br>" . $nombre;                       // el punto concatena
var_dump($edad);                              // muestra tipo y valor (ideal para depurar)


if ($edad >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
