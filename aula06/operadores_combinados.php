<?php

# o uso do operador de atribuição junto com a operador matemático para facilitar a escrita de menos código

$a = 42;
echo $a;
echo "<br>";
$a += 31;
echo $a;
echo "<br>";
$a -= 5;
echo $a;
echo "<br>";
$a *= 5;
echo $a;
echo "<br>";
$a %= 4;
echo $a;
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h2>Incremento e decremento</h2>";

$b = 10;

$b++; # incremento
$b--; # decremento

++$b; # pré-incremento
--$b; # pré-decremento

$b++; # pós-incremento
$b--; # pós-decremento

$c = 10;
$d = 10;

echo "c = ".$c;
echo "<br>";
echo "d = ".$d;
echo "<br>";
echo "pós-incremento";
echo "<br>";
echo "c++ = ".$c++;
echo "<br>";
echo "pré-incremento";
echo "<br>";
echo "--d = ".--$d;



