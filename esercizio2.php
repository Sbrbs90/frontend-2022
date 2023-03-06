<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    /*function crea_div($testo, $numero_div, $classe){
        for($i = 0; $i < $numero_div; $i++){
            echo "<div class= '" . $classe ."'"; 
            echo ">"; 
            echo $testo;
            echo "</div>";
        }  
    }
    crea_div("ciao mondo", 20, "evidente");*/

    function nuovo_div($testo, $numero_div, $classe, $classe2){
        for($i = 0; $i < $numero_div; $i++){
            if($i % 2 != 0){
                echo "<div class= '" . $classe2 ."'"; 
                echo ">"; 
                echo $testo;
                echo "</div>";
            }else{
                echo "<div class= '" . $classe ."'"; 
                echo ">"; 
                echo $testo;
                echo "</div>";
            }
        }  
    }
    nuovo_div("ciao mondo", 20, "evidente", "alternata");

    ?>
</body>
</html>