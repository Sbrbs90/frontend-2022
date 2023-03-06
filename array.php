<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
<?php
    $array = ["ciao", "mondo"];     //stampo il numero di elementi dell'array
    echo count($array) . "<br>";

    for($i = 0; $i < count($array); $i++){      // stampa il contenuto dell'array
        echo $array[$i] . " ";
    }

    function stampa_array($valori){     //stampi div che includono gli elementi dell'array
        for($i = 0; $i < count($valori); $i++){
            echo "<div>";
            echo $valori[$i];
            echo "</div>";
        }
    }
    stampa_array($array);
?>
</body>
</html>