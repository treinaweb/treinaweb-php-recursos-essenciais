<?php

$valor = [
    "php" => 7.2,
    "Dart" => 2,
    "C#"   => 9
];

// if (isset($valor['C#'])) {
//     echo $valor['C#'];
// } else {
//     echo 'Curso de C# não encontrado';
// }

//$cSharp = isset($valor['C#']) ? $valor['C#'] : 'Curso de C# não encontrado';

$cSharp = $valor['C#'] ?? 'Curso de C# não encontrado';

echo $cSharp;
