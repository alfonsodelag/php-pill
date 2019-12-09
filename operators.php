<?php
// ARITHMETIC OPERATORS
// Add Example
$a= 2;
$b= 3;

echo $a + $b;

//Substraction Example
$x= 5;
$y= 2;

echo $x - $y;

//Multiplication example
$y= 3;
$x= 4;

echo $y*$x;

//Division example
$c= 4;
$d= 2;

echo $c/$d;

//Modulo example
$x = 10;  
$y = 6;

echo $x % $y;


//COMPARISON OPERATORS
// == comparison operators
$e = 100;  
$f = "100";
var_dump($x == $y); // returns true because values are equal

//!= operators example
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

// < operator example
$g= 10;
$h= 5;

echo $g < $h;  //Returns false because $h is NOT greater than $g

// > operator example
$i= 20;
$j= 10;

echo $i > $j; //Returns true because $i IS greater than $j

// >= operator example
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y

// <= operator example
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y

//LOGICAL OPERATORS &&, And; ||, Or; ! (NOT); Xor
//&&
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";  //It echoes Hello world! because both $x and $y ARE indeed 100 and 50
}

//And
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";  //True if both $x and $y are true
}

//Or
$l = 20;
$p = 30;

if($l == 20 or $p = 42500){
    echo "How you doin?"  //Echos How you doin? because l IS indeed 20
}

// ||
$r= 40;
$t= 55;

if($r = 12000 || $t = 55){
    echo "Hello!" //Echoes Hello! because $t really IS 55
}

//! (NOT)


//Xor
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!"; //True if either $x or $y is true, but not both
}

//DATES
//Obtener la fecha actual en cualquier formato
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

//Obtener el día actual
echo "Today is " . date("Y/m/d")

//Obtener el mes actual en formato numérico (1-12)
echo "Today is " . date("m"). "<br>"

//Obtener el minuto actual con ceros iniciales (00 - 59)
echo "The time is " . date("i");

//Instanciar la clase DateTIme y posteriormente invocar al método format con el argumento “Y-m-d” para que muestre año-mes-dia


?>