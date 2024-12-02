<?php
 $name  = 'Vladimir';
 $age = 20;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Переменные и вывод</title>
</head>
<body>
 <h1>Переменные и вывод</h1>
    Меня зовут: <?=$name?> <br>
    Мне <?=$age?> лет <br>
    <?php unset($name) ?> 
    <?php unset($age) ?> 
 <?php
 /*
 <h1>Переменные и вывод</h1>
    Меня зовут: <?=$name?> <br>
    Мне <?=$age?> года <br>
    <?=unset($name)?> 
    <?=unset($age)?> 
    /////////////////
 */
    /*
    echo "$name = " ;
    echo gettype($name);
    echo "\n";
    echo "$age = ";
    echo gettype($age);
     echo "$name = " ;
    echo gettype($name);
    echo "\n";
    echo "$age = ";
    echo gettype($age);
    */
   
 ?>
 
</body>
</html>