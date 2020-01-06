<?php
    require_once("array.php");
    require_once("conditionals.php");
    require_once("dates.php");
    require_once("functions.php");
    require_once("index.php");
    require_once("iterators.php");
    require_once("main.php");
    require_once("maths.php");
    require_once("operators.php");
    require_once("phpinfo.php");
    require_once("poo.php");
    require_once("print.php");
    require_once("strings.php");
    require_once("types.php");

    $message= "Hello";
    $countries = ['Spain', 'Argentina', 'Mexico'];
    function sayHello($name){
        echo 'Hello ' .  $name . ", Welcome";
    }
    function getSeason(){
        $today = new DateTime();
        $spring = new DateTime('March 20');
        $summer = new DateTime('June 20');
        $fall = new DateTime('September 22');
        $winter = new DateTime('December 21');
            switch(true) {
                case $today >= $spring && $today < $summer:
                    return 'spring';
            
                case $today >= $summer && $today < $fall:
                    return 'summer';
            
                case $today >= $fall && $today < $winter:
                    return 'fall';
                default:
                    return 'winter';
            }
        }
        $string = 'This is a string';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1><?= $message ?></h1>
<ul>
<?php foreach ($countries as $country){?>
    <li><?= $country ?></li>
    <?php } ?>
</ul>
        <h2><?php sayHello('Alfonso') ?></h2>
        <p style="color:<?php if(date('d')%2 == 0){ ?> red; <?php }else{ ?> blue; <?php } ?>"><?= date('d') ?></p>
        <img src="./assets/<?php echo getSeason() ?>.jpg">
        <p><?= $string ?></p>

</body>

</html>



