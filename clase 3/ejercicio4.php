<?php

/*las variables globales son variables que se declaran fuera de una
funcion y se pueden usar dentro de la funcion*/

$x = 10;
function mostrar() {
    global $x;
    echo $x;  // Ahora $x es accesible
    $x = 5;      // variable local distinta
}   

function sumar(int $a, int $b): int {
    return $a + $b;
}
echo sumar(3, 4); // 7

function saludarA(string $nombre = "invitado"): string {
    return "Hola, $nombre <br>";
}
echo saludarA();        // Hola, invitado
echo saludarA("Laura"); // Hola, Laura



/*Argumentos nombrados
Permite indicar el nombre de un prarametro al llamar a la función*/

function crearUsuario(string $nombre, int $edad = 18, string $pais = "Colombia") {
    return "$nombre, $edad años, $pais";
}
echo crearUsuario(nombre: "Ana", pais: "Perú <br>"); // Ana, 18 años, Perú



/*valor por referencia */

function incrementar(int $n)     { $n++; } // no cambia el original
function incrementarRef(int &$n) { $n++; } // sí cambia

$num = 1;
incrementar($num);    echo $num; // 1
incrementarRef($num); echo $num; // 2

/* Número variable de argumentos*/

function promedio(float ...$numeros): float {
    return array_sum($numeros) / count($numeros);
}
echo promedio(4, 5, 6); // 5