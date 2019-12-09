<?php

//Imprimir una cadena de texto
print("Hello World!");
$Hello = "Hello World!";

//Imprimir una cadena de texto que no interprete variables

print("hello is variable $Hello");

//Imprimir una cadena de texto que interprete variables
print($hello= "hello");

// ?? Concatenar en una cadena de texto una variable declarada previamente

//Ejecuta la función que permite reemplazar texto en una cadena ( sensible a mayúsculas / minúsculas )
$replace = str_replace("Hello", "You!", "Hello World!");
var_dump($replace);

//Ejecuta la función que permite reemplazar texto en una cadena ( sin que tenga en cuenta mayúsculas / minúsculas )
$ireplace= str_ireplace("WORLD", "Alfonso", "Hello perfect World!");

//Ejecuta la función que permite escribir N veces un texto
var_dump(str_repeat($replace, 2));

//Ejecuta la función que permita obtener la longitud de una cadena de texto
echo "the length of the $replace string is: ";
echo strlen($replace);

//Ejecuta la función que permita obtener la posición de la primera ocurrencia de un texto dentro de una cadena de texto

//Ejecuta la función que permita transformar a mayúsculas una cadena de texto

//Ejecuta la función que permita transformar a minúsculas una cadena de texto

//Ejecuta la función que permita obtener una subcadena de texto a partir de la posición

?>