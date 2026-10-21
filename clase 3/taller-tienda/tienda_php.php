<?php

function saludarCliente(string $nombre = "cliente"): string {
    return "Bienvenido a la tienda, $nombre";
}

echo saludarCliente() . "\n<br>";       
echo saludarCliente("María") . "\n<br>"; 

echo "<hr>";

function calcularIVA(float $precio, float $tasa = 0.19): float {
    return round($precio * (1 + $tasa), 2);
}

function formatearPrecio(float $valor): string {
    return '$' . number_format($valor, 0, ',', '.');
}

echo formatearPrecio(calcularIVA(50000)) . "\n<br>";        // IVA del 19 %
echo formatearPrecio(calcularIVA(50000, 0.05)) . "\n<br>";  // IVA del 5 %


function aplicarDescuento(float $precio, float $porcentaje = 0): float {
    return $precio - ($precio * $porcentaje / 100);
}
echo "<hr>";
echo formatearPrecio(aplicarDescuento(precio: 80000, porcentaje: 10)) . "\n<br>";

function totalCarrito(float ...$precios): float {
    return array_sum($precios);
}

echo "<hr>";
echo formatearPrecio(totalCarrito(15000, 22000, 8000)) . "\n<br>";

function descontarStock(int &$stock, int $cantidad): void {
    $stock -= $cantidad;
}

$stockCuadernos = 10;
descontarStock($stockCuadernos, 3);
echo"<hr>";
echo "Quedan $stockCuadernos cuadernos\n<br>";


function promedioPrecios(float ...$precios): float {
    if (count($precios) === 0) {
        return 0; // Evitar división por cero
    }
    return array_sum($precios) / count($precios);
}

echo "<hr>";
echo formatearPrecio(promedioPrecios(15000, 22000, 8000)) . "\n<br>";