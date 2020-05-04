<?php

$cursos = explode(", ", "PHP, C#, JAVA, Flutter");

var_dump($cursos);

$cursosString = implode(" - ", $cursos);

var_dump($cursosString);