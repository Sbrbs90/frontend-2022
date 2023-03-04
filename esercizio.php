<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizi</title>

    
</head>
<body>
<?php

    //esercizio 1
    function somma($a, $b){
       $c = $a + $b;
        echo $c . "<br>";
    };

    //esercizio 2
    function massimo($num1, $num2){
        if($num1 > $num2){
            echo $num1 . "<br>";
        }else{
            echo $num2 . "<br>";
        }
    }

    //esercizio 3
    function stampa_immagine($nome, $classe, $id){
        echo "<img src= " . $nome . " " . "class= " . $classe . " " . "id = " . $id . ">";
    }

    somma(5, 10);

    massimo(100, 150);

    stampa_immagine("test.jpg", "round", "img01");
?>
    
</body>
</html>

