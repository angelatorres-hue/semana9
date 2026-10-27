<?php
/**
 * Calcula la superficie (área) de un cuadrado.
 * @param float $lado Longitud del lado del cuadrado.
 * @return float Área calculada.
 */
function calcularSuperficieCuadrado(float $lado): float {
    if ($lado < 0) {
        return 0;
    }
    return $lado * $lado;
}