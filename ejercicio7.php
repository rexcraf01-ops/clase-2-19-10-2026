<?php
$Valor = 200000;
$descuento = 0;


if ($Valor >= 200000) {
    $descuento = 0.2;
} elseif ($Valor >= 100000) {
    $descuento = 0.1;
}
{
echo "El descuento es del " . ($descuento * 100) . "% " . "y el valor final es de " . ($Valor - ($Valor * $descuento));
}
