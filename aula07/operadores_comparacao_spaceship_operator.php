<?php

// os operadores de comparação sempre terão como resposta um valor booleano
// true ou false
// usados principalmente junto com as estruturas de controle

(2 == 3); # false
(100 == 100); # true
(50 == '50'); # true // compara o valor
(50 === '50'); # false // compara o tipo e o valor

echo 2 == 3 ? 'true' : 'false';
echo "<br>";
echo 100 == 100 ? 'true' : 'false';
echo "<br>";
echo 50 == '50' ? 'true' : 'false';
echo "<br>";
echo 50 === '50' ? 'true' : 'false';
echo "<br>";

10 != 10; // diferente
10 <> 10; // diferente, essa é outra forma de referenciar
10 > 10; // maior que
10 >= 10; // maior ou igual a 
10 < 10; // menor que
10 <= 10; // menor igual a

// SPACESHIP OPERATOR
10 <=> 10; // recebe 0 se for igual, 1 se o primeiro elemento for o maior e 2 se o segundo elemento for o maior

//echo 10 <=> 11;

$a = 11;
$b = 10;

$c = $a <=> $b;
echo $c;