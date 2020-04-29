<?php

// $nome = "Treinaweb Cursos";

// var_dump($nome[10]);

// $nome[10] = "c";

// var_dump($nome);

//echo "<h1 style="color: red;">Treinaweb Cursos</h1>";

// echo "<h1 style='color: red;'>Treinaweb Cursos</h1>";
// echo '<h1 style="color: red;">Treinaweb Cursos</h1>';

// echo "<h1 style=\"color: red;\">Treinaweb Cursos</h1>";
// echo '<h1 style=\'color: red;\'>Treinaweb Cursos</h1>';

// echo "Eu tenho R\$mil reais <br>";

// echo "\\192.168.10.10\minha-pasta\\";

$escola = "Treinaweb";
$curso = "PHP";

// $conteudo = <<<HTML
//     <h1 style="color: red">Ola $escola</h1>
//     <p style='color: blue'>Bem vindo ao curso de $curso<p>
// HTML;

$conteudo = <<<'HTML'
    <h1 style="color: red">Ola $escola \</h1> 
    <p style='color: blue'>Bem vindo ao curso de $curso<p>
HTML;

echo $conteudo;
