<?php

//Define un array simple compuesto por cadenas de texto
$cities = array("Madrid", "Barcelona", "Valencia");
echo "I live in $cities[1], but I want to go to $cities[0] and $cities[2]";

//Define un array simple compuesto por números enteros y números decimales PARSE ERROR!?
$numbers = array(1, 2, 3, 4.5, 5.5, 6);
echo $numbers;


//Define un array multidimensional PARSE ERROR!
$multidim = array[
    "people": [
        "person1": "Juan",
        "person2": "Pedro"
    ],
    "profession": [
        "job1": "carpenter",
        "job2": "painter"
    ]
    ];

//Ejecuta la función que permita obtener la longitud de un array
$phrase = array("Hello how are you doing?");
var_dump(count($phrase));
print(sizeof($phrase));

//Ejecuta la función que permita obtener la combinación de dos arrays
$firstarray= array(1,2,3);
$secondarray = array(4,5,6);
print_r(array_merge($firstarray, $secondarray));


//Ejecuta la función que dado un array devuelva el último elemento del mismo


//Ejecuta la función que dado un array agregue un nuevo elemento al array en cuestión

$fruits= array("banana", "orange", "cherries");
$newfruit = "apple";
array_push($fruits, $newfruit);
echo $fruits;


?>