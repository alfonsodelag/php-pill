<?php

//For example
<pre>
array
(
   "name": "name",
   "age": "age",
   "gender": "gender"
)
</pre>

for ($i=0; $i < Array.length ; $i++) { 
    print(array)
}


//For each Example
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento


//While Loop
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 

//Do While
$i = 0;
do {
    echo $i;
} while ($i > 0);

?>

