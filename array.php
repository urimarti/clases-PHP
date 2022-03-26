<?php

$animal = [
    'tipo' => 'Perro',
    'nombre' => 'Trueno',
    'raza' => 'Bulldog',
    'peligroso' => 0
];

function describe(array $animal = []): string
{
    $texto = 'El animal es un ' . $animal['tipo'];
    $texto .= ' que se llama ' . $animal['nombre'];
    $texto .= ' y es de raza ' . $animal['raza'] . '. ';

    if ($animal['peligroso']) {
        $texto .= '¡Cuidado que es peligroso!';
    } else {
        $texto .= 'Tranquil@. ¡No es peligroso!';
    }

    return $texto;
}

echo describe($animal);
