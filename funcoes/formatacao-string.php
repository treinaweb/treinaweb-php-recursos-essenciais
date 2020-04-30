<?php

$curso = "PHP";
$versao = 7.4;

echo 'Curso de ', $curso, ' versao ', $versao;
echo "<br>";
echo 'Curso de ' . $curso . ' versao ' . $versao;
echo "<br>";
echo "Curso de $curso versao $versao";
echo "<br>";

$resultado = 'Curso de ' . $curso . ' versao ' . $versao;
echo $resultado;
echo "<br>";

$padrao = "Curso de %s versao %0.1f";
$resultado = sprintf($padrao, $curso, $versao);
echo $resultado;
echo "<br>";

printf($padrao, $curso, $versao);
echo "<br>";

$entrada = ['PHP', 7.4];

$resultado = vsprintf($padrao, $entrada);
echo $resultado;
echo "<br>";

vprintf("Curso de %s versao %0.1f", $entrada);

var_dump(strcmp("aa", "AA"), "aa" <=> "AA", "aa" === "AA");

var_dump( "treinaweb" === 0, "11t" == 11  );
