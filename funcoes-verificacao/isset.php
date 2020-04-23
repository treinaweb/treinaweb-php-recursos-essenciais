<?php

$valor = [
    "php" => 7.2,
    "Dart" => 2,
    "C#"   => 9
];

if (isset($valor['C#'])) {
    echo $valor['C#'];
} else {
    echo 'Curso de C# não encontrado';
}