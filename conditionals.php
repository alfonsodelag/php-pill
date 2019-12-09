<?php
//Crea una condición simple que evalúe si el día actual es Lunes. Sólo en caso de que la condición se cumpla muestra un mensaje de tipo “Estamos a lunes“
function isMonday(){
    if(date("l") = 1) {
        echo "Today is Monday"
    } else {
        echo "Today is NOT Monday"
    }
}



//Crea una condición simple que evalúe si el mes actual es Octubre. En caso de que la condición se cumpla muestra un mensaje de tipo “Estamos en Octubre“, por el contrario, si dicha condición no se cumple, se mostrará un mensaje de tipo “No estamos en Octubre“
function isOctober(){
    if(date('m') == "October"){
        echo "We are in October";
    } else {
        echo "We are NOT in October";
    }
}


//Crea una doble condición que evalúe:

//Si el minuto actual es inferior a 10
function minuteEval (){
    if(date('i') < "10") {
    //Muestra un mensaje de tipo “el minuto actual es inferior a 10“
        echo "Minute is lower than 10";

    //Si el minuto actual es superior a 15
    } elseif (date('i') > "15"){
    //Muestra un mensaje de tipo “el minuto actual es superior a 15“
    echo "Minute is more than 15";
    } else {
    //Si no cumple ninguna de las dos condiciones anteriores
    echo "The current time is more than 10 and less than 15"
    }
    //Muestra un mensaje de tipo “no se cumple ninguna condición“
}

//Crea una estructura de control de tipo switch para que se muestre un mensaje diferente dependiendo del día de la semana actual. Puedes escribir cualquier tipo de mensaje, lo importante es que entiendas cómo funciona y en qué casos usarlo.
switch(date('l')) {
    
    case "Monday":
    echo("<br> Today is Monday <br>");
    break;
    
    case "Tuesday":
    echo("<br> Today is Tuesday <br>");
    break;

    case "Wednesday":
    echo("<br> Toda is Wednesday <br>");

    case "Thursday":
    echo("<br> Today is Thursday <br>");

    case "Friday":
    echo("<br> Today is Friday <br>");

    case "Saturday":
    echo("<br> Today is Saturday <br>");

    case "Sunday":
    echo("<br> Today is Sunday <br>");
}


?>