<?php

require './poo.php'

$person1= new Person("Alfonso", "De La Guardia", "Panamanian", 1);

$dog1= new Dog("weinmaraner", "blue", "small");
$dog1_clone= clone $dog1;


echo "<br>";
echo "The name of person1 is: ".$person1 -> __getName()."<br>";
echo "The lastname of person1 is: ".$person1 -> __getLastName()."<br>";
echo "The nationality of person1 is: ".$person1 -> __getNationality()."<br>";
echo "The id of person1 is: ".$person1 -> __getId()."<br>";


?>