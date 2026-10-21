<?php

declare(strict_types=1);

//crear una funcion que se llame verificar nuemro y que permita decir si es par o impar
function verificarNumero(int $numero): string {
    if ($numero % 2 === 0) {
        return "El número $numero es par. <br>";
    } else {
        return "El número $numero es impar. <br>";
    }
}
echo verificarNumero(5); // El número 5 es impar.
echo verificarNumero(8); // El número 8 es par.