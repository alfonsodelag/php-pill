<?php

//Define una variable cuyo valor sea el resultado de la función que retorna un valor absoluto
echo('xyz = -4.2');
$xyz = -4.2;

//Define una variable cuyo valor sea el resultado de la función que retorna un valor redondeado al siguiente entero más alto
echo('Round: 1.93854');
$rounds = round(1.93854, 2);

//Define una variable cuyo valor sea el resultado de la función que retorna el valor más alto de una serie de valores que se reciben por parámetro
echo("<br>Max: 1,2,3,4 <br>");
$maxval = max(1,2,3,4);
echo $maxval;
//Define una variable cuyo valor sea el resultado de la función que retorna el valor más bajo de una serie de valores que se reciben por parámetro
echo("<br>Min: 5,6,7,8,9 <br>");
$min = min(5,6,7,8,9);
echo $min;
//Define una variable cuyo valor sea el resultado de la función que retorna un número aleatorio
$random = rand(4,10);
echo('<br> Random between 4 and 10');
echo $random;

?>